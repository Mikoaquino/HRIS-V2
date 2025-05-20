import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import BreadcrumbHeader from "../../../components/BreadcrumbHeader";

interface Employee {
  id: number;
  first_name: string;
  middle_name: string | null;
  last_name: string;
  suffix: string | null;
  birth_date: string;
  gender: string;
  civil_status: string;
  nationality: string;
  religion: string;
  contact_number: string;
  sss_id: number;
  tin_id: number;
  philhealth_id: number;
  pagibig_id: number;
  created_at: string;
  updated_at: string;
  job_position?: JobPosition;
  department?: Department;
}

interface JobPosition {
  id: number;
  name: string;
  description?: string;
}

interface Department {
  id: number;
  name: string;
  description?: string;
}

interface User {
  id: number;
  email: string;
  employee_id: number;
  status: string;
  created_at: string;
  updated_at: string;
  deleted_at: null | string;
  employee: Employee;
}

interface ProfileFormData {
  fullName: string;
  email: string;
  jobTitle: string;
  contactNumber: string;
  employeeId: string;
  department: string;
}

const UserProfilePage: React.FC = () => {
  const [token, setToken] = useState<string>("");
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);
  const [userData, setUserData] = useState<User | null>(null);
  const [formData, setFormData] = useState<ProfileFormData>({
    fullName: "",
    email: "",
    jobTitle: "",
    contactNumber: "",
    employeeId: "",
    department: "",
  });

  const fetchEmployeeDetails = async (employeeId: number, token: string) => {
    try {
      const response = await fetch(
        `http://127.0.0.1:8000/api/v1/employees/${employeeId}?load=job_position,department`,
        {
          headers: {
            Authorization: `Bearer ${token}`,
            Accept: "application/json",
          },
        }
      );

      // Don't check response.ok since 302 is not considered "ok" by fetch but is valid for your API
      const employeeData = await response.json();

      // Check if the response has data, regardless of status code
      if (!employeeData.data) {
        throw new Error(
          `Failed to fetch employee details: No data received from API`
        );
      }

      const employee = employeeData.data;
      console.log("API Response Status:", employeeData.status);
      console.log("Job position from API:", employee.job_position?.name);
      console.log("Department from API:", employee.department?.name);

      return employee;
    } catch (err) {
      console.error("Error fetching employee details:", err);
      throw err;
    }
  };

  useEffect(() => {
    const loadUserData = async () => {
      const storedToken = sessionStorage.getItem("token");
      const storedUserData = sessionStorage.getItem("user");

      if (storedToken && storedUserData) {
        try {
          const parsedUserData: User = JSON.parse(storedUserData);
          setToken(storedToken);

          try {
            // Fetch employee details first
            const employeeDetails = await fetchEmployeeDetails(
              parsedUserData.employee_id,
              storedToken
            );

            console.log(
              "Successfully fetched employee details:",
              employeeDetails
            );

            // Update the user data with the fetched details
            const updatedUserData = {
              ...parsedUserData,
              employee: {
                ...parsedUserData.employee,
                job_position: employeeDetails.job_position,
                department: employeeDetails.department,
              },
            };

            // Update session storage with the complete data
            sessionStorage.setItem("user", JSON.stringify(updatedUserData));

            // Update state with the complete data
            setUserData(updatedUserData);

            // Prepare form data from the updated user data
            const employee = updatedUserData.employee;
            const fullName = `${employee.first_name} ${
              employee.middle_name ? employee.middle_name + " " : ""
            }${employee.last_name}${
              employee.suffix ? " " + employee.suffix : ""
            }`.trim();

            setFormData({
              fullName: fullName,
              email: updatedUserData.email,
              jobTitle: employee.job_position?.name || "",
              contactNumber: employee.contact_number || "",
              employeeId: String(updatedUserData.employee_id),
              department: employee.department?.name || "",
            });

            console.log("Form data updated:", {
              jobTitle: employee.job_position?.name || "",
              department: employee.department?.name || "",
            });
          } catch (detailsError) {
            console.warn(
              "Could not load job position or department:",
              detailsError
            );

            // Fall back to using the data from session storage
            setUserData(parsedUserData);

            const employee = parsedUserData.employee;
            const fullName = `${employee.first_name} ${
              employee.middle_name ? employee.middle_name + " " : ""
            }${employee.last_name}${
              employee.suffix ? " " + employee.suffix : ""
            }`.trim();

            setFormData({
              fullName: fullName,
              email: parsedUserData.email,
              jobTitle: employee.job_position?.name || "",
              contactNumber: employee.contact_number || "",
              employeeId: String(parsedUserData.employee_id),
              department: employee.department?.name || "",
            });
          }

          setLoading(false);
        } catch (err) {
          console.error("Error parsing user data", err);
          setError("Failed to load user profile data");
          setLoading(false);
        }
      } else {
        setError("User session not found. Please log in again.");
        setLoading(false);
      }
    };

    loadUserData();
  }, []);

  if (loading) {
    return (
      <div className="flex justify-center items-center h-64">
        <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
      </div>
    );
  }

  if (error) {
    return (
      <div className="p-4 text-center">
        <div className="bg-red-100 text-red-700 p-4 rounded">
          <h5 className="font-bold">Error</h5>
          <p>{error}</p>
          <button
            className="mt-2 bg-blue-600 text-white px-4 py-2 rounded"
            onClick={() => window.location.reload()}
          >
            Refresh Page
          </button>
        </div>
      </div>
    );
  }

  return (
    <div>
      <BreadcrumbHeader title="USER PROFILE" />

      {/* Profile Content */}
      <div className="flex flex-wrap -mx-4">
        <div className="w-full px-4">
          <div className="bg-white overflow-hidden rounded-lg shadow">
            <div className="p-6">
              {/* User Info Header */}
              <div className="bg-emerald-500 -mx-6 -mt-6 p-6 mb-6">
                <div className="flex items-center">
                  <div className="w-16 h-16 bg-gray-300 rounded-full mr-4 flex items-center justify-center text-emerald-800 font-bold text-xl">
                    {userData?.employee.first_name?.[0] || ""}
                    {userData?.employee.last_name?.[0] || ""}
                  </div>
                  <div>
                    <h3 className="text-white font-medium">
                      {formData.fullName}
                    </h3>
                    <p className="text-emerald-100">{formData.email}</p>
                    {formData.jobTitle && (
                      <p className="text-emerald-100 text-sm mt-1">
                        {formData.jobTitle}{" "}
                        {formData.department ? `- ${formData.department}` : ""}
                      </p>
                    )}
                  </div>
                </div>
              </div>

              {/* Profile Form */}
              <form>
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  {/* Full Name */}
                  <div>
                    <label
                      htmlFor="fullName"
                      className="block text-sm font-medium text-gray-700 mb-1"
                    >
                      Full Name
                    </label>
                    <input
                      type="text"
                      id="fullName"
                      name="fullName"
                      value={formData.fullName}
                      className="w-full p-2 border border-gray-200 rounded bg-gray-50"
                      readOnly
                    />
                  </div>

                  {/* Email Address */}
                  <div>
                    <label
                      htmlFor="email"
                      className="block text-sm font-medium text-gray-700 mb-1"
                    >
                      Email Address
                    </label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      value={formData.email}
                      className="w-full p-2 border border-gray-200 rounded bg-gray-50"
                      readOnly
                    />
                  </div>

                  {/* Job Title */}
                  <div>
                    <label
                      htmlFor="jobTitle"
                      className="block text-sm font-medium text-gray-700 mb-1"
                    >
                      Job Title
                    </label>
                    <div className="relative">
                      <input
                        type="text"
                        id="jobTitle"
                        name="jobTitle"
                        value={formData.jobTitle}
                        className="w-full p-2 border border-gray-200 rounded bg-gray-50 pr-8"
                        readOnly
                      />
                      <div className="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg
                          className="w-4 h-4 text-gray-400"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth={2}
                            d="M19 9l-7 7-7-7"
                          />
                        </svg>
                      </div>
                    </div>
                  </div>

                  {/* Contact Number */}
                  <div>
                    <label
                      htmlFor="contactNumber"
                      className="block text-sm font-medium text-gray-700 mb-1"
                    >
                      Contact Number
                    </label>
                    <input
                      type="text"
                      id="contactNumber"
                      name="contactNumber"
                      value={formData.contactNumber}
                      className="w-full p-2 border border-gray-200 rounded bg-gray-50"
                      readOnly
                    />
                  </div>

                  {/* Employee ID */}
                  <div>
                    <label
                      htmlFor="employeeId"
                      className="block text-sm font-medium text-gray-700 mb-1"
                    >
                      Employee ID
                    </label>
                    <input
                      type="text"
                      id="employeeId"
                      name="employeeId"
                      value={formData.employeeId}
                      className="w-full p-2 border border-gray-200 rounded bg-gray-50"
                      readOnly
                    />
                  </div>

                  {/* Department */}
                  <div>
                    <label
                      htmlFor="department"
                      className="block text-sm font-medium text-gray-700 mb-1"
                    >
                      Department
                    </label>
                    <div className="relative">
                      <input
                        type="text"
                        id="department"
                        name="department"
                        value={formData.department}
                        className="w-full p-2 border border-gray-200 rounded bg-gray-50 pr-8"
                        readOnly
                      />
                      <div className="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg
                          className="w-4 h-4 text-gray-400"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth={2}
                            d="M19 9l-7 7-7-7"
                          />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Password Button */}
                <div className="mt-6">
                  <Link
                    to="/profile/change-password"
                    className="px-4 py-2 bg-emerald-500 text-white rounded hover:bg-emerald-600 transition-colors inline-block"
                  >
                    Change Password
                  </Link>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default UserProfilePage;
