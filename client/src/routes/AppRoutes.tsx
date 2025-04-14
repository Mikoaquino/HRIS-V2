import { Routes, Route } from "react-router-dom";
import Login from "../features/auth/pages/Login";

const AppRoutes = () => {
  return (
    <Routes>
      <Route path="/" element={<Login />} />
    </Routes>
  );
};

export default AppRoutes;
