import { useState, FormEvent } from "react";
import { FaUserShield, FaUser } from "react-icons/fa";
import { useNavigate } from "react-router-dom";

const LoginPage = () => {
  const [role, setRole] = useState<"admin" | "employee">("employee");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");
  const [isLoading, setIsLoading] = useState(false);
  const navigate = useNavigate(); // Step 1: Initialized navigate

  const handleLogin = async (e: FormEvent) => {
    e.preventDefault(); // Step 2: Prevent default form submission to stop page refresh
    setIsLoading(true);
    setError("");

    try {
      const response = await fetch("http://127.0.0.1:8000/api/v1/auth/login", {
        method: "POST",

        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ email, password }),
      });

      const data = await response.json();

      if (response.status !== 201) {
        throw new Error(data.message || "Login failed");
      }

      const token = data?.data?.token;
      if (!token) {
        throw new Error("Access token missing from response");
      }

      sessionStorage.setItem("token", token);

      if (data.data.user) {
        sessionStorage.setItem("user", JSON.stringify(data.data.user));
      }

      console.log("Token saved to localStorage:", token);

      console.log("Navigating to audit-trail...");
      setTimeout(() => {
        navigate("/hr-dashboard", { replace: true });
      }, 1000);
    } catch (err: any) {
      console.error("Login error:", err);
      const msg = err?.message || "Unknown error";
      setError("Login failed: " + msg);
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <div className="flex items-center justify-center min-h-screen bg-teal-500 text-white">
      <div className="bg-white text-black p-10 rounded-lg shadow-lg w-full max-w-xl">
        <div className="text-center mb-6">
          <div className="flex items-center justify-center gap-2 text-teal-600 text-xl font-semibold">
            <span className="text-3xl">🌀</span>
            <h2>Welcome Back</h2>
          </div>
          <p className="text-gray-600">
            Sign in as {role === "admin" ? "an Admin" : "an Employee"}.
          </p>
        </div>

        <div className="flex justify-center gap-4 mb-6">
          <button
            type="button"
            onClick={() => setRole("admin")}
            className={`flex items-center gap-2 px-4 py-2 rounded-md font-medium transition duration-200 ${
              role === "admin"
                ? "bg-teal-700 text-white hover:bg-teal-800"
                : "bg-teal-100 text-teal-700 border border-teal-500 hover:bg-teal-200"
            }`}
          >
            <FaUserShield /> Admin
          </button>
          <button
            type="button"
            onClick={() => setRole("employee")}
            className={`flex items-center gap-2 px-4 py-2 rounded-md font-medium transition duration-200 ${
              role === "employee"
                ? "bg-teal-700 text-white hover:bg-teal-800"
                : "bg-teal-100 text-teal-700 border border-teal-500 hover:bg-teal-200"
            }`}
          >
            <FaUser /> Employee
          </button>
        </div>

        {error && <p className="text-red-500 text-center mb-4">{error}</p>}

        <form className="flex flex-col gap-4 mt-6" onSubmit={handleLogin}>
          <div>
            <label className="text-sm font-medium text-gray-700">Email</label>
            <input
              type="email"
              placeholder="Enter your email"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              className="w-full mt-1 border px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400 text-black"
              required
            />
          </div>
          <div>
            <label className="text-sm font-medium text-gray-700">
              Password
            </label>
            <input
              type="password"
              placeholder="Enter your password"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              className="w-full mt-1 border px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-400 text-black"
              required
            />
          </div>

          <button
            type="submit"
            className="w-full mt-6 bg-teal-700 text-white py-2 rounded-md hover:bg-teal-800 transition duration-200"
            disabled={isLoading}
          >
            {isLoading ? "Loading..." : "Sign In"}
          </button>
        </form>
      </div>
    </div>
  );
};

export default LoginPage;
