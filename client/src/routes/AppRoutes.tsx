import { Routes, Route } from "react-router-dom";
import Login from "../features/auth/pages/Login";
import AuditTrailPage from "../features/auditTrail/pages/AuditTrailPage";
import HrDashboard from "../features/hrDashboard/pages/HrDashboard";
import HrLayout from "../layout/HrLayout";

const AppRoutes = () => {
  return (
    <Routes>
      {/* Public route */}
      <Route path="/" element={<Login />} />

      {/* HR routes */}
      <Route element={<HrLayout />}>
        <Route path="/audit-trail" element={<AuditTrailPage />} />
        <Route path="/hr-dashboard" element={<HrDashboard />} />
      </Route>
    </Routes>
  );
};

export default AppRoutes;
