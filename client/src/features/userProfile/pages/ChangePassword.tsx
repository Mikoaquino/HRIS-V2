import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import BreadcrumbHeader from "../../../components/BreadcrumbHeader";

interface PasswordFormData {
  currentPassword: string;
  newPassword: string;
  confirmPassword: string;
}

interface User {
  id: number;
  email: string;
  employee_id: number;
  employee: {
    first_name: string;
    last_name: string;
  };
}

const ChangePasswordPage: React.FC = () => {
  const [token, setToken] = useState<string>("");
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);
  const [userData, setUserData] = useState<User | null>(null);
  const [formData, setFormData] = useState<PasswordFormData>({
    currentPassword: "",
    newPassword: "",
    confirmPassword: "",
  });
  const [isSaving, setIsSaving] = useState<boolean>(false);
  const [feedbackMessage, setFeedbackMessage] = useState<{
    type: "success" | "error";
    message: string;
  } | null>(null);

  useEffect(() => {
    const loadUserData = async () => {
      const storedToken = sessionStorage.getItem("token");
      const storedUserData = sessionStorage.getItem("user");

      if (storedToken && storedUserData) {
        try {
          const parsedUserData: User = JSON.parse(storedUserData);
          setToken(storedToken);
          setUserData(parsedUserData);
          setLoading(false);
        } catch (err) {
          console.error("Error parsing user data", err);
          setError("Failed to load user data");
          setLoading(false);
        }
      } else {
        setError("User session not found. Please log in again.");
        setLoading(false);
      }
    };

    loadUserData();
  }, []);

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const { name, value } = e.target;
    setFormData((prevData) => ({
      ...prevData,
      [name]: value,
    }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setFeedbackMessage(null);

    // Validate password match
    if (formData.newPassword !== formData.confirmPassword) {
      setFeedbackMessage({
        type: "error",
        message: "New password and confirmation do not match",
      });
      return;
    }

    // Validate password strength
    if (formData.newPassword.length < 8) {
      setFeedbackMessage({
        type: "error",
        message: "Password must be at least 8 characters long",
      });
      return;
    }

    setIsSaving(true);

    try {
      // Replace with your actual API endpoint
      const response = await fetch(
        "http://127.0.0.1:8000/api/v1/users/change-password",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${token}`,
            Accept: "application/json",
          },
          body: JSON.stringify({
            current_password: formData.currentPassword,
            new_password: formData.newPassword,
            new_password_confirmation: formData.confirmPassword,
          }),
        }
      );

      const result = await response.json();

      if (!response.ok) {
        throw new Error(result.message || "Failed to change password");
      }

      setFeedbackMessage({
        type: "success",
        message: "Password changed successfully",
      });

      // Clear the form
      setFormData({
        currentPassword: "",
        newPassword: "",
        confirmPassword: "",
      });
    } catch (err: any) {
      console.error("Error changing password:", err);
      setFeedbackMessage({
        type: "error",
        message: err.message || "Failed to change password",
      });
    } finally {
      setIsSaving(false);
    }
  };

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
      <BreadcrumbHeader title="CHANGE PASSWORD" />

      {/* Password Change Content */}
      <div className="flex flex-wrap -mx-4">
        <div className="w-full px-4">
          <div className="bg-white overflow-hidden rounded-lg shadow">
            {/* Turquoise Header with User Info */}
            <div className="bg-teal-400 p-6">
              <div className="flex items-center">
                <div className="w-16 h-16 bg-gray-200 rounded-full mr-4 flex items-center justify-center text-gray-600 font-bold text-xl">
                  {userData?.employee.first_name?.[0] || ""}
                  {userData?.employee.last_name?.[0] || ""}
                </div>
                <div>
                  <h3 className="font-medium text-lg">
                    {userData?.employee.first_name}{" "}
                    {userData?.employee.last_name}
                  </h3>
                  <p className="text-gray-700">{userData?.email}</p>
                </div>
              </div>
            </div>

            <div className="p-6">
              {/* Feedback Message */}
              {feedbackMessage && (
                <div
                  className={`p-4 mb-6 rounded ${
                    feedbackMessage.type === "success"
                      ? "bg-green-100 text-green-700"
                      : "bg-red-100 text-red-700"
                  }`}
                >
                  {feedbackMessage.message}
                </div>
              )}

              {/* Password Change Form */}
              <form onSubmit={handleSubmit}>
                <div className="space-y-4">
                  {/* Current Password */}
                  <div>
                    <label
                      htmlFor="currentPassword"
                      className="block text-gray-700 mb-2"
                    >
                      Current Password
                    </label>
                    <input
                      type="password"
                      id="currentPassword"
                      name="currentPassword"
                      placeholder="Enter Current Password"
                      value={formData.currentPassword}
                      onChange={handleInputChange}
                      className="w-full p-3 border border-gray-300 rounded bg-gray-50"
                      required
                    />
                  </div>

                  {/* New Password */}
                  <div>
                    <label
                      htmlFor="newPassword"
                      className="block text-gray-700 mb-2"
                    >
                      New Password
                    </label>
                    <input
                      type="password"
                      id="newPassword"
                      name="newPassword"
                      placeholder="Enter New Password"
                      value={formData.newPassword}
                      onChange={handleInputChange}
                      className="w-full p-3 border border-gray-300 rounded bg-gray-50"
                      required
                      minLength={8}
                    />
                  </div>

                  {/* Confirm New Password */}
                  <div>
                    <label
                      htmlFor="confirmPassword"
                      className="block text-gray-700 mb-2"
                    >
                      Re-enter New Password
                    </label>
                    <input
                      type="password"
                      id="confirmPassword"
                      name="confirmPassword"
                      placeholder="Re-enter New Password"
                      value={formData.confirmPassword}
                      onChange={handleInputChange}
                      className="w-full p-3 border border-gray-300 rounded bg-gray-50"
                      required
                    />
                  </div>

                  {/* Action Buttons */}
                  <div className="flex justify-end space-x-3 mt-8">
                    <Link
                      to="/profile"
                      className="px-6 py-2 border border-gray-300 rounded text-gray-700 hover:bg-gray-50 transition-colors"
                    >
                      Cancel
                    </Link>
                    <button
                      type="submit"
                      className="px-6 py-2 bg-teal-500 text-white rounded hover:bg-teal-600 transition-colors disabled:bg-teal-300"
                      disabled={isSaving}
                    >
                      {isSaving ? (
                        <span className="flex items-center">
                          <svg
                            className="animate-spin -ml-1 mr-2 h-4 w-4 text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                          >
                            <circle
                              className="opacity-25"
                              cx="12"
                              cy="12"
                              r="10"
                              stroke="currentColor"
                              strokeWidth="4"
                            ></circle>
                            <path
                              className="opacity-75"
                              fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                            ></path>
                          </svg>
                          Saving...
                        </span>
                      ) : (
                        "Save"
                      )}
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default ChangePasswordPage;
