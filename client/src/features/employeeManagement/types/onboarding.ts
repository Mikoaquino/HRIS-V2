
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
  
  export interface Document {
  id: number;
  name: string;
  status: "uploaded" | "pending";
  required?: boolean;
  attachmentCount?: number;
  
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
  
  export interface OnboardingData {
    // employeeInformation: EmployeeInformation;
    // personalInformation: PersonalInformation;
    // governmentIDs: GovernmentID[];
    // educationalBackground: Education[];
    // workExperience: WorkExperience[];
    documents: Document[];
    currentStep: number;
    steps: Step[];
  }