
// export interface EmployeeInformation {
 

//   }
  
//   export interface EmergencyContact {
 
//   }
  
//   export interface PersonalInformation {

//     emergencyContact: EmergencyContact;
//   }
  
//   export interface GovernmentID {

//   }
  
//   export interface Education {

//   }
  
//   export interface WorkExperience {

//   }
  
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