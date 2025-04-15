import React from "react";

interface BreadcrumbHeaderProps {
  title: string;
}

const BreadcrumbHeader: React.FC<BreadcrumbHeaderProps> = ({ title }) => {
  return (
    <div className="flex justify-between items-center mb-6">
      <div className="left-content">
        <span className="text-[#323251] font-medium text-[18px] indent-[-1px] leading-[2] relative mb-5">
          {title}
        </span>
      </div>
    </div>
  );
};

export default BreadcrumbHeader;
