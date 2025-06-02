import { StepHeaderProps } from "../types/onboarding";
import { useNavigate } from "react-router-dom";
import { ArrowLeft } from "lucide-react";

const StepHeader: React.FC<StepHeaderProps> = ({
  steps,
  currentStep,
  onStepClick,
}) => {
  const navigate = useNavigate();

  return (
    <div className="mb-8">
      <div className="flex items-center justify-between"> 
        <h1 className="text-xl font-bold mb-2 p-4">Onboarding Details</h1>
        <button
          type="button"
          onClick={() => navigate("/employee-management")}
          className="bg-teal-500 hover:bg-teal-600 text-white px-4 py-1.5 rounded-md text-sm flex items-center gap-2 cursor-pointer"
        >
          <ArrowLeft className="w-4 h-4" />
          Go Back
        </button>
      </div>
      <p className="text-gray-600 mb-6 px-4">
        Please fill out all required fields.
      </p>

      <div className="flex w-full">
        {steps.map((step) => {
          const isStepClickable = step.completed || step.id === currentStep + 1;

          return (
            <div key={step.id} className="flex-1">
              <div
                className={`px-4 py-3 flex items-center ${
                  step.completed
                    ? "bg-teal-500 text-white"
                    : step.active
                    ? "bg-teal-500 text-white"
                    : "bg-gray-100 text-gray-700"
                } ${isStepClickable ? "cursor-pointer" : "cursor-not-allowed"}`}
                onClick={() => isStepClickable && onStepClick(step.id)}
              >
                {step.completed ? (
                  <svg
                    className="w-6 h-6 mr-2"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M5 13l4 4L19 7"
                    ></path>
                  </svg>
                ) : (
                  <span
                    className={`w-6 h-6 flex items-center justify-center rounded-full ${
                      step.active
                        ? "bg-white text-teal-500"
                        : "bg-gray-300 text-gray-600"
                    } mr-2`}
                  >
                    {step.id}
                  </span>
                )}
                <div className="flex flex-col">
                  <span className="text-sm font-medium">{step.title}</span>
                  {step.optional && (
                    <span className="text-xs opacity-80">
                      {step.optional ? "Optional" : "Required"}
                    </span>
                  )}
                </div>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};


export default StepHeader;

