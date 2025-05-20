import { useState, useEffect } from "react";
import StepHeader from "../components/StepHeader";
import StepNavigation from "../components/StepNavigation";
import DocumentAttachment from "../components/DocumentAttachment";
import useOnboarding from "../hooks/useOnboarding";
import { Document } from "../types/onboarding";

const OnboardingDetails: React.FC = () => {
  const {
    onboardingData,
    currentStep,
    goToNextStep,
    goToPreviousStep,
    goToStep,
    updateDocument,
  } = useOnboarding();

  const { steps, documents } = onboardingData;
  const activeStepIndex = steps.findIndex((step) => step.active);
  const isFirstStep = activeStepIndex === 0;
  const isLastStep = activeStepIndex === steps.length - 1;

  const [isStepValid, setIsStepValid] = useState<boolean>(true);

  const handleDocumentUpdate = (document: Document) => {
    updateDocument(document.id, document.status);
  };

  const handleStepClick = (stepId: number) => {
    goToStep(stepId);
  };

  const renderStepComponent = () => {
    if (!currentStep) return null;

    switch (currentStep.component) {
      case "DocumentAttachment":
        return (
          <DocumentAttachment
            documents={documents}
            onDocumentUpdate={handleDocumentUpdate}
          />
        );
      default:
        return <div className="p-4">Step component not implemented yet</div>;
    }
  };

  useEffect(() => {
    if (currentStep?.component === "DocumentAttachment") {
      const requiredDocs = documents.filter((doc) => doc.required);
      const allRequiredUploaded = requiredDocs.every(
        (doc) => doc.status === "uploaded"
      );
      setIsStepValid(allRequiredUploaded);
    } else {
      setIsStepValid(true);
    }
  }, [currentStep, documents]);

  return (
    <div className="mx-auto bg-white shadow-lg rounded-lg">
      <StepHeader
        steps={steps}
        currentStep={activeStepIndex}
        onStepClick={handleStepClick}
      />

      {renderStepComponent()}

      <StepNavigation
        onNext={goToNextStep}
        onBack={goToPreviousStep}
        isFirstStep={isFirstStep}
        isLastStep={isLastStep}
        disabled={!isStepValid}
      />
    </div>
  );
};

export default OnboardingDetails;
