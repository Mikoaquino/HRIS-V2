import React from 'react';

interface ProfileCardProps {
  icon: React.ReactNode;
  iconBg: string;
  title: string;
  subtitle1: React.ReactNode;
  subtitle2?: React.ReactNode;
}

export default function ProfileCardItem({
  icon,
  iconBg,
  title,
  subtitle1,
  subtitle2,
}: ProfileCardProps) {
  return (
    <div className="flex flex-1 items-center gap-4 px-6 py-5 h-[100px]">
      <div className={`flex items-center justify-center w-10 h-10 rounded-full ${iconBg}`}>
        {icon}
      </div>
      <div className="space-y-1 text-xs">
        <h3 className="font-semibold text-gray-900">{title}</h3>
        <p className="text-gray-700">{subtitle1}</p>
        {subtitle2 && (
          <p className="text-gray-700">{subtitle2}</p>
        )}
      </div>
    </div>
  );
}
