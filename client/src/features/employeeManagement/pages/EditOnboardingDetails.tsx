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
import { useNavigate, useParams } from "react-router-dom";
import axios from "axios";

import {
  Document,
  Work,
  Education,
  EmployeeInfo,
  PersonalInfo,
  GovernmentID,
} from "../types/onboarding";

const EditOnboardingDetails: React.FC = () => {
  console.log("Rendering EditOnboardingDetails parent component");
  const navigate = useNavigate();
  const { id } = useParams<{ id: string }>();

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
  const [isLoading, setIsLoading] = useState<boolean>(true);

  const fetchEmployeeData = async () => {
    try {
      setIsLoading(true);
      // Configure axios to not follow redirects
      const axiosConfig = {
        params: {
          load: "account,educations,work_experiences,attachments,present_address,permanent_address,employment_type,job_position,employee_status,department",
        },
        headers: {
          Authorization: `Bearer ${sessionStorage.getItem("token")}`,
        },
        maxRedirects: 0, // Don't follow redirects
        validateStatus: function (status: number) {
          return status >= 200 && status < 303; // Accept 302 as valid
        },
      };

      const response = await axios.get(
        `http://localhost:8000/api/v1/employees/${id}`,
        axiosConfig
      );

      // Handle 302 redirect if needed
      if (response.status === 302 && response.headers.location) {
        const redirectResponse = await axios.get(response.headers.location, {
          headers: {
            Authorization: `Bearer ${sessionStorage.getItem("token")}`,
            "Content-Type": "application/json",
          },
        });
        processEmployeeData(redirectResponse.data.data);
      } else {
        processEmployeeData(response.data.data);
      }
    } catch (error) {
      console.error("Failed to fetch employee data:", error);
      setIsLoading(false);
    }
  };

  const processEmployeeData = (employeeData: any) => {
    // Transform the API data to match our form structure
    const employeeInfo: EmployeeInfo = {
      employeeNumber: employeeData.employee_number || "",
      dateHired: employeeData.hired_at || "",
      employmentType: employeeData.employment_type_id?.toString() || "",
      jobPosition: employeeData.job_position_id?.toString() || "",
      employeeStatus: employeeData.employee_status_id?.toString() || "",
      department: employeeData.department_id?.toString() || "",
      immediateSupervisor:
        employeeData.immediate_supervisor_id?.toString() || "",
      email: employeeData.account?.email || "",
    };

    const personalInfo: PersonalInfo = {
      firstName: employeeData.first_name,
      middleName: employeeData.middle_name || "",
      lastName: employeeData.last_name,
      suffix: employeeData.suffix || "",
      dateOfBirth: employeeData.birth_date,
      gender: employeeData.gender,
      civilStatus: employeeData.civil_status,
      nationality: employeeData.nationality,
      religion: employeeData.religion,
      contactNumber: employeeData.contact_number?.replace(/^0/, ""),
      email: employeeData.account?.email,
      birthPlace: employeeData.birth_place,
      citizenship: employeeData.citizenship,
      currentAddress: employeeData.present_address?.additional_details,
      currentAddressCode: employeeData.present_address?.barangay_code,
      currentAddressZip: employeeData.present_address?.zip_code,
      permanentAddress: employeeData.permanent_address?.additional_details,
      permanentAddressCode: employeeData.permanent_address?.barangay_code,
      permanentAddressZip: employeeData.permanent_address?.zip_code,
      age: calculateAge(employeeData.birth_date),
    };

    const govtIDs: GovernmentID = {
      sssNumber: employeeData.sss_id?.toString() || "",
      tinNumber: employeeData.tin_id?.toString() || "",
      philhealthNumber: employeeData.philhealth_id?.toString() || "",
      pagibigNumber: employeeData.pagibig_id?.toString() || "",
    };

    const educations: Education[] =
      employeeData.educations?.map((edu: any) => ({
        id: edu.id,
        school: edu.school,
        degree: edu.degree,
        from: edu.from ? new Date(edu.from).getFullYear().toString() : "",
        to: edu.to ? new Date(edu.to).getFullYear().toString() : "",
        graduated_at: !!edu.graduated_at,
        attainment: edu.attainment,
        isPresent: !edu.graduated_at,
      })) || [];

    const workExp: Work[] =
      employeeData.work_experiences?.map((work: any) => ({
        id: work.id,
        employer: work.previous_employer,
        position: work.job_position,
        from: work.from ? new Date(work.from).getFullYear().toString() : "",
        to: work.to ? new Date(work.to).getFullYear().toString() : "",
        reason: work.reason_for_leaving,
      })) || [];

    const docs: Document[] =
      employeeData.attachments?.map((att: any, index: number) => ({
        id: index,
        name: att.client_name,
        status: "uploaded",
        required: true,
        attachments: [
          {
            id: att.hashed_name,
            name: att.client_name,
            size: 0, // Will be updated when file is loaded
            type: `application/${att.client_name.split(".").pop()}`,
            url: `http://localhost:8000/storage/attachments/${att.hashed_name}`,
            file: null as unknown as File, // Placeholder
          },
        ],
      })) || [];

    // Update session storage with fetched data
    sessionStorage.setItem("employeeInformation", JSON.stringify(employeeInfo));
    sessionStorage.setItem("personalInformation", JSON.stringify(personalInfo));
    sessionStorage.setItem("governmentIDs", JSON.stringify([govtIDs]));
    sessionStorage.setItem(
      "hris-educational-background",
      JSON.stringify(educations)
    );
    sessionStorage.setItem("hris-work-experience", JSON.stringify(workExp));
    sessionStorage.setItem("documents", JSON.stringify(docs));

    // Update state with fetched data
    updateEmployeeInfo(employeeInfo);
    updatePersonalInfo(personalInfo);
    updateGovernmentIDs([govtIDs]);
    updateEducationalBackground(educations);
    updateWorkExperience(workExp);
    updateDocument(docs);

    setIsLoading(false);
  };

  const calculateAge = (birthDate: string) => {
    if (!birthDate) return "";
    const today = new Date();
    const birthDateObj = new Date(birthDate);
    let age = today.getFullYear() - birthDateObj.getFullYear();
    const monthDiff = today.getMonth() - birthDateObj.getMonth();
    if (
      monthDiff < 0 ||
      (monthDiff === 0 && today.getDate() < birthDateObj.getDate())
    ) {
      age--;
    }
    return age.toString();
  };

  useEffect(() => {
    if (id) {
      fetchEmployeeData();
    }
  }, [id]);

  const updateOnboardingData = async () => {
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
    formData.append("_method", "PUT");

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
      addFormField(`educations[${index}][graduated_at]`, `${edu.to}-1`);
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
      addFormField(`work_experiences[${index}][from]`, `${work.from}-1-1`);
      addFormField(`work_experiences[${index}][to]`, `${work.to}-1-1`);
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
      const response = await fetch(
        `http://localhost:8000/api/v1/employees/${id}`,
        {
          method: "POST",
          headers: {
            Authorization: `Bearer ${token}`,
          },
          body: formData,
        }
      );

      if (!response.ok) {
        const errorData = await response.json();
        console.error("API Error:", errorData);
        throw new Error(errorData.message || "Update failed");
      }

      const data = await response.json();
      console.log("Update successful:", data);
      navigate("/employee-management");
      return data;
    } catch (error) {
      console.error("Error updating employee data:", error);
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
      const govtIDs = Array.isArray(data) ? data[0] : data;

      updateGovernmentIDs(govtIDs);

      sessionStorage.setItem("governmentIDs", JSON.stringify(govtIDs));
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
    if (isLoading) return <div className="p-4">Loading employee data...</div>;

    console.log("Rendering step component:", currentStep.component);

    switch (currentStep.component) {
      case "Step1EmployeeInfo":
        return (
          <Step1EmployeeInfo
            data={employeeInformation || {}}
            onUpdate={handleEmployeeInfoUpdate}
            onValidationChange={setIsStepValid}
            isEditMode={true}
          />
        );
      case "Step2PersonalInfo":
        return (
          <Step2PersonalInfo
            data={personalInformation || {}}
            onUpdate={handlePersonalInfoUpdate}
            onValidationChange={setIsStepValid}
            isEditMode={true}
          />
        );
      case "Step3GovernmentID":
        return (
          <Step3GovernmentID
            data={governmentIDs[0] || {}}
            onUpdate={handleGovernmentIDsUpdate}
            onValidationChange={setIsStepValid}
            isEditMode={true}
          />
        );
      case "EducationalBackground":
        return (
          <EducationalBackground
            data={educationalBackground || []}
            onUpdate={handleEducationalBackgroundUpdate}
            onValidationChange={setIsStepValid}
            isEditMode={true}
          />
        );
      case "WorkExperience":
        return (
          <WorkExperience
            data={workExperience || []}
            onUpdate={handleWorkExperienceUpdate}
            onValidationChange={setIsStepValid}
            isEditMode={true}
          />
        );
      case "DocumentAttachment":
        return (
          <DocumentAttachment
            documents={documents || []}
            onDocumentUpdate={handleDocumentUpdate}
            onValidationChange={setIsStepValid}
            isEditMode={true}
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

  return (
    <div>
      <div className="mx-autoshadow-lg rounded-lg">
        <div>
          <StepHeader
            steps={steps}
            currentStep={activeStepIndex}
            onStepClick={handleStepClick}
          />

          {renderStepComponent()}
        </div>
      </div>
      <div>
        <StepNavigation
          onNext={async () => {
            if (isLastStep) {
              await updateOnboardingData();
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
    </div>
  );
};

export default EditOnboardingDetails;
