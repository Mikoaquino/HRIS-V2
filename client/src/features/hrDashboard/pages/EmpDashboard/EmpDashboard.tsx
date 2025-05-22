import ProfileCard from './components/ProfileCard';
import AttendanceSummary from './components/AttendanceSummary.tsx';
import TimeCard from './components/TimeCard';
import Calendar from './components/Calendar.tsx';
import Announcement from './components/Announcement';
import Task from './components/Task';

export default function EmpDashboard() {

  return (
    <div className="bg-gray-50 min-h-screen p-4 font-sans">
      <div className="mb-4">
        <h5 className="text-gray-500 font-bold text-sm">HI, WELCOME BACK <span className="text-green-500">ADMIN!</span></h5>
      </div>

      <div className="grid lg:grid-cols-12 gap-6">

        {/* First parent container */}
        <div className="lg:col-span-9 space-y-6">

           {/* Profile Cards (first container) */}
          <div className="shadow-lg rounded-lg">
            <ProfileCard />
          </div>

          {/* Attendance & Announcement*/}
          <div className="grid grid-cols-12 gap-4">
            <div className="col-span-12 md:col-span-7 bg-white rounded-lg shadow-lg p-4 h-auto min-h-[160px]">
              <AttendanceSummary />
            </div>
            <div className="col-span-12 md:col-span-5 bg-white rounded-lg shadow-lg p-2 h-[190px]">
              <Announcement />
            </div>
          </div>

          {/* Timecard & Task */}
          <div className="grid grid-cols-12 gap-4">
            <div className="col-span-12 md:col-span-7 bg-white rounded-lg shadow-lg space-y-6 p-4 h-[220px]">
              <TimeCard />
            </div>
            <div className="col-span-12 md:col-span-5 bg-white rounded-lg shadow-lg p-6">
              <Task />
            </div>
          </div>
          
        </div>

        {/* Seconnd parent container */}
        <div className="lg:col-span-3 space-y-6">
          <div className="bg-white rounded-lg shadow-lg p-4">
            <Calendar />
          </div>
        </div>

      </div>
    </div>
  );
}
