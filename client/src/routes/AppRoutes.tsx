import { Routes, Route } from "react-router-dom";
import Login from "../features/auth/pages/Login";
import AuditTrailPage from "../features/auditTrail/pages/AuditTrailPage";
import HrLayout from "../layout/HrLayout";

const AppRoutes = () => {
  return (
    <Routes>
      <Route path="/" element={<Login />} />
      <Route
        path="/audit-trail"
        element={
          <HrLayout>
            <AuditTrailPage />
          </HrLayout>
        }
      />
    </Routes>
  );
};

export default AppRoutes;
