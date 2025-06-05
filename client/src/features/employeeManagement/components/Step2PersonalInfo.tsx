import React, { useState, useEffect } from "react";
import { PersonalInfo } from "../types/onboarding";

interface Step2PersonalInfoProps {
  data: PersonalInfo;
  onUpdate: (data: PersonalInfo) => void;
  onValidationChange: (isValid: boolean) => void;
}

interface ValidationErrors {
  lastName?: string;
  firstName?: string;
  middleName?: string;
  suffix?: string;
  gender?: string;
  civilStatus?: string;
  dateOfBirth?: string;
  age?: string;
  citizenship?: string;
  birthPlace?: string;
  nationality?: string;
  religion?: string;
  personal_email?: string;
  contactNumber?: string;
  permanentAddress?: string;
  permanentAddressZip?: string;
  currentAddress?: string;
  currentAddressZip?: string;
}

interface TouchedFields {
  lastName?: boolean;
  firstName?: boolean;
  middleName?: boolean;
  suffix?: boolean;
  gender?: boolean;
  civilStatus?: boolean;
  dateOfBirth?: boolean;
  age?: boolean;
  citizenship?: boolean;
  birthPlace?: boolean;
  nationality?: boolean;
  religion?: boolean;
  personal_email?: boolean;
  contactNumber?: boolean;
  permanentAddress?: boolean;
  permanentAddressZip?: boolean;
  currentAddress?: boolean;
  currentAddressZip?: boolean;
}

export const Step2PersonalInfo: React.FC<Step2PersonalInfoProps> = ({
  data: initialData,
  onUpdate,
  onValidationChange,
}) => {
  const getInitialFormData = (): PersonalInfo => {
    const savedData = sessionStorage.getItem("personalInformation");
    return savedData ? JSON.parse(savedData) : initialData;
  };

  const [formData, setFormData] = useState<PersonalInfo>(getInitialFormData());
  const [errors, setErrors] = useState<ValidationErrors>({});
  const [touched, setTouched] = useState<TouchedFields>({});
  const [sameAsPermanent, setSameAsPermanent] = useState(
    formData.currentAddress === formData.permanentAddress &&
      formData.currentAddressZip === formData.permanentAddressZip
  );

  useEffect(() => {
    validateForm(formData, false);
  }, []);

  useEffect(() => {
    if (formData.dateOfBirth) {
      const age = calculateAge(formData.dateOfBirth);
      if (age !== parseInt(formData.age || "0")) {
        handleInputChange("age", age.toString(), false);
      }
    }
  }, [formData.dateOfBirth]);

  const calculateAge = (birthDate: string): number => {
    const today = new Date();
    const birthDateObj = new Date(birthDate);
    let age = today.getFullYear() - birthDateObj.getFullYear();
    const monthDiff = today.getMonth() - birthDateObj.getMonth();

    if (
      monthDiff < 0 ||
      (monthDiff === 0 && today.getDate() < birthDateObj.getDate())
    ) {
      age--;
    }

    return age;
  };

  const validateName = (value: string): string | undefined => {
    if (!value.trim()) return "This field is required";
    if (!/^[A-Za-z\s'-]+$/.test(value)) return "Contains invalid characters";
    if (value.length < 2) return "Must be at least 2 characters";
    return undefined;
  };

  const validateDateOfBirth = (value: string): string | undefined => {
    if (!value) return "Date of birth is required";
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    const selectedDate = new Date(value);
    if (selectedDate > today) return "Date cannot be in the future";
    return undefined;
  };

  const validateAge = (value: string): string | undefined => {
    if (!value) return "Age is required";
    const ageNum = parseInt(value);
    if (isNaN(ageNum)) return "Must be a number";
    if (ageNum < 18) return "Must be 18 years or older";
    if (ageNum > 100) return "Age seems unrealistic";
    return undefined;
  };

  const validateEmail = (value: string): string | undefined => {
    if (!value.trim()) return "Email is required";
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value))
      return "Invalid email format";
    return undefined;
  };

  const validateContactNumber = (value: string): string | undefined => {
    if (!value) return "Contact number is required";
    if (!/^[0-9]{10}$/.test(value)) return "Must be 10 digits";
    return undefined;
  };

  const validateAddress = (value: string): string | undefined => {
    if (!value.trim()) return "Address is required";
    if (value.length < 5) return "Address is too short";
    return undefined;
  };

  const validateZipCode = (value: string): string | undefined => {
    if (!value) return "Zip code is required";
    if (!/^[0-9]{4}$/.test(value)) return "Must be 4 digits";
    return undefined;
  };

  const validateRequiredField = (value: string): string | undefined => {
    if (!value) return "This field is required";
    return undefined;
  };

  const validateForm = (data: PersonalInfo, showErrors = true): boolean => {
    const newErrors: ValidationErrors = {
      lastName: validateName(data.lastName || ""),
      firstName: validateName(data.firstName || ""),
      middleName: undefined,
      suffix: undefined,
      gender: validateRequiredField(data.gender || ""),
      civilStatus: validateRequiredField(data.civilStatus || ""),
      dateOfBirth: validateDateOfBirth(data.dateOfBirth || ""),
      age: validateAge(data.age || ""),
      citizenship: validateRequiredField(data.citizenship || ""),
      birthPlace: validateRequiredField(data.birthPlace || ""),
      nationality: validateRequiredField(data.nationality || ""),
      religion: validateRequiredField(data.religion || ""),
      personal_email: validateEmail(data.personal_email || ""),
      contactNumber: validateContactNumber(data.contactNumber || ""),
      permanentAddress: validateAddress(data.permanentAddress || ""),
      permanentAddressZip: validateZipCode(data.permanentAddressZip || ""),
      currentAddress: sameAsPermanent
        ? undefined
        : validateAddress(data.currentAddress || ""),
      currentAddressZip: sameAsPermanent
        ? undefined
        : validateZipCode(data.currentAddressZip || ""),
    };

    if (showErrors) {
      setErrors(newErrors);
    }

    const isValid = !Object.values(newErrors).some((error) => error);
    onValidationChange(isValid);
    return isValid;
  };
  function get18YearsAgoDate(): string {
    const today: Date = new Date();
    today.setFullYear(today.getFullYear() - 18);
    return today.toISOString().split("T")[0];
  }

  const handleInputChange = (
    field: keyof PersonalInfo,
    value: string,
    validateField = true
  ) => {
    const newData = { ...formData, [field]: value };
    setFormData(newData);
    onUpdate(newData);
    sessionStorage.setItem("personalInformation", JSON.stringify(newData));

    if (validateField && touched[field]) {
      const newErrors = { ...errors };
      switch (field) {
        case "lastName":
        case "firstName":
          newErrors[field] = validateName(value);
          break;
        case "dateOfBirth":
          newErrors.dateOfBirth = validateDateOfBirth(value);
          if (!newErrors.dateOfBirth) {
            const age = calculateAge(value);
            newErrors.age = validateAge(age.toString());
            newData.age = age.toString();
            setFormData(newData);
            onUpdate(newData);
            sessionStorage.setItem(
              "personalInformation",
              JSON.stringify(newData)
            );
          }
          break;
        case "age":
          newErrors.age = validateAge(value);
          break;
        case "personal_email":
          newErrors.personal_email = validateEmail(value);
          break;
        case "contactNumber":
          newErrors.contactNumber = validateContactNumber(value);
          break;
        case "permanentAddress":
          newErrors.permanentAddress = validateAddress(value);
          break;
        case "permanentAddressZip":
          newErrors.permanentAddressZip = validateZipCode(value);
          break;
        case "currentAddress":
          newErrors.currentAddress = sameAsPermanent
            ? undefined
            : validateAddress(value);
          break;
        case "currentAddressZip":
          newErrors.currentAddressZip = sameAsPermanent
            ? undefined
            : validateZipCode(value);
          break;
        default:
          newErrors[field] = validateRequiredField(value);
      }
      setErrors(newErrors);
    }

    validateForm(newData, false);
  };

  const handleBlur = (field: keyof PersonalInfo) => {
    setTouched((prev) => ({ ...prev, [field]: true }));

    const newErrors = { ...errors };
    switch (field) {
      case "lastName":
      case "firstName":
        newErrors[field] = validateName(formData[field] || "");
        break;
      case "dateOfBirth":
        newErrors.dateOfBirth = validateDateOfBirth(formData.dateOfBirth || "");
        if (!newErrors.dateOfBirth) {
          const age = calculateAge(formData.dateOfBirth || "");
          newErrors.age = validateAge(age.toString());
          const newData = { ...formData, age: age.toString() };
          setFormData(newData);
          onUpdate(newData);
          sessionStorage.setItem(
            "personalInformation",
            JSON.stringify(newData)
          );
        }
        break;
      case "age":
        newErrors.age = validateAge(formData.age || "");
        break;
      case "personal_email":
        newErrors.personal_email = validateEmail(formData.personal_email || "");
        break;
      case "contactNumber":
        newErrors.contactNumber = validateContactNumber(
          formData.contactNumber || ""
        );
        break;
      case "permanentAddress":
        newErrors.permanentAddress = validateAddress(
          formData.permanentAddress || ""
        );
        break;
      case "permanentAddressZip":
        newErrors.permanentAddressZip = validateZipCode(
          formData.permanentAddressZip || ""
        );
        break;
      case "currentAddress":
        newErrors.currentAddress = sameAsPermanent
          ? undefined
          : validateAddress(formData.currentAddress || "");
        break;
      case "currentAddressZip":
        newErrors.currentAddressZip = sameAsPermanent
          ? undefined
          : validateZipCode(formData.currentAddressZip || "");
        break;
      default:
        newErrors[field] = validateRequiredField(formData[field] || "");
    }
    setErrors(newErrors);
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
      sessionStorage.setItem("personalInformation", JSON.stringify(newData));

      const newErrors = { ...errors };
      newErrors.currentAddress = undefined;
      newErrors.currentAddressZip = undefined;
      setErrors(newErrors);

      validateForm(newData, false);
    }
  };

  const shouldShowError = (field: keyof TouchedFields): boolean => {
    return !!touched[field] && !!errors[field];
  };

  const inputClasses = (field: keyof PersonalInfo) =>
    `w-full px-3 py-2 text-sm border ${
      shouldShowError(field) ? "border-red-500" : "border-gray-300"
    } rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 
     focus:ring-blue-500 focus:border-blue-500`;

  return (
    <div className="p-4">
      {/* Name Section */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
        {/* Last Name */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Last name<span className="text-red-400">*</span>
          </label>
          <input
            type="text"
            value={formData.lastName || ""}
            onChange={(e) => handleInputChange("lastName", e.target.value)}
            onBlur={() => handleBlur("lastName")}
            className={inputClasses("lastName")}
            placeholder="Enter last name"
          />
          {shouldShowError("lastName") && (
            <p className="mt-1 text-xs text-red-600">{errors.lastName}</p>
          )}
        </div>

        {/* First Name */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            First name <span className="text-red-400">*</span>
          </label>
          <input
            type="text"
            value={formData.firstName || ""}
            onChange={(e) => handleInputChange("firstName", e.target.value)}
            onBlur={() => handleBlur("firstName")}
            className={inputClasses("firstName")}
            placeholder="Enter first name"
          />
          {shouldShowError("firstName") && (
            <p className="mt-1 text-xs text-red-600">{errors.firstName}</p>
          )}
        </div>

        {/* Middle Name */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Middle name
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
            placeholder="Enter suffix (optional)"
          />
        </div>
      </div>

      {/* Personal Details Section */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
        {/* Gender */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Gender <span className="text-red-400">*</span>
          </label>
          <select
            value={formData.gender || ""}
            onChange={(e) => handleInputChange("gender", e.target.value)}
            onBlur={() => handleBlur("gender")}
            className={inputClasses("gender")}
          >
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          {shouldShowError("gender") && (
            <p className="mt-1 text-xs text-red-600">{errors.gender}</p>
          )}
        </div>

        {/* Civil Status */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Civil status <span className="text-red-400">*</span>
          </label>
          <select
            value={formData.civilStatus || ""}
            onChange={(e) => handleInputChange("civilStatus", e.target.value)}
            onBlur={() => handleBlur("civilStatus")}
            className={inputClasses("civilStatus")}
          >
            <option value="">Select</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
          </select>
          {shouldShowError("civilStatus") && (
            <p className="mt-1 text-xs text-red-600">{errors.civilStatus}</p>
          )}
        </div>

        {/* Date of Birth */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Date of birth <span className="text-red-400">*</span>
          </label>
          <input
            type="date"
            value={formData.dateOfBirth || ""}
            onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
              handleInputChange("dateOfBirth", e.target.value)
            }
            onBlur={() => handleBlur("dateOfBirth")}
            className={inputClasses("dateOfBirth")}
            max={get18YearsAgoDate()}
          />
          {shouldShowError("dateOfBirth") && (
            <p className="mt-1 text-xs text-red-600">{errors.dateOfBirth}</p>
          )}
        </div>

        {/* Age */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Age <span className="text-red-400">*</span>
          </label>
          <input
            type="number"
            value={formData.age || ""}
            onChange={(e) => handleInputChange("age", e.target.value)}
            onBlur={() => handleBlur("age")}
            className={inputClasses("age")}
            placeholder="Auto-calculated"
            min="18"
            max="100"
            readOnly
          />
          {shouldShowError("age") && (
            <p className="mt-1 text-xs text-red-600">{errors.age}</p>
          )}
        </div>

        {/* Citizenship */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Citizenship <span className="text-red-400">*</span>
          </label>
          <input
            type="text"
            value={formData.citizenship || ""}
            onChange={(e) => handleInputChange("citizenship", e.target.value)}
            onBlur={() => handleBlur("citizenship")}
            className={inputClasses("citizenship")}
            placeholder="Enter citizenship"
          />
          {shouldShowError("citizenship") && (
            <p className="mt-1 text-xs text-red-600">{errors.citizenship}</p>
          )}
        </div>

        {/* Birth Place */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Birth place <span className="text-red-400">*</span>
          </label>
          <input
            type="text"
            value={formData.birthPlace || ""}
            onChange={(e) => handleInputChange("birthPlace", e.target.value)}
            onBlur={() => handleBlur("birthPlace")}
            className={inputClasses("birthPlace")}
            placeholder="Enter birth place"
          />
          {shouldShowError("birthPlace") && (
            <p className="mt-1 text-xs text-red-600">{errors.birthPlace}</p>
          )}
        </div>

        {/* Nationality */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Nationality <span className="text-red-400">*</span>
          </label>
          <input
            type="text"
            value={formData.nationality || ""}
            onChange={(e) => handleInputChange("nationality", e.target.value)}
            onBlur={() => handleBlur("nationality")}
            className={inputClasses("nationality")}
            placeholder="Enter nationality"
          />
          {shouldShowError("nationality") && (
            <p className="mt-1 text-xs text-red-600">{errors.nationality}</p>
          )}
        </div>

        {/* Religion */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Religion <span className="text-red-400">*</span>
          </label>
          <input
            type="text"
            value={formData.religion || ""}
            onChange={(e) => handleInputChange("religion", e.target.value)}
            onBlur={() => handleBlur("religion")}
            className={inputClasses("religion")}
            placeholder="Enter religion"
          />
          {shouldShowError("religion") && (
            <p className="mt-1 text-xs text-red-600">{errors.religion}</p>
          )}
        </div>
      </div>

      {/* Contact Section */}
      <div className="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
        {/* Email */}
        <div className="sm:col-span-2">
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Email address <span className="text-red-400">*</span>
          </label>
          <input
            type="personal_email"
            value={formData.personal_email || ""}
            onChange={(e) =>
              handleInputChange("personal_email", e.target.value)
            }
            onBlur={() => handleBlur("personal_email")}
            className={inputClasses("personal_email")}
            placeholder="Enter email"
          />
          {shouldShowError("personal_email") && (
            <p className="mt-1 text-xs text-red-600">{errors.personal_email}</p>
          )}
        </div>

        {/* Contact Number */}
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">
            Contact number <span className="text-red-400">*</span>
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
                onBlur={() => handleBlur("contactNumber")}
                className={inputClasses("contactNumber")}
                placeholder="9123456789"
                maxLength={10}
              />
            </div>
          </div>
          {shouldShowError("contactNumber") && (
            <p className="mt-1 text-xs text-red-600">{errors.contactNumber}</p>
          )}
        </div>
      </div>

      {/* Address Section */}
      <div className="mb-4">
        {/* Permanent Address */}
        <h3 className="text-sm font-medium text-gray-700 mb-2">
          Permanent address
        </h3>
        <div className="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Address <span className="text-red-400">*</span>
            </label>
            <input
              type="text"
              value={formData.permanentAddress || ""}
              onChange={(e) =>
                handleInputChange("permanentAddress", e.target.value)
              }
              onBlur={() => handleBlur("permanentAddress")}
              className={inputClasses("permanentAddress")}
              placeholder="House #, Street, Barangay"
            />
            {shouldShowError("permanentAddress") && (
              <p className="mt-1 text-xs text-red-600">
                {errors.permanentAddress}
              </p>
            )}
          </div>

          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Zip code <span className="text-red-400">*</span>
            </label>
            <input
              type="text"
              value={formData.permanentAddressZip || ""}
              onChange={(e) =>
                handleInputChange("permanentAddressZip", e.target.value)
              }
              onBlur={() => handleBlur("permanentAddressZip")}
              className={inputClasses("permanentAddressZip")}
              placeholder="Enter zip code"
              maxLength={4}
            />
            {shouldShowError("permanentAddressZip") && (
              <p className="mt-1 text-xs text-red-600">
                {errors.permanentAddressZip}
              </p>
            )}
          </div>
        </div>

        {/* Current Address */}
        <div className="flex items-center justify-between mb-2">
          <h3 className="text-sm font-medium text-gray-700">Current address</h3>
          <label className="flex items-center space-x-2 cursor-pointer">
            <input
              type="checkbox"
              checked={sameAsPermanent}
              onChange={(e) => handleSameAsPermanentChange(e.target.checked)}
              className="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
            />
            <span className="text-xs text-gray-700">Same as permanent</span>
          </label>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Address <span className="text-red-400">*</span>
            </label>
            <input
              type="text"
              value={formData.currentAddress || ""}
              onChange={(e) =>
                handleInputChange("currentAddress", e.target.value)
              }
              onBlur={() => handleBlur("currentAddress")}
              className={inputClasses("currentAddress")}
              placeholder="House #, Street, Barangay"
              disabled={sameAsPermanent}
            />
            {shouldShowError("currentAddress") && (
              <p className="mt-1 text-xs text-red-600">
                {errors.currentAddress}
              </p>
            )}
          </div>

          <div>
            <label className="block text-xs font-medium text-gray-700 mb-1">
              Zip code <span className="text-red-400">*</span>
            </label>
            <input
              type="text"
              value={formData.currentAddressZip || ""}
              onChange={(e) =>
                handleInputChange("currentAddressZip", e.target.value)
              }
              onBlur={() => handleBlur("currentAddressZip")}
              className={inputClasses("currentAddressZip")}
              placeholder="Enter zip code"
              maxLength={4}
              disabled={sameAsPermanent}
            />
            {shouldShowError("currentAddressZip") && (
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
