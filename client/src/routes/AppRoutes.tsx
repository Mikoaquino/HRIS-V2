import { BrowserRouter, Routes, Route, Navigate, Outlet } from 'react-router-dom';

// Import pages
import HrDashboard from "../features/hrDashboard/pages/HrDashboard";
import Login from '../features/auth/pages/Login';
import AuditTrailPage from '../features/auditTrail/pages/AuditTrailPage';
import Onboarding from '../features/employeeManagement/pages/onboarding'; // ✅ Make sure this is the correct import

// Import layout
import HrLayout from '../layout/HrLayout';

// Authentication check
const isAuthenticated = () => {
  return Boolean(sessionStorage.getItem('token'));
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
            <Route path="/audit-trail" element={<AuditTrailPage />} />
            <Route path="/hr-dashboard" element={<HrDashboard />} />
            <Route path="/onboarding" element={<Onboarding />} /> {/* ✅ ADDED onboarding route */}
          </Route>
        </Route>

        {/* Redirects */}
        <Route path="/" element={<Navigate to="/audit-trail" replace />} />
        <Route path="*" element={<Navigate to="/audit-trail" replace />} />
      </Routes>
    </BrowserRouter>
  );
};
