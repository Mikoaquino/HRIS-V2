import React from "react";
import { EmployeeInfo } from "../types/onboarding";

interface Step1EmployeeInfoProps {
  data: EmployeeInfo;
  onUpdate: (data: EmployeeInfo) => void;
}

export const Step1EmployeeInfo: React.FC<Step1EmployeeInfoProps> = ({
  data,
  onUpdate,
}) => {
  const handleInputChange = (field: keyof EmployeeInfo, value: string) => {
    onUpdate({ ...data, [field]: value });
  };

  return (
    <div className="bg-white py-6">
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
            value={data.employeeNumber}
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
              type="text"
              id="dateHired"
              placeholder="MM/DD/YYYY"
              value={data.dateHired}
              onChange={(e) => handleInputChange("dateHired", e.target.value)}
              className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
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
            value={data.employmentType}
            onChange={(e) =>
              handleInputChange("employmentType", e.target.value)
            }
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          >
            <option value="Placeholder">Select</option>
            <option value="Probationary">Probationary</option>
            <option value="Regular">Regular</option>
            <option value="Contractual">Contractual</option>
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
            value={data.jobPosition}
            onChange={(e) => handleInputChange("jobPosition", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          >
            <option value="Placeholder">Select</option>
            <option value="Developer">Developer</option>
            <option value="Manager">Manager</option>
            <option value="Analyst">Analyst</option>
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
            value={data.department}
            onChange={(e) => handleInputChange("department", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          >
            <option value="Placeholder">Select</option>
            <option value="IT">IT Department</option>
            <option value="HR">HR Department</option>
            <option value="Finance">Finance Department</option>
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
            value={data.immediateSupervisor}
            onChange={(e) =>
              handleInputChange("immediateSupervisor", e.target.value)
            }
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          >
            <option value="Placeholder">Select</option>
            <option value="John Doe">John Doe</option>
            <option value="Jane Smith">Jane Smith</option>
            <option value="Mike Johnson">Mike Johnson</option>
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
            value={data.employeeStatus}
            onChange={(e) =>
              handleInputChange("employeeStatus", e.target.value)
            }
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          >
            <option value="Placeholder">Select</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            <option value="On Leave">On Leave</option>
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
            value={data.email}
            onChange={(e) => handleInputChange("email", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>
      </div>
    </div>
  );
};
