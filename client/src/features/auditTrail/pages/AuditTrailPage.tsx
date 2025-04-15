import React, { useEffect, useState } from "react";
import axios from "axios";
import AuditTrailTable from "../components/AuditTrailTable";
import BreadcrumbHeader from "../../../components/BreadcrumbHeader";

const AuditTrailPage: React.FC = () => {
  const [token, setToken] = useState<string>("");
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const storedToken = localStorage.getItem("auth_token");
    if (storedToken) {
      setToken(storedToken);
      setLoading(false);
      return;
    }

    loginUser();
  }, []);

  const loginUser = async () => {
    try {
      const { data } = await axios.post("/api/v1/auth/login", {
        email: "estefania.waters@example.org",
        password: "password",
      });

      if (data?.data?.token) {
        const newToken = data.data.token;
        setToken(newToken);
        localStorage.setItem("auth_token", newToken);
      } else {
        throw new Error("Invalid login response format");
      }
    } catch (error) {
      console.error("Login failed:", error);
      setError(
        error instanceof Error ? error.message : "Authentication failed"
      );
    } finally {
      setLoading(false);
    }
  };

  if (loading) {
    return (
      <div className="flex justify-center items-center h-64">
        <div className="spinner-border text-primary" role="status">
          <span className="sr-only">Loading...</span>
        </div>
      </div>
    );
  }

  if (error) {
    return (
      <div className="p-4 text-center">
        <div className="bg-red-100 text-red-700 p-4 rounded">
          <h5 className="font-bold">Authentication Failed</h5>
          <p>{error || "Could not authenticate with the server."}</p>
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
      <BreadcrumbHeader title="AUDIT TRAIL" />

      {/* Row */}
      <div className="flex flex-wrap -mx-4">
        <div className="w-full px-4">
          <div className="bg-white overflow-hidden rounded-lg shadow">
            <div className="p-6">
              {token && <AuditTrailTable token={token} />}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default AuditTrailPage;
