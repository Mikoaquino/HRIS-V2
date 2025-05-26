import React, { useState, useEffect } from "react";
import { GovernmentID } from "../types/onboarding";

interface Step3GovernmentIDProps {
  data: GovernmentID;
  onUpdate: (data: GovernmentID) => void;
  onValidationChange: (isValid: boolean) => void;
}

export const Step3GovernmentID: React.FC<Step3GovernmentIDProps> = ({
  data: initialData,
  onUpdate,
  onValidationChange,
}) => {
  // Use local state to manage form data
  const [formData, setFormData] = useState<GovernmentID>(initialData);

  // Update local state when parent data changes
  useEffect(() => {
    setFormData(initialData);
  }, [initialData]);

  const handleInputChange = (field: keyof GovernmentID, value: string) => {
    const newData = { ...formData, [field]: value };
    setFormData(newData);
    onUpdate(newData);
    sessionStorage.setItem("governmentIDs", JSON.stringify(newData));
    validateForm(newData);
  };

  const validateForm = (formData: GovernmentID) => {
    const isValid =
      formData.sssNumber.trim() !== "" &&
      formData.tinNumber.trim() !== "" &&
      formData.pagibigNumber.trim() !== "" &&
      formData.philhealthNumber.trim() !== "";
    onValidationChange(isValid);
  };

  return (
    <div className="bg-white py-6 px-4">
      <div className="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-6">
        {/* SSS Number */}
        <div>
          <label
            htmlFor="sssNumber"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            SSS Number *
          </label>
          <input
            type="text"
            id="sssNumber"
            placeholder="Enter SSS number"
            value={formData.sssNumber}
            onChange={(e) => handleInputChange("sssNumber", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

        {/* TIN Number */}
        <div>
          <label
            htmlFor="tinNumber"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            TIN Number *
          </label>
          <input
            type="text"
            id="tinNumber"
            placeholder="Enter TIN number"
            value={formData.tinNumber}
            onChange={(e) => handleInputChange("tinNumber", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

        {/* Pag-IBIG Number */}
        <div>
          <label
            htmlFor="pagibigNumber"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            Pag-IBIG Number *
          </label>
          <input
            type="text"
            id="pagibigNumber"
            placeholder="Enter Pag-IBIG number"
            value={formData.pagibigNumber}
            onChange={(e) => handleInputChange("pagibigNumber", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

        {/* PhilHealth Number */}
        <div>
          <label
            htmlFor="philhealthNumber"
            className="block text-sm font-medium text-gray-700 mb-2"
          >
            PhilHealth Number *
          </label>
          <input
            type="text"
            id="philhealthNumber"
            placeholder="Enter PhilHealth number"
            value={formData.philhealthNumber}
            onChange={(e) =>
              handleInputChange("philhealthNumber", e.target.value)
            }
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>
      </div>
    </div>
  );
};
