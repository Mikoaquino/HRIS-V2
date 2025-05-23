
export interface FormErrors<T> {
  [key: string]: string;
}
export interface ValidationErrors {
  [key: string]: string | undefined;
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
export interface SessionStorageData {
  employeeInformation?: EmployeeInfo;
  personalInformation?: PersonalInfo;
  governmentIDs?: GovernmentID[];
  educationalBackground?: Education[];
  workExperience?: Work[];
  currentStep?: number;
}
export interface EmployeeInfoErrors extends ValidationErrors {
  employeeNumber?: string;
  employmentType?: string;
  department?: string;
  employeeStatus?: string;
  dateHired?: string;
  jobPosition?: string;
  immediateSupervisor?: string;
  email?: string;
}

export interface PersonalInfo {
  firstName: string;
  lastName: string;
  middleName: string;
  suffix: string;
  dateOfBirth: string;
  gender: string;
  civilStatus: string;
  nationality: string;
  religion: string;
  contactNumber: string;
  permanentAddress:string;
  permanentAddressZip:string;
  currentAddress:string;
  currentAddressZip:string;
  email: string;
  citizenship:string;
  birthPlace:string;
  age:string;
}

export interface GovernmentID {
  sssNumber: string;
  tinNumber: string;
  pagibigNumber: string;
  philhealthNumber: string;
}
  
export interface Document {
  id: number;
  name: string;
  status: "uploaded" | "pending" | "rejected";
  required: boolean;
  attachments?: FileUpload[];
  attachmentCount?: number;
  apiFieldName?: string; 
}

export interface FileUpload {
  id: string;
  file: File;
  name: string;
  size: number;
  type: string;
  url: string;
}
  export interface DocumentAttachmentProps {
  documents?: Document[];
  onDocumentUpdate: (document: Document) => void;
}

  
  export interface Step {
    id: number;
    title: string;
    optional: boolean;
    completed: boolean;
    active: boolean;
    component: string;
  }
 export interface StepHeaderProps {
  steps: Step[];
  currentStep: number;
  onStepClick: (stepId: number) => void;
}
export interface StepNavigationProps {
  onNext: () => void;
  onBack: () => void;
  isFirstStep?: boolean;
  isLastStep?: boolean;
  nextLabel?: string;
  backLabel?: string;
  disabled?: boolean;
}
export interface Education  {
  attainment: string;
  school: string;
  degree: string;
  from: string;
  to: string;
  isPresent: boolean;
  isEditing?: boolean;
}
export interface Work  {
  employer: string;
  position: string;
  from: string;
  to: string;
  reason: string;
  isEditing?: boolean;
}

  
  export interface OnboardingData {
     employeeInformation: EmployeeInfo;
     personalInformation: PersonalInfo;
     governmentIDs: GovernmentID[];
     educationalBackground: Education[];
     workExperience: Work[];
    documents: Document[];
    currentStep: number;
    steps: Step[];
  }