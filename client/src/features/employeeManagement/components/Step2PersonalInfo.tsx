import React, { useState, useEffect } from "react";
import { PersonalInfo } from "../types/onboarding";

interface Step2PersonalInfoProps {
  data: PersonalInfo;
  onUpdate: (data: PersonalInfo) => void;
  onValidationChange: (isValid: boolean) => void;
  errors?: Partial<Record<keyof PersonalInfo, string>>;
}

export const Step2PersonalInfo: React.FC<Step2PersonalInfoProps> = ({
  data: initialData,
  onUpdate,
  onValidationChange,
  errors = {},
}) => {
  const [formData, setFormData] = useState<PersonalInfo>(initialData);
  const [sameAsPermanent, setSameAsPermanent] = useState(false);

  useEffect(() => {
    setFormData(initialData);
  }, [initialData]);

  useEffect(() => {
    const isValid = validateForm(formData);
    onValidationChange(isValid);
  }, [formData]);

  const validateForm = (data: PersonalInfo): boolean => {
    return (
      !!data.lastName &&
      !!data.firstName &&
      !!data.gender &&
      !!data.dateOfBirth &&
      !!data.age &&
      parseInt(data.age) >= 18 &&
      !!data.email &&
      /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(data.email) &&
      !!data.contactNumber &&
      /^[0-9]{10}$/.test(data.contactNumber) &&
      !!data.permanentAddress &&
      !!data.permanentAddressZip &&
      /^[0-9]{4}$/.test(data.permanentAddressZip) &&
      !!data.currentAddress &&
      !!data.currentAddressZip &&
      /^[0-9]{4}$/.test(data.currentAddressZip)
    );
  };

  const handleInputChange = (field: keyof PersonalInfo, value: string) => {
    const newData = { ...formData, [field]: value };
    setFormData(newData);
    onUpdate(newData);
  };

  const handleSameAsPermanentChange = (checked: boolean) => {
    setSameAsPermanent(checked);
    if (checked) {
      const newData = {
        ...formData,
        currentAddress: formData.permanentAddress,
        currentAddressZip: formData.permanentAddressZip,
      };
      setFormData(newData);
      onUpdate(newData);
    }
  };

  const inputClasses = (field: keyof PersonalInfo) =>
    `w-full px-3 py-2 text-sm border ${
      errors[field] ? "border-red-500" : "border-gray-300"
    } rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 
     focus:ring-blue-500 focus:border-blue-500`;

  return (
    <div className="bg-white p-4">
      {/* Name Section */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
        {/* Last Name */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Last Name *
          </label>
          <input
            type="text"
            value={formData.lastName || ""}
            onChange={(e) => handleInputChange("lastName", e.target.value)}
            className={inputClasses("lastName")}
            placeholder="Enter last name"
          />
          {errors.lastName && (
            <p className="mt-1 text-xs text-red-600">{errors.lastName}</p>
          )}
        </div>

        {/* First Name */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            First Name *
          </label>
          <input
            type="text"
            value={formData.firstName || ""}
            onChange={(e) => handleInputChange("firstName", e.target.value)}
            className={inputClasses("firstName")}
            placeholder="Enter first name"
          />
          {errors.firstName && (
            <p className="mt-1 text-xs text-red-600">{errors.firstName}</p>
          )}
        </div>

        {/* Middle Name */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Middle Name
          </label>
          <input
            type="text"
            value={formData.middleName || ""}
            onChange={(e) => handleInputChange("middleName", e.target.value)}
            className={inputClasses("middleName")}
            placeholder="Enter middle name"
          />
        </div>

        {/* Suffix */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Suffix
          </label>
          <input
            type="text"
            value={formData.suffix || ""}
            onChange={(e) => handleInputChange("suffix", e.target.value)}
            className={inputClasses("suffix")}
            placeholder="Enter suffix"
          />
        </div>
      </div>

      {/* Personal Details Section */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
        {/* Gender */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Gender *
          </label>
          <select
            value={formData.gender || ""}
            onChange={(e) => handleInputChange("gender", e.target.value)}
            className={inputClasses("gender")}
          >
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
          {errors.gender && (
            <p className="mt-1 text-xs text-red-600">{errors.gender}</p>
          )}
        </div>

        {/* Civil Status */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Civil Status *
          </label>
          <select
            value={formData.civilStatus || ""}
            onChange={(e) => handleInputChange("civilStatus", e.target.value)}
            className={inputClasses("civilStatus")}
          >
            <option value="">Select</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
          </select>
          {errors.civilStatus && (
            <p className="mt-1 text-xs text-red-600">{errors.civilStatus}</p>
          )}
        </div>

        {/* Date of Birth */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Date of Birth *
          </label>
          <input
            type="date"
            value={formData.dateOfBirth || ""}
            onChange={(e) => handleInputChange("dateOfBirth", e.target.value)}
            className={inputClasses("dateOfBirth")}
          />
          {errors.dateOfBirth && (
            <p className="mt-1 text-xs text-red-600">{errors.dateOfBirth}</p>
          )}
        </div>

        {/* Age */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Age *
          </label>
          <input
            type="number"
            value={formData.age || ""}
            onChange={(e) => handleInputChange("age", e.target.value)}
            className={inputClasses("age")}
            placeholder="Enter age"
            min="18"
            max="100"
          />
          {errors.age && (
            <p className="mt-1 text-xs text-red-600">{errors.age}</p>
          )}
        </div>
        {/* Citizenship */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Citizenship *
          </label>
          <input
            type="text"
            value={formData.citizenship || ""}
            onChange={(e) => handleInputChange("citizenship", e.target.value)}
            className={inputClasses("citizenship")}
            placeholder="Enter citizenship"
          />
          {errors.lastName && (
            <p className="mt-1 text-xs text-red-600">{errors.citizenship}</p>
          )}
        </div>
        {/* Birth Place */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Birth Place *
          </label>
          <input
            type="text"
            value={formData.birthPlace || ""}
            onChange={(e) => handleInputChange("birthPlace", e.target.value)}
            className={inputClasses("birthPlace")}
            placeholder="Enter birth place"
          />
          {errors.lastName && (
            <p className="mt-1 text-xs text-red-600">{errors.birthPlace}</p>
          )}
        </div>
        {/* Nationality */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Nationality *
          </label>
          <input
            type="text"
            value={formData.nationality || ""}
            onChange={(e) => handleInputChange("nationality", e.target.value)}
            className={inputClasses("nationality")}
            placeholder="Enter nationality"
          />
          {errors.lastName && (
            <p className="mt-1 text-xs text-red-600">{errors.nationality}</p>
          )}
        </div>
        {/* Religion */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Religion *
          </label>
          <input
            type="text"
            value={formData.religion || ""}
            onChange={(e) => handleInputChange("religion", e.target.value)}
            className={inputClasses("religion")}
            placeholder="Enter religion"
          />
          {errors.lastName && (
            <p className="mt-1 text-xs text-red-600">{errors.religion}</p>
          )}
        </div>
      </div>

      {/* Contact Section */}
      <div className="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
        {/* Email */}
        <div className="sm:col-span-2">
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Email Address *
          </label>
          <input
            type="email"
            value={formData.email || ""}
            onChange={(e) => handleInputChange("email", e.target.value)}
            className={inputClasses("email")}
            placeholder="Enter email"
          />
          {errors.email && (
            <p className="mt-1 text-xs text-red-600">{errors.email}</p>
          )}
        </div>

        {/* Contact Number */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Contact Number *
          </label>
          <div className="flex">
            <div className="w-16 mr-2">
              <input
                type="text"
                value="+63"
                readOnly
                className="w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm bg-gray-100"
              />
            </div>
            <div className="flex-1">
              <input
                type="tel"
                value={formData.contactNumber || ""}
                onChange={(e) =>
                  handleInputChange("contactNumber", e.target.value)
                }
                className={inputClasses("contactNumber")}
                placeholder="9123456789"
                maxLength={10}
              />
            </div>
          </div>
          {errors.contactNumber && (
            <p className="mt-1 text-xs text-red-600">{errors.contactNumber}</p>
          )}
        </div>
      </div>

      {/* Address Section */}
      <div className="mb-4">
        {/* Permanent Address */}
        <h3 className="text-sm font-medium text-gray-700 mb-2">
          Permanent Address
        </h3>
        <div className="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Permanent Address *
            </label>
            <input
              type="text"
              value={formData.permanentAddress || ""}
              onChange={(e) =>
                handleInputChange("permanentAddress", e.target.value)
              }
              className={inputClasses("permanentAddress")}
              placeholder="House #, Street, Barangay"
            />
            {errors.permanentAddress && (
              <p className="mt-1 text-xs text-red-600">
                {errors.permanentAddress}
              </p>
            )}
          </div>

          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Zip Code *
            </label>
            <input
              type="text"
              value={formData.permanentAddressZip || ""}
              onChange={(e) =>
                handleInputChange("permanentAddressZip", e.target.value)
              }
              className={inputClasses("permanentAddressZip")}
              placeholder="Enter zip code"
              maxLength={4}
            />
            {errors.permanentAddressZip && (
              <p className="mt-1 text-xs text-red-600">
                {errors.permanentAddressZip}
              </p>
            )}
          </div>
        </div>

        {/* Current Address */}
        <div className="flex items-center justify-between mb-2">
          <h3 className="text-sm font-medium text-gray-700">Current Address</h3>
          <label className="flex items-center space-x-2 cursor-pointer">
            <input
              type="checkbox"
              checked={sameAsPermanent}
              onChange={(e) => handleSameAsPermanentChange(e.target.checked)}
              className="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
            />
            <span className="text-xs text-gray-700">Same as Permanent</span>
          </label>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Current Address *
            </label>
            <input
              type="text"
              value={formData.currentAddress || ""}
              onChange={(e) =>
                handleInputChange("currentAddress", e.target.value)
              }
              className={inputClasses("currentAddress")}
              placeholder="House #, Street, Barangay"
              disabled={sameAsPermanent}
            />
            {errors.currentAddress && (
              <p className="mt-1 text-xs text-red-600">
                {errors.currentAddress}
              </p>
            )}
          </div>

          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Zip Code *
            </label>
            <input
              type="text"
              value={formData.currentAddressZip || ""}
              onChange={(e) =>
                handleInputChange("currentAddressZip", e.target.value)
              }
              className={inputClasses("currentAddressZip")}
              placeholder="Enter zip code"
              maxLength={4}
              disabled={sameAsPermanent}
            />
            {errors.currentAddressZip && (
              <p className="mt-1 text-xs text-red-600">
                {errors.currentAddressZip}
              </p>
            )}
          </div>
        </div>
      </div>
    </div>
  );
};
