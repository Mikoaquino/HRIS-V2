import { useState } from "react";
import { EmployeeInfo, PersonalInfo, GovernmentID } from "../types/onboarding";

export const useOnboardingForm = () => {
  const [step, setStep] = useState(1);

  const [employeeInfo, setEmployeeInfo] = useState<EmployeeInfo>({
    employeeNumber: "",
    employmentType: "",
    department: "",
    employeeStatus: "",
    dateHired: "",
    jobPosition: "",
    immediateSupervisor: "",
    email: "",
  });

  const [personalInfo, setPersonalInfo] = useState<PersonalInfo>({
    lastName: "",
  firstName: "",
  middleName: "",
  suffix: "",
  gender: "",
  civilStatus: "",
  dateOfBirth: "",
  age: "",
  citizenship: "",
  birthPlace: "",
  nationality: "",
  religion: "",
  email: "",
  contactNumber: "",
  presentAddress: "",
  zipCode: "",
  isSamePresentAddress: false,
  });

  const [governmentID, setGovernmentID] = useState<GovernmentID>({
    sssNumber: "",
    tinNumber: "",
    pagibigNumber: "",
    philhealthNumber: "",
  });

  const steps = [
    { 
      id: 1, 
      title: 'Employee Information', 
      subtitle: 'Personal Data',
      completed: step > 1,
      active: step === 1,
      optional: false
    },
    { 
      id: 2, 
      title: 'Personal Information', 
      subtitle: 'Personal Data',
      completed: step > 2,
      active: step === 2,
      optional: false
    },
    { 
      id: 3, 
      title: 'Government Identification', 
      subtitle: 'Verification cards',
      completed: step > 3,
      active: step === 3,
      optional: false
    },
    { 
      id: 4, 
      title: 'Insurance Background', 
      subtitle: 'Personal Data',
      completed: step > 4,
      active: step === 4,
      optional: false
    },
    { 
      id: 5, 
      title: 'Work Experience', 
      subtitle: 'Historical data',
      completed: step > 5,
      active: step === 5,
      optional: false
    },
    { 
      id: 6, 
      title: 'Document Attachment', 
      subtitle: 'Supporting docs',
      completed: step > 6,
      active: step === 6,
      optional: false
    }
  ];

  const nextStep = () => setStep((prev) => Math.min(prev + 1, 6));
  const prevStep = () => setStep((prev) => Math.max(prev - 1, 1));
  const goToStep = (stepId: number) => {
    if (stepId >= 1 && stepId <= 6) {
      setStep(stepId);
    }
  };

  return {
    step,
    steps,
    employeeInfo,
    setEmployeeInfo,
    personalInfo,
    setPersonalInfo,
    governmentID,
    setGovernmentID,
    nextStep,
    prevStep,
    goToStep,
  };
};