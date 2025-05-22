// types/Onboarding.ts

export interface FormErrors<T> {
  [key: string]: string;
}

export interface EmployeeInfo {
  employeeNumber: string;
  employmentType: string;
  department: string;
  employeeStatus: string;
  dateHired: string;
  jobPosition: string;
  immediateSupervisor: string;
  email: string;
}

export interface PersonalInfo {
  firstName: string;
  lastName: string;
  birthDate: string;
  gender: string;
  contactNumber: string;
  address: string;
}

export interface GovernmentID {
  sssNumber: string;
  tinNumber: string;
  pagibigNumber: string;
  philhealthNumber: string;
}