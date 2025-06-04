import React from "react";

interface ActionItemProps {
  icon: React.ReactNode;
  color: string;
  label: string;
  onClick: () => void;
}

const ActionItem: React.FC<ActionItemProps> = ({
  icon,
  color,
  label,
  onClick,
}) => {
  const colorClasses = {
    teal: "text-teal-600 hover:bg-teal-50",
    red: "text-red-600 hover:bg-red-50",
    blue: "text-blue-600 hover:bg-blue-50",
  };

  return (
    <button
      onClick={onClick}
      className={`flex items-center w-full px-4 py-2 text-sm ${
        colorClasses[color as keyof typeof colorClasses]
      }`}
    >
      <span className="mr-2">{icon}</span>
      {label}
    </button>
  );
};

export default ActionItem;
