import React, { useState, useEffect } from "react";
import { EmployeeInfo } from "../types/onboarding";
import axios from "axios";

interface Step1EmployeeInfoProps {
  data: EmployeeInfo;
  onUpdate: (data: EmployeeInfo) => void;
  onValidationChange: (isValid: boolean) => void;
}

interface ApiOption {
  id: string;
  name: string;
  first_name?: string;
  last_name?: string;
  department_id?: string;
}

export const Step1EmployeeInfo: React.FC<Step1EmployeeInfoProps> = ({
  data: initialData,
  onUpdate,
  onValidationChange,
}) => {
  const [formData, setFormData] = useState<EmployeeInfo>(initialData);

  useEffect(() => {
    setFormData(initialData);
  }, [initialData]);

  const API_BASE_URL = import.meta.env.VITE_API_BASE_URL ?? "";

  const [departments, setDepartments] = useState<ApiOption[]>([]);
  const [employmentTypes, setEmploymentTypes] = useState<ApiOption[]>([]);
  const [jobPositions, setJobPositions] = useState<ApiOption[]>([]);
  const [employeeStatuses, setEmployeeStatuses] = useState<ApiOption[]>([]);
  const [supervisors, setSupervisors] = useState<ApiOption[]>([]);
  const [loading, setLoading] = useState({
    departments: true,
    employmentTypes: true,
    jobPositions: true,
    employeeStatuses: true,
    supervisors: true,
  });
  const [error, setError] = useState<string | null>(null);

  const getAuthToken = (): string | null => {
    return sessionStorage.getItem("token");
  };

  const api = axios.create({
    baseURL: `${API_BASE_URL}/api/v1/`,
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${getAuthToken()}`,
    },
  });

  useEffect(() => {
    const fetchData = async () => {
      const token = getAuthToken();
      if (!token) {
        setError("Authentication token not found");
        return;
      }

      try {
        const [
          departmentsRes,
          employmentTypesRes,
          employeeStatusesRes,
          supervisorsRes,
          jobPositionsRes,
        ] = await Promise.all([
          api.get("/departments"),
          api.get("/employment-types"),
          api.get("/employee-statuses"),
          api.get("/employees"),
          api.get("/job-positions"),
        ]);

        setDepartments(departmentsRes.data.data || []);
        setEmploymentTypes(employmentTypesRes.data.data || []);
        setEmployeeStatuses(employeeStatusesRes.data.data || []);
        setSupervisors(supervisorsRes.data.data || []);
        setJobPositions(jobPositionsRes.data.data || []);

        setLoading({
          departments: false,
          employmentTypes: false,
          jobPositions: false,
          employeeStatuses: false,
          supervisors: false,
        });
      } catch (err) {
        handleApiError(err);
      }
    };

    fetchData();

    return () => {
      axios.CancelToken.source().cancel("Component unmounted");
    };
  }, []);

  const handleApiError = (err: unknown) => {
    if (axios.isAxiosError(err)) {
      if (err.response?.status === 401) {
        setError("Session expired. Please log in again.");
      } else {
        setError(
          `Failed to load data: ${err.response?.data?.message || err.message}`
        );
      }
    } else {
      setError("Failed to load dropdown options");
    }
    console.error("Error fetching data:", err);
  };

  const handleInputChange = (field: keyof EmployeeInfo, value: string) => {
    const newData = { ...formData, [field]: value };
    setFormData(newData);
    onUpdate(newData);
    sessionStorage.setItem("employeeInformation", JSON.stringify(newData));
    validateForm(newData);
  };

  const validateForm = (formData: EmployeeInfo) => {
    const isValid =
      formData.employeeNumber.trim() !== "" &&
      formData.dateHired.trim() !== "" &&
      formData.employmentType !== "" &&
      formData.jobPosition !== "" &&
      formData.department !== "" &&
      formData.immediateSupervisor !== "" &&
      formData.employeeStatus !== "" &&
      formData.email.trim() !== "" &&
      /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email);
    onValidationChange(isValid);
  };

  return (
    <div className="bg-white py-6 px-4">
      {error && (
        <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
          {error}
        </div>
      )}

      <div className="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        {/* Employee Number */}
        <div>
          <label
            htmlFor="employeeNumber"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Employee Number *
          </label>
          <input
            type="text"
            id="employeeNumber"
            placeholder="Enter employee number"
            value={formData.employeeNumber}
            onChange={(e) =>
              handleInputChange("employeeNumber", e.target.value)
            }
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

        {/* Date Hired */}
        <div>
          <label
            htmlFor="dateHired"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Date Hired *
          </label>
          <div className="relative">
            <input
              type="date"
              id="dateHired"
              value={formData.dateHired}
              onChange={(e) => handleInputChange("dateHired", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
            <div className="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
              <svg
                className="w-4 h-4 text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                />
              </svg>
            </div>
          </div>
        </div>

        {/* Employment Type */}
        <div>
          <label
            htmlFor="employmentType"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Employment Type *
          </label>
          <select
            id="employmentType"
            value={formData.employmentType}
            onChange={(e) =>
              handleInputChange("employmentType", e.target.value)
            }
            disabled={loading.employmentTypes}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50"
          >
            <option value="">
              {loading.employmentTypes ? "Loading..." : "Select"}
            </option>
            {employmentTypes.map((type) => (
              <option key={type.id} value={type.id}>
                {type.name}
              </option>
            ))}
          </select>
        </div>

        {/* Job Position */}
        <div>
          <label
            htmlFor="jobPosition"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Job Position *
          </label>
          <select
            id="jobPosition"
            value={formData.jobPosition}
            onChange={(e) => handleInputChange("jobPosition", e.target.value)}
            disabled={loading.jobPositions}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50"
          >
            <option value="">
              {loading.jobPositions ? "Loading..." : "Select"}
            </option>
            {jobPositions.map((position) => (
              <option key={position.id} value={position.id}>
                {position.name}
              </option>
            ))}
          </select>
        </div>

        {/* Department */}
        <div>
          <label
            htmlFor="department"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Department *
          </label>
          <select
            id="department"
            value={formData.department}
            onChange={(e) => handleInputChange("department", e.target.value)}
            disabled={loading.departments}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50"
          >
            <option value="">
              {loading.departments ? "Loading..." : "Select"}
            </option>
            {departments.map((dept) => (
              <option key={dept.id} value={dept.id}>
                {dept.name}
              </option>
            ))}
          </select>
        </div>

        {/* Immediate Supervisor */}
        <div>
          <label
            htmlFor="immediateSupervisor"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Immediate Supervisor *
          </label>
          <select
            id="immediateSupervisor"
            value={formData.immediateSupervisor}
            onChange={(e) =>
              handleInputChange("immediateSupervisor", e.target.value)
            }
            disabled={loading.supervisors}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50"
          >
            <option value="">
              {loading.supervisors ? "Loading..." : "Select"}
            </option>
            {supervisors.map((supervisor) => (
              <option key={supervisor.id} value={supervisor.id}>
                {supervisor.first_name} {supervisor.last_name}
              </option>
            ))}
          </select>
        </div>

        {/* Employee Status */}
        <div>
          <label
            htmlFor="employeeStatus"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Employee Status *
          </label>
          <select
            id="employeeStatus"
            value={formData.employeeStatus}
            onChange={(e) =>
              handleInputChange("employeeStatus", e.target.value)
            }
            disabled={loading.employeeStatuses}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50"
          >
            <option value="">
              {loading.employeeStatuses ? "Loading..." : "Select"}
            </option>
            {employeeStatuses.map((status) => (
              <option key={status.id} value={status.id}>
                {status.name}
              </option>
            ))}
          </select>
        </div>

        {/* Email Address */}
        <div>
          <label
            htmlFor="email"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Email Address *
          </label>
          <input
            type="email"
            id="email"
            placeholder="johndoe@gmail.com"
            value={formData.email}
            onChange={(e) => handleInputChange("email", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>
      </div>
    </div>
  );
};
