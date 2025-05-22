import React from "react";
import { GovernmentID } from "../types/onboarding";

interface Step3GovernmentIDProps {
  data: GovernmentID;
  onUpdate: (data: GovernmentID) => void;
}

export const Step3GovernmentID: React.FC<Step3GovernmentIDProps> = ({
  data,
  onUpdate,
}) => {
  const handleInputChange = (field: keyof GovernmentID, value: string) => {
    onUpdate({ ...data, [field]: value });
  };

  return (
    <div className="bg-white p-6">
      <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
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
            value={data.sssNumber}
            onChange={(e) => handleInputChange("sssNumber", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

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
            value={data.tinNumber}
            onChange={(e) => handleInputChange("tinNumber", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

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
            value={data.pagibigNumber}
            onChange={(e) => handleInputChange("pagibigNumber", e.target.value)}
            className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

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
            value={data.philhealthNumber}
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
