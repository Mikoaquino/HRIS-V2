import { BrowserRouter, Routes, Route, Navigate, Outlet } from 'react-router-dom';
import HrDashboard from "../features/hrDashboard/pages/HrDashboard";
import Login from '../features/auth/pages/Login';
import AuditTrailPage from '../features/auditTrail/pages/AuditTrailPage';
import HrLayout from '../layout/HrLayout';
import AccountManagement from "../features/accountManagement/AccountManagement";
import EmpDashboard from "../features/hrDashboard/pages/EmpDashboard/EmpDashboard";

interface PrivateRouteProps {
  children?: React.ReactNode;
}

const isAuthenticated = () => {
  return Boolean(sessionStorage.getItem('token'));
};

const PrivateRoute = () => {
  return isAuthenticated() ? <Outlet /> : <Navigate to="/login" replace />;
};

export const AppRoutes = () => {
  return (
    <BrowserRouter>
      <Routes>
        {/* Public Route */}
        <Route path="/login" element={<Login />} />

        {/* Private Routes wrapper */}
        <Route element={<PrivateRoute />}>
          <Route element={<HrLayout />}>
            <Route path="/audit-trail" element={<AuditTrailPage />} />
            <Route path="/hr-dashboard" element={<HrDashboard />} />
            <Route path="/acc-management" element={<AccountManagement />} />
            {/* will change to the EmpLayout */}
            <Route path="/emp-dashboard" element={<EmpDashboard />} /> 
          </Route>
        </Route>

        {/* Redirects */}
        <Route path="/" element={<Navigate to="/audit-trail" replace />} />
        <Route path="*" element={<Navigate to="/audit-trail" replace />} />
      </Routes>
    </BrowserRouter>
  );
};
