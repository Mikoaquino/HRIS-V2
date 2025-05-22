import {
  BrowserRouter,
  Routes,
  Route,
  Navigate,
  Outlet,
} from "react-router-dom";
import HrDashboard from "../features/hrDashboard/pages/HrDashboard";
import Login from "../features/auth/pages/Login";
import AuditTrailPage from "../features/auditTrail/pages/AuditTrailPage";
import HrLayout from "../layout/HrLayout";
import AccountManagement from "../features/accountManagement/AccountManagement";
import EmpDashboard from "../features/hrDashboard/pages/EmpDashboard/EmpDashboard";
import OnboardingDetails from "../features/employeeManagement/pages/OnboardingDetails";
import UserProfile from "../features/userProfile/pages/UserProfile";
import ChangePasswordPage from "../features/userProfile/pages/ChangePassword";
import EmployeeManagement from "../features/employeeManagement/pages/EmployeeManagement";
import EducationalBackground from "../features/employeeManagement/components/EducationalBackground";
import WorkExperience from "../features/employeeManagement/components/WorkExperience";

// Authentication check
const isAuthenticated = () => {
  return Boolean(sessionStorage.getItem("token"));
};

// Private route guard
const PrivateRoute = () => {
  return isAuthenticated() ? <Outlet /> : <Navigate to="/login" replace />;
};

// App routes
export const AppRoutes = () => {
  return (
    <BrowserRouter>
      <Routes>
        {/* Public Route */}
        <Route path="/login" element={<Login />} />

        {/* Private Routes */}
        <Route element={<PrivateRoute />}>
          <Route element={<HrLayout />}>
            <Route
              path="/employee-management/onboarding"
              element={<OnboardingDetails />}
            />
            <Route path="/audit-trail" element={<AuditTrailPage />} />
            <Route path="/hr-dashboard" element={<HrDashboard />} />

            <Route path="/account-management" element={<AccountManagement />} />
            <Route
              path="/employee-management"
              element={<EmployeeManagement />}
            />
            <Route
              path="/education-background"
              element={<EducationalBackground />}
            />
            <Route path="/work-experience" element={<WorkExperience />} />
            <Route path="/profile" element={<UserProfile />} />
            <Route
              path="/profile/change-password"
              element={<ChangePasswordPage />}
            />

            {/* will change to the EmpLayout */}
            <Route path="/employee-dashboard" element={<EmpDashboard />} />
          </Route>
        </Route>

        {/* Redirects */}
        <Route path="/" element={<Navigate to="/audit-trail" replace />} />
        <Route path="*" element={<Navigate to="/audit-trail" replace />} />
      </Routes>
    </BrowserRouter>
  );
};
