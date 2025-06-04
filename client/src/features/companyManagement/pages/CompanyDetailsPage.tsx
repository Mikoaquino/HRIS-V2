import React from "react";
import EditCompanyDetail from "../components/EditCompanyDetail";
import DepartmentTable from "../components/DepartmentTable";
import BreadcrumbHeader from "../../../components/BreadcrumbHeader";

const CompanyDetailsPage: React.FC = () => {
  return (
    <div className="container mx-auto p-4 ">
      <BreadcrumbHeader title="COMPANY DETAILS" />
      <EditCompanyDetail />
      <BreadcrumbHeader title="DEPARTMENTS" />

      <DepartmentTable />
    </div>
  );
};

export default CompanyDetailsPage;
