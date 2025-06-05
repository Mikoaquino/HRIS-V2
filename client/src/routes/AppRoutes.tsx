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
import EmpLayout from "../layout/EmployeeLayout";
import AccountManagement from "../features/accountManagement/AccountManagement";
import EmpDashboard from "../features/hrDashboard/pages/EmpDashboard/EmpDashboard";
import OnboardingDetails from "../features/employeeManagement/pages/OnboardingDetails";
import UserProfile from "../features/userProfile/pages/UserProfile";
import ChangePasswordPage from "../features/userProfile/pages/ChangePassword";
import EmployeeManagement from "../features/employeeManagement/pages/EmployeeManagement";
import UnauthorizedPage from "../components/UnauthorizedPage";
import EducationalBackground from "../features/employeeManagement/components/EducationalBackground";
import WorkExperience from "../features/employeeManagement/components/WorkExperience";
import CompanyManagement from "../features/companyManagement/pages/CompanyManagement";
import EditOnboardingDetails from "../features/employeeManagement/pages/EditOnboardingDetails";
import CompanyDetailsPage from "../features/companyManagement/pages/CompanyDetailsPage";

// Auth and Role Types
type UserRole = "Administrator" | "Human Resource" | "Regular Employee";

const isAuthenticated = () => {
  return Boolean(sessionStorage.getItem("token"));
};

const getUserRole = (): UserRole | null => {
  const userData = sessionStorage.getItem("user");
  return userData ? JSON.parse(userData).role : null;
};

// Route Guards
const PrivateRoute = () => {
  return isAuthenticated() ? <Outlet /> : <Navigate to="/login" replace />;
};

const RoleRoute = ({
  allowedRoles,
  redirectPath = "/unauthorized",
}: {
  allowedRoles: UserRole[];
  redirectPath?: string;
}) => {
  const role = getUserRole();

  if (!isAuthenticated()) {
    return <Navigate to="/login" replace />;
  }

  if (!role || !allowedRoles.includes(role)) {
    return <Navigate to={redirectPath} replace />;
  }

  return <Outlet />;
};

// Main Router Component
export const AppRoutes = () => {
  // Determine default route based on role
  const DefaultRedirect = () => {
    const role = getUserRole();

    if (role === "Regular Employee") {
      return <Navigate to="/employee-dashboard" replace />;
    }
    return <Navigate to="/hr-dashboard" replace />;
  };

  return (
    <BrowserRouter>
      <Routes>
        {/* Public Routes */}
        <Route path="/login" element={<Login />} />
        <Route path="/unauthorized" element={<UnauthorizedPage />} />

        {/* HR Admin Routes */}
        <Route
          element={
            <RoleRoute allowedRoles={["Administrator", "Human Resource"]} />
          }
        >
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
            <Route
              path="/employee-management"
              element={<EmployeeManagement />}
            />
            <Route
              path="/education-background"
              element={<EducationalBackground />}
            />
            <Route path="/work-experience" element={<WorkExperience />} />
            <Route path="/company-management" element={<CompanyManagement />} />
            <Route path="/profile" element={<UserProfile />} />
            <Route
              path="/profile/change-password"
              element={<ChangePasswordPage />}
            />
            <Route
              path="/employee/edit/:id"
              element={<EditOnboardingDetails />}
            />

            <Route path="/company/edit/:id" element={<CompanyDetailsPage />} />
          </Route>
        </Route>

        {/* Employee Routes */}
        <Route element={<RoleRoute allowedRoles={["Regular Employee"]} />}>
          <Route element={<EmpLayout />}>
            <Route path="/employee-dashboard" element={<EmpDashboard />} />
            <Route path="/profile" element={<UserProfile />} />
          </Route>
        </Route>

        {/* Common Authenticated Routes */}
        <Route element={<PrivateRoute />}>
          <Route path="/change-password" element={<ChangePasswordPage />} />
        </Route>

        {/* Redirects */}
        <Route path="/" element={<DefaultRedirect />} />
        <Route path="*" element={<Navigate to="/" replace />} />
      </Routes>
    </BrowserRouter>
  );
};
