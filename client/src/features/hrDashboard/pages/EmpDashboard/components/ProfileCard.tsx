import { Clock, CalendarCheck2, Wallet } from "lucide-react";
import ProfileCardItem from "./ProfileCardItem";

export default function ProfileCard() {
  return (
    <div className="flex flex-col xl:flex-row rounded-lg bg-white overflow-hidden">
      <ProfileCardItem
        icon={<Clock size={20} className="text-white" />}
        iconBg="bg-teal-500"
        title="Hours Worked"
        subtitle1={
          <>
            <b>Last Month:</b> 160 hours
          </>
        }
        subtitle2={
          <>
            <b>This Month:</b> 20 hours
          </>
        }
      />
      <div className="border-l text-gray-100"></div>
      <ProfileCardItem
        icon={<CalendarCheck2 size={20} className="text-white" />}
        iconBg="bg-yellow-400"
        title="Leaves Balance"
        subtitle1={
          <>
            <b>Vacation:</b> 5 days
          </>
        }
        subtitle2={
          <>
            <b>Sick Leave:</b> 5 days
          </>
        }
      />
      <div className="border-l text-gray-100"></div>
      <ProfileCardItem
        icon={<Wallet size={20} className="text-white" />}
        iconBg="bg-pink-500"
        title="Next Payslip"
        subtitle1={
          <>
            <b>Next Pay Date:</b>
          </>
        }
        subtitle2="April 30, 2025"
      />
    </div>
  );
}
