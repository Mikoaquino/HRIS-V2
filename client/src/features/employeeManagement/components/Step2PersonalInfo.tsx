import React from 'react';
import { PersonalInfo } from '../types/Onboarding';

interface Step2PersonalInfoProps {
  data: PersonalInfo;
  onUpdate: (data: PersonalInfo) => void;
  errors?: Partial<Record<keyof PersonalInfo, string>>;
  validateField?: (field: keyof PersonalInfo, value: string) => void;
}

export const Step2PersonalInfo: React.FC<Step2PersonalInfoProps> = ({ 
  data, 
  onUpdate,
  errors = {},
  validateField = () => {}
}) => {
  const handleInputChange = (field: keyof PersonalInfo, value: string) => {
    onUpdate({ ...data, [field]: value });
    validateField(field, value);
  };

  const handleBlur = (field: keyof PersonalInfo, value: string) => {
    validateField(field, value);
  };

  // Common input classes to maintain consistency
  const inputClasses = (field: keyof PersonalInfo) => 
    `w-full px-3 py-2 text-sm border ${errors[field] ? 'border-red-500' : 'border-gray-300'} 
     rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 
     focus:ring-blue-500 focus:border-blue-500`;

  return (
    <div className="bg-white p-4">
      <div className="mb-6">
      </div>

      {/* Name Section - Compact 4-column layout */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Last Name *</label>
          <input
            type="text"
            value={data.lastName}
            onChange={(e) => handleInputChange('lastName', e.target.value)}
            onBlur={(e) => handleBlur('lastName', e.target.value)}
            className={inputClasses('lastName')}
            placeholder="Enter last name"
          />
          {errors.lastName && <p className="mt-1 text-xs text-red-600">{errors.lastName}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">First Name *</label>
          <input
            type="text"
            value={data.firstName}
            onChange={(e) => handleInputChange('firstName', e.target.value)}
            onBlur={(e) => handleBlur('firstName', e.target.value)}
            className={inputClasses('firstName')}
            placeholder="Enter first name"
          />
          {errors.firstName && <p className="mt-1 text-xs text-red-600">{errors.firstName}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Middle Name *</label>
          <input
            type="text"
            value={data.middleName}
            onChange={(e) => handleInputChange('middleName', e.target.value)}
            onBlur={(e) => handleBlur('middleName', e.target.value)}
            className={inputClasses('middleName')}
            placeholder="Enter middle name"
          />
          {errors.middleName && <p className="mt-1 text-xs text-red-600">{errors.middleName}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Suffix *</label>
          <input
            type="text"
            value={data.suffix}
            onChange={(e) => handleInputChange('suffix', e.target.value)}
            onBlur={(e) => handleBlur('suffix', e.target.value)}
            className={inputClasses('suffix')}
            placeholder="Enter suffix"
          />
          {errors.suffix && <p className="mt-1 text-xs text-red-600">{errors.suffix}</p>}
        </div>
      </div>

      {/* Personal Details Section - Compact 4-column layout */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Gender *</label>
          <select
            value={data.gender}
            onChange={(e) => handleInputChange('gender', e.target.value)}
            onBlur={(e) => handleBlur('gender', e.target.value)}
            className={inputClasses('gender')}
          >
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
          {errors.gender && <p className="mt-1 text-xs text-red-600">{errors.gender}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Civil Status *</label>
          <select
            value={data.civilStatus}
            onChange={(e) => handleInputChange('civilStatus', e.target.value)}
            onBlur={(e) => handleBlur('civilStatus', e.target.value)}
            className={inputClasses('civilStatus')}
          >
            <option value="">Select</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
          </select>
          {errors.civilStatus && <p className="mt-1 text-xs text-red-600">{errors.civilStatus}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Date of Birth *</label>
          <input
            type="date"
            value={data.dateOfBirth}
            onChange={(e) => handleInputChange('dateOfBirth', e.target.value)}
            onBlur={(e) => handleBlur('dateOfBirth', e.target.value)}
            className={inputClasses('dateOfBirth')}
          />
          {errors.dateOfBirth && <p className="mt-1 text-xs text-red-600">{errors.dateOfBirth}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Age *</label>
          <input
            type="number"
            value={data.age}
            onChange={(e) => handleInputChange('age', e.target.value)}
            onBlur={(e) => handleBlur('age', e.target.value)}
            className={inputClasses('age')}
            placeholder="Enter age"
          />
          {errors.age && <p className="mt-1 text-xs text-red-600">{errors.age}</p>}
        </div>
      </div>

      {/* Citizenship Section - Compact 4-column layout */}
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Citizenship *</label>
          <select
            value={data.citizenship}
            onChange={(e) => handleInputChange('citizenship', e.target.value)}
            onBlur={(e) => handleBlur('citizenship', e.target.value)}
            className={inputClasses('citizenship')}
          >
            <option value="">Select</option>
            <option value="Filipino">Filipino</option>
            <option value="Dual Citizen">Dual Citizen</option>
            <option value="Foreigner">Foreigner</option>
          </select>
          {errors.citizenship && <p className="mt-1 text-xs text-red-600">{errors.citizenship}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Birth Place *</label>
          <input
            type="text"
            value={data.birthPlace}
            onChange={(e) => handleInputChange('birthPlace', e.target.value)}
            onBlur={(e) => handleBlur('birthPlace', e.target.value)}
            className={inputClasses('birthPlace')}
            placeholder="Enter birth place"
          />
          {errors.birthPlace && <p className="mt-1 text-xs text-red-600">{errors.birthPlace}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Nationality *</label>
          <input
            type="text"
            value={data.nationality}
            onChange={(e) => handleInputChange('nationality', e.target.value)}
            onBlur={(e) => handleBlur('nationality', e.target.value)}
            className={inputClasses('nationality')}
            placeholder="Enter nationality"
          />
          {errors.nationality && <p className="mt-1 text-xs text-red-600">{errors.nationality}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Religion *</label>
          <input
            type="text"
            value={data.religion}
            onChange={(e) => handleInputChange('religion', e.target.value)}
            onBlur={(e) => handleBlur('religion', e.target.value)}
            className={inputClasses('religion')}
            placeholder="Enter religion"
          />
          {errors.religion && <p className="mt-1 text-xs text-red-600">{errors.religion}</p>}
        </div>
      </div>

      {/* Contact Section - Compact 3-column layout */}
      <div className="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
        <div className="sm:col-span-2">
          <label className="block text-xs font-medium text-gray-700 mb-1">Email Address *</label>
          <input
            type="email"
            value={data.email}
            onChange={(e) => handleInputChange('email', e.target.value)}
            onBlur={(e) => handleBlur('email', e.target.value)}
            className={inputClasses('email')}
            placeholder="Enter email"
          />
          {errors.email && <p className="mt-1 text-xs text-red-600">{errors.email}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Contact Number *</label>
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
                value={data.contactNumber}
                onChange={(e) => handleInputChange('contactNumber', e.target.value)}
                onBlur={(e) => handleBlur('contactNumber', e.target.value)}
                className={inputClasses('contactNumber')}
                placeholder="Enter phone number"
              />
            </div>
          </div>
          {errors.contactNumber && <p className="mt-1 text-xs text-red-600">{errors.contactNumber}</p>}
        </div>
      </div>

      {/* Address Section - Compact 2-column layout */}
      <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Present Address *</label>
          <input
            type="text"
            value={data.presentAddress}
            onChange={(e) => handleInputChange('presentAddress', e.target.value)}
            onBlur={(e) => handleBlur('presentAddress', e.target.value)}
            className={inputClasses('presentAddress')}
            placeholder="Enter address"
          />
          {errors.presentAddress && <p className="mt-1 text-xs text-red-600">{errors.presentAddress}</p>}
        </div>

        <div>
          <label className="block text-xs font-medium text-gray-700 mb-1">Zip Code *</label>
          <input
            type="text"
            value={data.zipCode}
            onChange={(e) => handleInputChange('zipCode', e.target.value)}
            onBlur={(e) => handleBlur('zipCode', e.target.value)}
            className={inputClasses('zipCode')}
            placeholder="Enter zip code"
          />
          {errors.zipCode && <p className="mt-1 text-xs text-red-600">{errors.zipCode}</p>}
        </div>
      </div>
    </div>
  );
};