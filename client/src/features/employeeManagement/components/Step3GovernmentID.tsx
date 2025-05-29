import React, { useState, useEffect } from "react";
import { GovernmentID } from "../types/onboarding";

interface Step3GovernmentIDProps {
  data: GovernmentID;
  onUpdate: (data: GovernmentID) => void;
  onValidationChange: (isValid: boolean) => void;
}

interface ValidationErrors {
  sssNumber?: string;
  tinNumber?: string;
  pagibigNumber?: string;
  philhealthNumber?: string;
}

interface TouchedFields {
  sssNumber?: boolean;
  tinNumber?: boolean;
  pagibigNumber?: boolean;
  philhealthNumber?: boolean;
}

export const Step3GovernmentID: React.FC<Step3GovernmentIDProps> = ({
  data: initialData,
  onUpdate,
  onValidationChange,
}) => {
  const getInitialFormData = (): GovernmentID => {
    const savedData = sessionStorage.getItem("governmentIDs");
    if (!savedData) return initialData;

    const parsedData = JSON.parse(savedData);
    return parsedData.hasOwnProperty("0") ? parsedData[0] : parsedData;
  };

  const [formData, setFormData] = useState<GovernmentID>(getInitialFormData());
  const [errors, setErrors] = useState<ValidationErrors>({});
  const [touched, setTouched] = useState<TouchedFields>({});

  useEffect(() => {
    validateForm(formData, false);
  }, []);

  const validateSSSNumber = (value: string): string | undefined => {
    if (!value.trim()) return "SSS number is required";
    if (!/^\d+$/.test(value)) return "Must contain only numbers";
    if (value.length !== 12) return "Must be 12 digits";
    return undefined;
  };

  const validateTINNumber = (value: string): string | undefined => {
    if (!value.trim()) return "TIN number is required";
    if (!/^\d+$/.test(value)) return "Must contain only numbers";
    if (value.length !== 12) return "Must be 12 digits";
    return undefined;
  };

  const validatePagibigNumber = (value: string): string | undefined => {
    if (!value.trim()) return "Pag-IBIG number is required";
    if (!/^\d+$/.test(value)) return "Must contain only numbers";
    if (value.length !== 12) return "Must be 12 digits";
    return undefined;
  };

  const validatePhilhealthNumber = (value: string): string | undefined => {
    if (!value.trim()) return "PhilHealth number is required";
    if (!/^\d+$/.test(value)) return "Must contain only numbers";
    if (value.length !== 12) return "Must be 12 digits";
    return undefined;
  };

  const validateForm = (data: GovernmentID, showErrors = true): boolean => {
    const newErrors: ValidationErrors = {
      sssNumber: validateSSSNumber(data.sssNumber || ""),
      tinNumber: validateTINNumber(data.tinNumber || ""),
      pagibigNumber: validatePagibigNumber(data.pagibigNumber || ""),
      philhealthNumber: validatePhilhealthNumber(data.philhealthNumber || ""),
    };

    if (showErrors) {
      setErrors(newErrors);
    }

    const isValid = !Object.values(newErrors).some((error) => error);
    onValidationChange(isValid);
    return isValid;
  };

  const handleInputChange = (field: keyof GovernmentID, value: string) => {
    const numericValue = value.replace(/\D/g, "");
    const trimmedValue = numericValue.slice(0, 12);

    const newData = { ...formData, [field]: trimmedValue };
    setFormData(newData);
    onUpdate(newData);
    sessionStorage.setItem("governmentIDs", JSON.stringify(newData));

    if (touched[field]) {
      const newErrors = { ...errors };
      switch (field) {
        case "sssNumber":
          newErrors.sssNumber = validateSSSNumber(trimmedValue);
          break;
        case "tinNumber":
          newErrors.tinNumber = validateTINNumber(trimmedValue);
          break;
        case "pagibigNumber":
          newErrors.pagibigNumber = validatePagibigNumber(trimmedValue);
          break;
        case "philhealthNumber":
          newErrors.philhealthNumber = validatePhilhealthNumber(trimmedValue);
          break;
      }
      setErrors(newErrors);
    }

    validateForm(newData, false);
  };

  const handleBlur = (field: keyof GovernmentID) => {
    setTouched((prev) => ({ ...prev, [field]: true }));

    const newErrors = { ...errors };
    switch (field) {
      case "sssNumber":
        newErrors.sssNumber = validateSSSNumber(formData.sssNumber || "");
        break;
      case "tinNumber":
        newErrors.tinNumber = validateTINNumber(formData.tinNumber || "");
        break;
      case "pagibigNumber":
        newErrors.pagibigNumber = validatePagibigNumber(
          formData.pagibigNumber || ""
        );
        break;
      case "philhealthNumber":
        newErrors.philhealthNumber = validatePhilhealthNumber(
          formData.philhealthNumber || ""
        );
        break;
    }
    setErrors(newErrors);
  };

  const shouldShowError = (field: keyof TouchedFields): boolean => {
    return !!touched[field] && !!errors[field];
  };

  const inputClasses = (field: keyof GovernmentID) =>
    `w-full px-3 py-2 border ${
      shouldShowError(field) ? "border-red-500" : "border-gray-300"
    } rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500`;

  return (
    <div className="py-6 px-4">
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
            placeholder="Enter 12-digit SSS number"
            value={formData.sssNumber}
            onChange={(e) => handleInputChange("sssNumber", e.target.value)}
            onBlur={() => handleBlur("sssNumber")}
            className={inputClasses("sssNumber")}
            maxLength={12}
            inputMode="numeric"
          />
          {shouldShowError("sssNumber") && (
            <p className="mt-1 text-sm text-red-600">{errors.sssNumber}</p>
          )}
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
            placeholder="Enter 12-digit TIN number"
            value={formData.tinNumber}
            onChange={(e) => handleInputChange("tinNumber", e.target.value)}
            onBlur={() => handleBlur("tinNumber")}
            className={inputClasses("tinNumber")}
            maxLength={12}
            inputMode="numeric"
          />
          {shouldShowError("tinNumber") && (
            <p className="mt-1 text-sm text-red-600">{errors.tinNumber}</p>
          )}
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
            placeholder="Enter 12-digit Pag-IBIG number"
            value={formData.pagibigNumber}
            onChange={(e) => handleInputChange("pagibigNumber", e.target.value)}
            onBlur={() => handleBlur("pagibigNumber")}
            className={inputClasses("pagibigNumber")}
            maxLength={12}
            inputMode="numeric"
          />
          {shouldShowError("pagibigNumber") && (
            <p className="mt-1 text-sm text-red-600">{errors.pagibigNumber}</p>
          )}
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
            placeholder="Enter 12-digit PhilHealth number"
            value={formData.philhealthNumber}
            onChange={(e) =>
              handleInputChange("philhealthNumber", e.target.value)
            }
            onBlur={() => handleBlur("philhealthNumber")}
            className={inputClasses("philhealthNumber")}
            maxLength={12}
            inputMode="numeric"
          />
          {shouldShowError("philhealthNumber") && (
            <p className="mt-1 text-sm text-red-600">
              {errors.philhealthNumber}
            </p>
          )}
        </div>
      </div>
    </div>
  );
};
