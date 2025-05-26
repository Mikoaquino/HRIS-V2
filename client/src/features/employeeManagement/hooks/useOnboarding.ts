import { useState, useCallback } from 'react';
import { 
  OnboardingData, 
  Document, 
 
} from '../types/onboarding';
const initialOnboardingData: OnboardingData = {
  employeeInformation: {
    employeeNumber: '',
    employmentType: '',
    department: '',
    employeeStatus: '',
    dateHired: '',
    jobPosition: '',
    immediateSupervisor: '',
    email: ''
  },
  personalInformation: {
    firstName: '',
    lastName: '',
    middleName:'',
    suffix:'',
    dateOfBirth: '',
    gender: '',
    contactNumber: '',
    permanentAddress: '',
    permanentAddressZip: '',
    currentAddress:'',
    currentAddressZip:'',
    email:'',
    civilStatus:'',
    citizenship:'',
    birthPlace:'',
    nationality:'',
    religion: '',

  },
  governmentIDs: [{
    sssNumber: '',
    tinNumber: '',
    pagibigNumber: '',
    philhealthNumber: ''
  }],
  educationalBackground: [],
  workExperience: [],
documents: [
  { 
    id: 1, 
    name: 'Resume', 
    required: true, 
    status: 'pending', 
    attachmentCount: 0,
    attachments: [],
  },
  { 
    id: 2, 
    name: 'Employment Contract', 
    required: true, 
    status: 'pending', 
    attachmentCount: 0,
    attachments: [],
  },
  { 
    id: 3, 
    name: 'Government ID Copies', 
    required: true, 
    status: 'pending', 
    attachmentCount: 0,
    attachments: [],
  },
  { 
    id: 4, 
    name: 'Diploma / Transcript of Records', 
    required: true, 
    status: 'pending', 
    attachmentCount: 0,
    attachments: [],
  },
  { 
    id: 5, 
    name: 'Medical Examination Results', 
    required: true, 
    status: 'pending', 
    attachmentCount: 0,
    attachments: [],
  },
  { 
    id: 6, 
    name: 'NBI / Police Clearance', 
    required: true, 
    status: 'pending', 
    attachmentCount: 0,
    attachments: [],
  },
],
  currentStep: 1,
  steps: [
    { id: 1, title: 'Employee Information', optional: true, completed: false, active: true, component: 'Step1EmployeeInfo' },
    { id: 2, title: 'Personal Information', optional: true, completed: false, active: false, component: 'Step2PersonalInfo' },
    { id: 3, title: 'Government Identification', optional: true, completed: false, active: false, component: 'Step3GovernmentID' },
    { id: 4, title: 'Educational Background', optional: true, completed: false, active: false, component: 'EducationalBackground' },
    { id: 5, title: 'Work Experience', optional: true, completed: false, active: false, component: 'WorkExperience' },
    { id: 6, title: 'Document Attachment', optional: true, completed: false, active: false, component: 'DocumentAttachment' },
  ],
};

const useOnboarding = (initialData?: Partial<OnboardingData>) => {
  const [onboardingData, setOnboardingData] = useState<OnboardingData>({
    ...initialOnboardingData,
    ...initialData,
  });

  const currentStep = onboardingData.steps.find(step => step.active);

  const goToNextStep = useCallback(() => {
    const currentStepIndex = onboardingData.steps.findIndex(step => step.active);
    
    if (currentStepIndex < onboardingData.steps.length - 1) {
      const updatedSteps = onboardingData.steps.map((step, idx) => {
        if (idx === currentStepIndex) {
          return { ...step, active: false, completed: true };
        }
        if (idx === currentStepIndex + 1) {
          return { ...step, active: true };
        }
        return step;
      });
      
      setOnboardingData(prev => ({
        ...prev,
        steps: updatedSteps,
        currentStep: currentStepIndex + 2,
      }));
    }
  }, [onboardingData.steps]);

  const goToPreviousStep = useCallback(() => {
    const currentStepIndex = onboardingData.steps.findIndex(step => step.active);
    
    if (currentStepIndex > 0) {
      const updatedSteps = onboardingData.steps.map((step, idx) => {
        if (idx === currentStepIndex) {
          return { ...step, active: false };
        }
        if (idx === currentStepIndex - 1) {
          return { ...step, active: true };
        }
        return step;
      });
      
      setOnboardingData(prev => ({
        ...prev,
        steps: updatedSteps,
        currentStep: currentStepIndex, 
      }));
    }
  }, [onboardingData.steps]);

  const goToStep = useCallback((stepId: number) => {
    const lastCompletedStep = Math.max(...onboardingData.steps
      .filter(step => step.completed)
      .map(step => step.id));
    
    if (stepId > lastCompletedStep + 1) {
      return; 
    }
    
    const updatedSteps = onboardingData.steps.map(step => ({
      ...step,
      active: step.id === stepId,
    }));
    
    setOnboardingData(prev => ({
      ...prev,
      steps: updatedSteps,
      currentStep: stepId,
    }));
  }, [onboardingData.steps]);

const updateDocument = useCallback(
  (docId: number, status: Document['status'], fileUploads?: FileUpload[]) => {
    setOnboardingData(prev => {
      const updatedDocuments = prev.documents.map(doc => {
        if (doc.id === docId) {
          return {
            ...doc,
            status,
            attachmentCount: fileUploads?.length || doc.attachmentCount,
            attachments: fileUploads?.map(fu => ({
              ...fu,
              id: fu.id,
              name: fu.name,
              size: fu.size,
              type: fu.type,
              url: fu.url,
              file: fu.file, 
            })),
          };
        }
        return doc;
      });

      return {
        ...prev,
        documents: updatedDocuments,
      };
    });
  },
  []
);

  const submitOnboarding = useCallback(async () => {
    try {
      console.log('Submitting onboarding data:', onboardingData);
      return await new Promise(resolve => {
        setTimeout(() => {
          resolve({ success: true, message: 'Onboarding submitted successfully' });
        }, 1500);
      });
    } catch (error) {
      console.error('Error submitting onboarding data:', error);
      throw error;
    }
  }, [onboardingData]);

  return {
    onboardingData,
    currentStep,
    goToNextStep,
    goToPreviousStep,
    goToStep,
    updateDocument,
    submitOnboarding,
  };
};

export default useOnboarding;