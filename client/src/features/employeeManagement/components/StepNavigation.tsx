
import { StepNavigationProps } from "../types/onboarding";

const StepNavigation: React.FC<StepNavigationProps> = ({
  onNext,
  onBack,
  isFirstStep = false,
  isLastStep = false,
  nextLabel = "Next",
  backLabel = "Back",
  disabled = false,
}) => {
  return (
    <div className="flex justify-between mt-8">
      <button
        onClick={onBack}
        disabled={isFirstStep || disabled}
        className={`px-4 py-2 border border-gray-300 rounded ${
          isFirstStep || disabled
            ? "opacity-50 cursor-not-allowed"
            : "hover:bg-gray-50"
        }`}
      >
        {backLabel}
      </button>

      <button
        onClick={onNext}
        disabled={disabled}
        className={`px-4 py-2 bg-teal-500 text-white rounded ${
          disabled ? "opacity-50 cursor-not-allowed" : "hover:bg-teal-600"
        }`}
      >
        {isLastStep ? "Submit" : nextLabel}
      </button>
    </div>
  );
};


export default StepNavigation;

