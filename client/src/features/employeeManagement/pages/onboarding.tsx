import React from 'react';
import { useOnboardingForm } from '../hooks/useOnboardingForm';
import { Step1EmployeeInfo } from '../components/Step1EmployeeInfo';
import { Step2PersonalInfo } from '../components/Step2PersonalInfo';
import { Step3GovernmentID } from '../components/Step3GovernmentID';
import StepHeader from '../components/StepHeader';
import StepNavigation from '../components/StepNavigation';

const OnboardingPage: React.FC = () => {
  const {
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
    goToStep
  } = useOnboardingForm();

  const activeStepIndex = steps.findIndex((s) => s.active);
  const isFirstStep = activeStepIndex === 0;
  const isLastStep = activeStepIndex === steps.length - 1;

  const handleStepClick = (stepId: number) => {
    goToStep(stepId);
  };

  const renderStepContent = () => {
    switch (step) {
      case 1:
        return (
          <Step1EmployeeInfo
            data={employeeInfo}
            onUpdate={setEmployeeInfo}
          />
        );
      case 2:
        return (
          <Step2PersonalInfo
            data={personalInfo}
            onUpdate={setPersonalInfo}
          />
        );
      case 3:
        return (
          <Step3GovernmentID
            data={governmentID}
            onUpdate={setGovernmentID}
          />
        );
      default:
        return (
          <div className="bg-white p-6">
            <h2 className="text-lg font-medium text-gray-900">Step {step}</h2>
            <p className="text-gray-600 mt-2">This step is under construction.</p>
          </div>
        );
    }
  };

  return (
    <div className="min-h-screen bg-gray-50">
      <div className="w-full bg-white shadow-lg">
        <StepHeader
          steps={steps}
          currentStep={activeStepIndex}
          onStepClick={handleStepClick}
        />
        
        <div className="px-4 sm:px-6 lg:px-8 xl:px-12 max-w-7xl mx-auto">
          {renderStepContent()}
        </div>
        
        <div className="px-4 sm:px-6 lg:px-8 xl:px-12 max-w-7xl mx-auto pb-6">
          <StepNavigation
            onNext={nextStep}
            onBack={prevStep}
            isFirstStep={isFirstStep}
            isLastStep={isLastStep}
          />
        </div>
      </div>
    </div>
  );
};

export default OnboardingPage;