import { useState, useEffect } from "react";
import StepHeader from "../components/StepHeader";
import StepNavigation from "../components/StepNavigation";
import DocumentAttachment from "../components/DocumentAttachment";
import useOnboarding from "../hooks/useOnboarding";
import { Step1EmployeeInfo } from "../components/Step1EmployeeInfo";
import { Step2PersonalInfo } from "../components/Step2PersonalInfo";
import { Step3GovernmentID } from "../components/Step3GovernmentID";
import WorkExperience from "../components/WorkExperience";
import EducationalBackground from "../components/EducationalBackground";
import { useNavigate } from "react-router-dom";

import {
  Document,
  Work,
  Education,
  EmployeeInfo,
  PersonalInfo,
  GovernmentID,
} from "../types/onboarding";

const OnboardingDetails: React.FC = () => {
  console.log("Rendering OnboardingDetails parent component");
  const navigate = useNavigate();

  const {
    onboardingData = {
      steps: [],
      documents: [],
      employeeInformation: {} as EmployeeInfo,
      personalInformation: {} as PersonalInfo,
      governmentIDs: [] as GovernmentID[],
      educationalBackground: [] as Education[],
      workExperience: [] as Work[],
    },
    currentStep = { id: 0, component: "", active: false },
    goToNextStep = () => {},
    goToPreviousStep = () => {},
    goToStep = () => {},
    updateDocument = () => {},
    updateEmployeeInfo = () => {},
    updatePersonalInfo = () => {},
    updateGovernmentIDs = () => {},
    updateEducationalBackground = () => {},
    updateWorkExperience = () => {},
  } = useOnboarding();

  console.log("Current onboardingData:", onboardingData);
  console.log("Current step:", currentStep);

  const {
    steps,
    documents,
    employeeInformation,
    personalInformation,
    governmentIDs,
    educationalBackground,
    workExperience,
  } = onboardingData;
  const activeStepIndex = steps.findIndex((step) => step.active);
  const isFirstStep = activeStepIndex === 0;
  const isLastStep = activeStepIndex === steps.length - 1;

  const [isStepValid, setIsStepValid] = useState<boolean>(false);

  console.log("Current validation state:", isStepValid);
  const submitOnboardingData = async () => {
    const token = sessionStorage.getItem("token");
    if (!token) {
      console.error("No authentication token found");
      return;
    }

    const getSessionData = (key: string) => {
      const data = sessionStorage.getItem(key);
      return data ? JSON.parse(data) : null;
    };

    const formData = new FormData();

    const addFormField = (name: string, value: any) => {
      if (value !== undefined && value !== null) {
        formData.append(name, value.toString());
      }
    };

    const personalInfo = getSessionData("personalInformation") || {};
    addFormField("first_name", personalInfo.firstName);
    addFormField("middle_name", personalInfo.middleName);
    addFormField("last_name", personalInfo.lastName);
    addFormField("suffix", personalInfo.suffix);
    addFormField("birth_date", personalInfo.dateOfBirth);
    addFormField("gender", personalInfo.gender?.toLowerCase());
    addFormField("civil_status", personalInfo.civilStatus?.toLowerCase());
    addFormField("nationality", personalInfo.nationality);
    addFormField("religion", personalInfo.religion);
    addFormField(
      "contact_number",
      personalInfo.contactNumber ? `0${personalInfo.contactNumber}` : ""
    );
    addFormField("email", personalInfo.email);
    addFormField("birth_place", personalInfo.birthPlace);
    addFormField("citizenship", personalInfo.citizenship);

    const governmentIDs = getSessionData("governmentIDs") || {};
    addFormField("sss_id", governmentIDs.sssNumber);
    addFormField("tin_id", governmentIDs.tinNumber);
    addFormField("philhealth_id", governmentIDs.philhealthNumber);
    addFormField("pagibig_id", governmentIDs.pagibigNumber);

    const employeeInfo = getSessionData("employeeInformation") || {};
    addFormField("hired_at", employeeInfo.dateHired);
    addFormField("employment_type_id", employeeInfo.employmentType);
    addFormField("job_position_id", employeeInfo.jobPosition);
    addFormField("employee_status_id", employeeInfo.employeeStatus);
    addFormField("department_id", employeeInfo.department);
    addFormField("immediate_supervisor_id", employeeInfo.immediateSupervisor);
    addFormField("employee_number", employeeInfo.employeeNumber);

    addFormField(
      "present_address[barangay_code]",
      personalInfo.currentAddressCode || "0403428010"
    );
    addFormField(
      "present_address[additional_details]",
      personalInfo.currentAddress
    );
    addFormField("present_address[zip_code]", personalInfo.currentAddressZip);
    addFormField(
      "permanent_address[barangay_code]",
      personalInfo.permanentAddressCode || "0403428010"
    );
    addFormField(
      "permanent_address[additional_details]",
      personalInfo.permanentAddress
    );
    addFormField(
      "permanent_address[zip_code]",
      personalInfo.permanentAddressZip
    );

    const educations = getSessionData(`hris-educational-background`) || [];
    educations.forEach((edu: any, index: number) => {
      addFormField(`educations[${index}][school]`, edu.school);
      addFormField(`educations[${index}][degree]`, edu.degree);
      addFormField(
        `educations[${index}][graduated_at]`,
        edu.graduated_at ? "" : `${edu.to}-1`
      );
      addFormField(`educations[${index}][from]`, `${edu.from}-1`);
      addFormField(`educations[${index}][attainment]`, edu.attainment);
    });

    const workExperiences = getSessionData(`hris-work-experience`) || [];
    workExperiences.forEach((work: any, index: number) => {
      addFormField(
        `work_experiences[${index}][previous_employer]`,
        work.employer
      );
      addFormField(`work_experiences[${index}][job_position]`, work.position);
      addFormField(`work_experiences[${index}][from]`, `${work.from}-1`);
      addFormField(`work_experiences[${index}][to]`, `${work.to}-1`);
      addFormField(
        `work_experiences[${index}][reason_for_leaving]`,
        work.reason
      );
    });

    const savedDocuments = JSON.parse(
      sessionStorage.getItem("documents") || "[]"
    );
    const validFileTypes = ["pdf", "png", "jpeg", "jpg"];
    const invalidFiles: { name: string; error: string }[] = [];

    const allAttachments = documents.flatMap(
      (doc) =>
        doc.attachments?.map((att) => ({
          ...att,
          file: doc.attachments?.find((a) => a.id === att.id)?.file,
        })) || []
    );

    for (const attachment of allAttachments) {
      try {
        const fileExtension = attachment.name.split(".").pop()?.toLowerCase();
        if (!fileExtension || !validFileTypes.includes(fileExtension)) {
          invalidFiles.push({
            name: attachment.name,
            error: `Invalid file type (${fileExtension}). Allowed: ${validFileTypes.join(
              ", "
            )}`,
          });
          continue;
        }

        let fileToUpload: File;

        if (attachment.file instanceof File) {
          fileToUpload = attachment.file;
        } else if (attachment.url) {
          const response = await fetch(attachment.url);
          const blob = await response.blob();
          fileToUpload = new File([blob], attachment.name, {
            type: attachment.type || "application/octet-stream",
            lastModified: attachment.lastModified || Date.now(),
          });
        } else {
          console.warn(`No file data for attachment: ${attachment.name}`);
          continue;
        }

        formData.append("attachments[]", fileToUpload, attachment.name);
      } catch (error) {
        console.error(
          `Failed to process attachment ${attachment.name}:`,
          error
        );
        invalidFiles.push({
          name: attachment.name,
          error: "Failed to process file",
        });
      }
    }

    if (invalidFiles.length > 0) {
      const errorMessage = invalidFiles
        .map((f) => `${f.name}: ${f.error}`)
        .join("\n");
      alert(`Please fix these files before submitting:\n${errorMessage}`);
      return;
    }

    console.log("FormData contents:");
    for (const [key, value] of formData.entries()) {
      console.log(
        key,
        value instanceof File ? `${value.name} (${value.size} bytes)` : value
      );
    }

    try {
      const response = await fetch("http://localhost:8000/api/v1/employees", {
        method: "POST",
        headers: {
          Authorization: `Bearer ${token}`,
        },
        body: formData,
      });

      if (!response.ok) {
        const errorData = await response.json();
        console.error("API Error:", errorData);
        throw new Error(errorData.message || "Submission failed");
      }

      const data = await response.json();
      console.log("Submission successful:", data);
      navigate("/employee-management");
      return data;
    } catch (error) {
      console.error("Error submitting onboarding data:", error);
      throw error;
    }
  };
  const handleDocumentUpdate = (document: Document) => {
    updateDocument(document.id, document.status, document.attachments);

    const updatedDocuments = documents.map((d) =>
      d.id === document.id
        ? {
            ...document,
            attachments:
              document.attachments?.map((attachment) => ({
                id: attachment.id,
                name: attachment.name,
                size: attachment.size,
                type: attachment.type,
                lastModified: attachment.file?.lastModified || Date.now(),
              })) || [],
          }
        : d
    );

    sessionStorage.setItem("documents", JSON.stringify(updatedDocuments));
  };
  const handleStepClick = (stepId: number) => {
    console.log("Navigating to step:", stepId);
    if (stepId < currentStep.id) {
      goToStep(stepId);
    }
  };

  const handleEmployeeInfoUpdate = (data: EmployeeInfo) => {
    console.log("Updating employee info:", data);
    try {
      updateEmployeeInfo(data);
      sessionStorage.setItem("employeeInformation", JSON.stringify(data));
      console.log("Employee info saved to sessionStorage");
    } catch (error) {
      console.error("Failed to update employee info:", error);
    }
  };

  const handlePersonalInfoUpdate = (data: PersonalInfo) => {
    console.log("Updating personal info:", data);
    try {
      updatePersonalInfo(data);
      sessionStorage.setItem("personalInformation", JSON.stringify(data));
      console.log("Personal info saved to sessionStorage");
    } catch (error) {
      console.error("Failed to update personal info:", error);
    }
  };

  const handleGovernmentIDsUpdate = (data: GovernmentID) => {
    console.log("Updating government IDs:", data);
    try {
      updateGovernmentIDs([data]);
      sessionStorage.setItem("governmentIDs", JSON.stringify([data]));
      console.log("Government IDs saved to sessionStorage");
    } catch (error) {
      console.error("Failed to update government IDs:", error);
    }
  };

  const handleEducationalBackgroundUpdate = (data: Education[]) => {
    console.log("Updating educational background:", data);
    try {
      updateEducationalBackground(data);
      sessionStorage.setItem("educationalBackground", JSON.stringify(data));
      console.log("Educational background saved to sessionStorage");
    } catch (error) {
      console.error("Failed to update educational background:", error);
    }
  };

  const handleWorkExperienceUpdate = (data: Work[]) => {
    console.log("Updating work experience:", data);
    try {
      updateWorkExperience(data);
      sessionStorage.setItem("workExperience", JSON.stringify(data));
      console.log("Work experience saved to sessionStorage");
    } catch (error) {
      console.error("Failed to update work experience:", error);
    }
  };

  const renderStepComponent = () => {
    if (!currentStep) return null;

    console.log("Rendering step component:", currentStep.component);

    switch (currentStep.component) {
      case "Step1EmployeeInfo":
        return (
          <Step1EmployeeInfo
            data={employeeInformation || {}}
            onUpdate={handleEmployeeInfoUpdate}
            onValidationChange={setIsStepValid}
          />
        );
      case "Step2PersonalInfo":
        return (
          <Step2PersonalInfo
            data={personalInformation || {}}
            onUpdate={handlePersonalInfoUpdate}
            onValidationChange={setIsStepValid}
          />
        );
      case "Step3GovernmentID":
        return (
          <Step3GovernmentID
            data={governmentIDs[0] || {}}
            onUpdate={handleGovernmentIDsUpdate}
            onValidationChange={setIsStepValid}
          />
        );
      case "EducationalBackground":
        return (
          <EducationalBackground
            data={educationalBackground || []}
            onUpdate={handleEducationalBackgroundUpdate}
            onValidationChange={setIsStepValid}
          />
        );
      case "WorkExperience":
        return (
          <WorkExperience
            data={workExperience || []}
            onUpdate={handleWorkExperienceUpdate}
            onValidationChange={setIsStepValid}
          />
        );
      case "DocumentAttachment":
        return (
          <DocumentAttachment
            documents={documents || []}
            onDocumentUpdate={handleDocumentUpdate}
            onValidationChange={setIsStepValid}
          />
        );
      default:
        return <div className="p-4">Step component not implemented yet</div>;
    }
  };

  useEffect(() => {
    console.log("Checking document attachment validation");
    if (currentStep?.component === "DocumentAttachment") {
      const requiredDocs = documents?.filter((doc) => doc.required) || [];
      const allRequiredUploaded = requiredDocs.every(
        (doc) => doc.status === "uploaded"
      );
      console.log("Document validation result:", allRequiredUploaded);
      setIsStepValid(allRequiredUploaded);
    }
  }, [currentStep, documents]);

  useEffect(() => {
    console.log("Loading data from sessionStorage");
    const loadFromSession = () => {
      try {
        console.log("Checking sessionStorage for saved data");
        const savedData = {
          employeeInformation: sessionStorage.getItem("employeeInformation"),
          personalInformation: sessionStorage.getItem("personalInformation"),
          governmentIDs: sessionStorage.getItem("governmentIDs"),
          educationalBackground: sessionStorage.getItem(
            "educationalBackground"
          ),
          workExperience: sessionStorage.getItem("workExperience"),
        };

        console.log("SessionStorage contents:", savedData);

        if (savedData.employeeInformation) {
          console.log("Found employee info in sessionStorage");
          const parsedData = JSON.parse(savedData.employeeInformation);
          console.log("Parsed employee info:", parsedData);
          updateEmployeeInfo(parsedData);
        }
        if (savedData.personalInformation) {
          console.log("Found personal info in sessionStorage");
          const parsedData = JSON.parse(savedData.personalInformation);
          console.log("Parsed personal info:", parsedData);
          updatePersonalInfo(parsedData);
        }
        if (savedData.governmentIDs) {
          console.log("Found government IDs in sessionStorage");
          const parsedData = JSON.parse(savedData.governmentIDs);
          console.log("Parsed government IDs:", parsedData);
          updateGovernmentIDs(parsedData);
        }
        if (savedData.educationalBackground) {
          console.log("Found educational background in sessionStorage");
          const parsedData = JSON.parse(savedData.educationalBackground);
          console.log("Parsed educational background:", parsedData);
          updateEducationalBackground(parsedData);
        }
        if (savedData.workExperience) {
          console.log("Found work experience in sessionStorage");
          const parsedData = JSON.parse(savedData.workExperience);
          console.log("Parsed work experience:", parsedData);
          updateWorkExperience(parsedData);
        }
      } catch (error) {
        console.error("Failed to load from sessionStorage", error);
      }
    };

    loadFromSession();
  }, []);

  useEffect(() => {
    return () => {};
  }, []);

  return (
    <div className="mx-auto bg-white shadow-lg rounded-lg">
      <StepHeader
        steps={steps}
        currentStep={activeStepIndex}
        onStepClick={handleStepClick}
      />

      {renderStepComponent()}

      <StepNavigation
        onNext={async () => {
          if (isLastStep) {
            await submitOnboardingData();
          } else {
            goToNextStep();
          }
        }}
        onBack={goToPreviousStep}
        isFirstStep={isFirstStep}
        isLastStep={isLastStep}
        disabled={!isStepValid}
      />
    </div>
  );
};

export default OnboardingDetails;
