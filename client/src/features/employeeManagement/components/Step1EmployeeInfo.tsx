import React, { useState, useEffect } from "react";
import { EmployeeInfo } from "../types/onboarding";
import axios from "axios";
import { useParams } from "react-router-dom";

interface Step1EmployeeInfoProps {
  data: EmployeeInfo;
  onUpdate: (data: EmployeeInfo) => void;
  onValidationChange: (isValid: boolean) => void;
  isEditMode?: boolean;
}

interface ApiOption {
  id: string;
  name: string;
  first_name?: string;
  last_name?: string;
  department_id?: string;
  company_id?: string;
  work_email?: string;
}

interface ValidationErrors {
  dateHired?: string;
  employmentType?: string;
  jobPosition?: string;
  company?: string;
  department?: string;
  immediateSupervisor?: string;
  employeeStatus?: string;
}

interface TouchedFields {
  dateHired?: boolean;
  employmentType?: boolean;
  jobPosition?: boolean;
  company?: boolean;
  department?: boolean;
  immediateSupervisor?: boolean;
  employeeStatus?: boolean;
}

export const Step1EmployeeInfo: React.FC<Step1EmployeeInfoProps> = ({
  data: initialData,
  onUpdate,
  onValidationChange,
  isEditMode = false,
}) => {
  const { id } = useParams<{ id: string }>();

  const getInitialFormData = (): EmployeeInfo => {
    const savedData = sessionStorage.getItem("employeeInformation");
    const baseData = savedData ? JSON.parse(savedData) : initialData;

    return {
      ...baseData,
      employeeNumber: isEditMode && id ? id : baseData.employeeNumber || "",
    };
  };

  const [formData, setFormData] = useState<EmployeeInfo>(getInitialFormData());
  const [errors, setErrors] = useState<ValidationErrors>({});
  const [touched, setTouched] = useState<TouchedFields>({});
  const [lastEmployeeId, setLastEmployeeId] = useState<number>(0);

  useEffect(() => {
    validateForm(formData, false);
  }, []);

  const API_BASE_URL = import.meta.env.VITE_API_BASE_URL ?? "";

  const [companies, setCompanies] = useState<ApiOption[]>([]);
  const [departments, setDepartments] = useState<ApiOption[]>([]);
  const [employmentTypes, setEmploymentTypes] = useState<ApiOption[]>([]);
  const [jobPositions, setJobPositions] = useState<ApiOption[]>([]);
  const [employeeStatuses, setEmployeeStatuses] = useState<ApiOption[]>([]);
  const [supervisors, setSupervisors] = useState<ApiOption[]>([]);
  const [loading, setLoading] = useState({
    companies: true,
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
          companiesRes,
          employmentTypesRes,
          employeeStatusesRes,
          supervisorsRes,
          jobPositionsRes,
        ] = await Promise.all([
          api.get("/companies"),
          api.get("/employment-types"),
          api.get("/employee-statuses"),
          api.get("/employees"),
          api.get("/job-positions"),
        ]);

        setCompanies(companiesRes.data.data || []);
        setEmploymentTypes(employmentTypesRes.data.data || []);
        setEmployeeStatuses(employeeStatusesRes.data.data || []);
        setSupervisors(supervisorsRes.data.data || []);
        setJobPositions(jobPositionsRes.data.data || []);

        setLoading({
          companies: false,
          employmentTypes: false,
          jobPositions: false,
          employeeStatuses: false,
          supervisors: false,
          departments: false,
        });

        if (isEditMode && id) {
          const employeeNumber = id.startsWith("EMP-")
            ? id
            : `EMP-${String(id).padStart(6, "0")}`;

          const newFormData = {
            ...formData,
            employeeNumber,
          };
          setFormData(newFormData);
          onUpdate(newFormData);
          sessionStorage.setItem(
            "employeeInformation",
            JSON.stringify(newFormData)
          );
        } else {
          const lastEmployeeRes = await api.get(
            "/employees?sort[id]=desc&limit=1"
          );
          const lastEmployee = lastEmployeeRes.data.data[0] || { id: "0" };
          const newId = parseInt(lastEmployee.id) + 1;
          setLastEmployeeId(newId);

          const employeeNumber = `EMP-${String(newId).padStart(6, "0")}`;

          const newFormData = {
            ...formData,
            employeeNumber,
            email: lastEmployee.work_email || "",
          };

          setFormData(newFormData);
          onUpdate(newFormData);
          sessionStorage.setItem(
            "employeeInformation",
            JSON.stringify(newFormData)
          );
        }

        if (formData.company) {
          await fetchDepartments(formData.company);
        }
      } catch (err) {
        handleApiError(err);
      }
    };

    fetchData();
    return () => {
      axios.CancelToken.source().cancel("Component unmounted");
    };
  }, [isEditMode, id]);

  const fetchDepartments = async (companyId: string) => {
    try {
      setLoading((prev) => ({ ...prev, departments: true }));
      const response = await api.get(
        `/companies/${companyId}?load=departments`
      );

      const responseData =
        response.status === 302 ? response.data.data : response.data.data;
      const newDepartments = responseData.departments || [];

      setDepartments(newDepartments);
      setLoading((prev) => ({ ...prev, departments: false }));

      if (isEditMode && formData.department) {
        const departmentExists = newDepartments.some(
          (dept: ApiOption) => dept.id === formData.department
        );
        if (!departmentExists) {
          const newData = { ...formData, department: "" };
          setFormData(newData);
          onUpdate(newData);
        }
      }
    } catch (err) {
      if (
        axios.isAxiosError(err) &&
        err.response?.status === 302 &&
        err.response?.data?.data
      ) {
        const responseData = err.response.data.data;
        const newDepartments = responseData.departments || [];
        setDepartments(newDepartments);
      }
      setLoading((prev) => ({ ...prev, departments: false }));
    }
  };

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

  const validateDateHired = (value: string): string | undefined => {
    if (!value) return "Date hired is required";
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    const selectedDate = new Date(value);
    if (selectedDate > today) return "Date cannot be in the future";
    return undefined;
  };

  const validateRequiredField = (
    value: string,
    fieldName: string
  ): string | undefined => {
    if (!value) return `${fieldName} is required`;
    return undefined;
  };

  const validateForm = (data: EmployeeInfo, showErrors = true): boolean => {
    const newErrors: ValidationErrors = {
      dateHired: validateDateHired(data.dateHired),
      employmentType: validateRequiredField(
        data.employmentType,
        "Employment type"
      ),
      jobPosition: validateRequiredField(data.jobPosition, "Job position"),
      company: validateRequiredField(data.company, "Company"),
      department: validateRequiredField(data.department, "Department"),
      immediateSupervisor: validateRequiredField(
        data.immediateSupervisor,
        "Immediate supervisor"
      ),
      employeeStatus: validateRequiredField(
        data.employeeStatus,
        "Employee status"
      ),
    };

    if (showErrors) {
      setErrors(newErrors);
    }

    const isValid = !Object.values(newErrors).some((error) => error);
    onValidationChange(isValid);
    return isValid;
  };

  const handleInputChange = (field: keyof EmployeeInfo, value: string) => {
    const newData = { ...formData, [field]: value };

    if (field === "company") {
      newData.department = "";
      fetchDepartments(value);
    }

    setFormData(newData);
    onUpdate(newData);
    sessionStorage.setItem("employeeInformation", JSON.stringify(newData));

    if (touched[field as keyof TouchedFields]) {
      const newErrors = { ...errors };
      switch (field) {
        case "dateHired":
          newErrors.dateHired = validateDateHired(value);
          break;
        default:
          if (field in newErrors) {
            newErrors[field as keyof ValidationErrors] = validateRequiredField(
              value,
              field.toString()
            );
          }
      }
      setErrors(newErrors);
    }

    validateForm(newData, false);
  };

  const handleBlur = (field: keyof EmployeeInfo) => {
    setTouched((prev) => ({ ...prev, [field]: true }));

    const newErrors = { ...errors };
    switch (field) {
      case "dateHired":
        newErrors.dateHired = validateDateHired(formData.dateHired);
        break;
      default:
        if (field in newErrors) {
          newErrors[field as keyof ValidationErrors] = validateRequiredField(
            formData[field],
            field.toString()
          );
        }
    }
    setErrors(newErrors);
  };

  const shouldShowError = (field: keyof TouchedFields): boolean => {
    return !!touched[field] && !!errors[field];
  };

  return (
    <div className="py-6 px-4">
      {error && (
        <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
          {error}
        </div>
      )}

      <div className="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        <div>
          <label
            htmlFor="employeeNumber"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Employee Number
          </label>
          <input
            type="text"
            id="employeeNumber"
            value={
              isEditMode
                ? formData.employeeNumber
                : formData.employeeNumber || "Generating..."
            }
            readOnly
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 cursor-not-allowed"
          />
          <p className="mt-1 text-xs text-gray-500">
            {isEditMode ? "Employee ID" : "Automatically generated"}
          </p>
        </div>
        <div>
          <label
            htmlFor="dateHired"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Date Hired <span className="text-red-400">*</span>
          </label>
          <div className="relative">
            <input
              type="date"
              id="dateHired"
              disabled={isEditMode}
              value={formData.dateHired}
              onChange={(e) => handleInputChange("dateHired", e.target.value)}
              onBlur={() => handleBlur("dateHired")}
              className={`w-full px-3 py-2 border ${
                shouldShowError("dateHired")
                  ? "border-red-500"
                  : "border-gray-300"
              } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 ${
                isEditMode
                  ? "disabled:opacity-50 bg-gray-100 cursor-not-allowed"
                  : ""
              }`}
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
          {shouldShowError("dateHired") && (
            <p className="mt-1 text-sm text-red-600">{errors.dateHired}</p>
          )}
        </div>

        <div>
          <label
            htmlFor="company"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Company <span className="text-red-400">*</span>
          </label>
          <select
            id="company"
            value={formData.company}
            onChange={(e) => handleInputChange("company", e.target.value)}
            onBlur={() => handleBlur("company")}
            disabled={loading.companies}
            className={`w-full px-3 py-2 border ${
              shouldShowError("company") ? "border-red-500" : "border-gray-300"
            } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50`}
          >
            <option value="">
              {loading.companies ? "Loading..." : "Select"}
            </option>
            {companies.map((company) => (
              <option key={company.id} value={company.id}>
                {company.name}
              </option>
            ))}
          </select>
          {shouldShowError("company") && (
            <p className="mt-1 text-sm text-red-600">{errors.company}</p>
          )}
        </div>

        <div>
          <label
            htmlFor="department"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Department <span className="text-red-400">*</span>
          </label>
          <select
            id="department"
            value={formData.department}
            onChange={(e) => handleInputChange("department", e.target.value)}
            onBlur={() => handleBlur("department")}
            disabled={loading.departments || !formData.company}
            className={`w-full px-3 py-2 border ${
              shouldShowError("department")
                ? "border-red-500"
                : "border-gray-300"
            } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50`}
          >
            <option value="">
              {loading.departments
                ? "Loading..."
                : !formData.company
                ? "Select a company first"
                : "Select"}
            </option>
            {departments.map((dept) => (
              <option key={dept.id} value={dept.id}>
                {dept.name}
              </option>
            ))}
          </select>
          {shouldShowError("department") && (
            <p className="mt-1 text-sm text-red-600">{errors.department}</p>
          )}
        </div>

        <div>
          <label
            htmlFor="employmentType"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Employment Type <span className="text-red-400">*</span>
          </label>
          <select
            id="employmentType"
            value={formData.employmentType}
            onChange={(e) =>
              handleInputChange("employmentType", e.target.value)
            }
            onBlur={() => handleBlur("employmentType")}
            disabled={loading.employmentTypes}
            className={`w-full px-3 py-2 border ${
              shouldShowError("employmentType")
                ? "border-red-500"
                : "border-gray-300"
            } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50`}
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
          {shouldShowError("employmentType") && (
            <p className="mt-1 text-sm text-red-600">{errors.employmentType}</p>
          )}
        </div>

        <div>
          <label
            htmlFor="jobPosition"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Job Position <span className="text-red-400">*</span>
          </label>
          <select
            id="jobPosition"
            value={formData.jobPosition}
            onChange={(e) => handleInputChange("jobPosition", e.target.value)}
            onBlur={() => handleBlur("jobPosition")}
            disabled={loading.jobPositions}
            className={`w-full px-3 py-2 border ${
              shouldShowError("jobPosition")
                ? "border-red-500"
                : "border-gray-300"
            } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50`}
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
          {shouldShowError("jobPosition") && (
            <p className="mt-1 text-sm text-red-600">{errors.jobPosition}</p>
          )}
        </div>

        <div>
          <label
            htmlFor="immediateSupervisor"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Immediate Supervisor <span className="text-red-400">*</span>
          </label>
          <select
            id="immediateSupervisor"
            value={formData.immediateSupervisor}
            onChange={(e) =>
              handleInputChange("immediateSupervisor", e.target.value)
            }
            onBlur={() => handleBlur("immediateSupervisor")}
            disabled={loading.supervisors}
            className={`w-full px-3 py-2 border ${
              shouldShowError("immediateSupervisor")
                ? "border-red-500"
                : "border-gray-300"
            } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50`}
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
          {shouldShowError("immediateSupervisor") && (
            <p className="mt-1 text-sm text-red-600">
              {errors.immediateSupervisor}
            </p>
          )}
        </div>

        <div>
          <label
            htmlFor="employeeStatus"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Employee Status <span className="text-red-400">*</span>
          </label>
          <select
            id="employeeStatus"
            value={formData.employeeStatus}
            onChange={(e) =>
              handleInputChange("employeeStatus", e.target.value)
            }
            onBlur={() => handleBlur("employeeStatus")}
            disabled={loading.employeeStatuses}
            className={`w-full px-3 py-2 border ${
              shouldShowError("employeeStatus")
                ? "border-red-500"
                : "border-gray-300"
            } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50`}
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
          {shouldShowError("employeeStatus") && (
            <p className="mt-1 text-sm text-red-600">{errors.employeeStatus}</p>
          )}
        </div>

        <div>
          <label
            htmlFor="email"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Work Email Address
          </label>
          <input
            type="email"
            id="email"
            value={formData.email || "No existing work email"}
            disabled
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 cursor-not-allowed"
          />
          <p className="mt-1 text-xs text-gray-500">
            {formData.email
              ? "Automatically retrieved"
              : "Will be created after onboarding"}
          </p>
        </div>
      </div>
    </div>
  );
};
