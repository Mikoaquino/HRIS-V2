import { useState } from "react";

export default function AttendanceSummaryCard() {
  const [attendanceData] = useState({
    absent: 8,
    present: 48,
    onLeave: 6,
    sickLeave: 3,
  });

  const total =
    attendanceData.absent +
    attendanceData.present +
    attendanceData.onLeave +
    attendanceData.sickLeave;

  // Calculate percentage widths for the bars
  const getPercentage = (value: number) => {
    return `${(value / total) * 100}%`;
  };

  return (
    <div>
      <h2 className="text-lg font-semibold text-gray-700 mb-4">
        Today's Attendance Summary
      </h2>

      {/* Progress bars */}
      <div className="flex mb-4">
        <div
          className="h-2 bg-teal-800 rounded-l-full"
          style={{ width: getPercentage(attendanceData.absent) }}
        />
        <div
          className="h-2 bg-teal-400"
          style={{ width: getPercentage(attendanceData.present) }}
        />
        <div
          className="h-2 bg-red-400"
          style={{ width: getPercentage(attendanceData.onLeave) }}
        />
        <div
          className="h-2 bg-gray-300 rounded-r-full"
          style={{ width: getPercentage(attendanceData.sickLeave) }}
        />
      </div>

      {/* Legend with Numbers Below */}
      <div className="grid grid-cols-4 gap-2 text-sm text-center">
        <div>
          <div className="flex justify-center items-center gap-2 mb-1">
            <div className="w-2 h-2 rounded-full bg-teal-800"></div>
            <span className="text-gray-700 text-xs text-[0.625rem]">
              Absent
            </span>
          </div>
          <p className="text-2xl font-bold text-gray-700">
            {attendanceData.absent}
          </p>
        </div>
        <div>
          <div className="flex justify-center items-center gap-2 mb-1">
            <div className="w-2 h-2 rounded-full bg-teal-400"></div>
            <span className="text-gray-700 text-[0.625rem] whitespace-nowrap">
              {" "}
              Present
            </span>
          </div>
          <p className="text-2xl font-bold text-gray-700">
            {attendanceData.present}
          </p>
        </div>
        <div>
          <div className="flex justify-center items-center gap-2 mb-1">
            <div className="w-2 h-2 rounded-full bg-red-400"></div>
            <span className="text-gray-700 text-[0.625rem] whitespace-nowrap">
              On Leave
            </span>
          </div>
          <p className="text-2xl font-bold text-gray-700">
            {attendanceData.onLeave}
          </p>
        </div>
        <div>
          <div className="flex justify-center items-center gap-2 mb-1">
            <div className="w-2 h-2 rounded-full bg-gray-300"></div>
            <span className="text-gray-700 text-[0.625rem] whitespace-nowrap">
              Sick Leave
            </span>
          </div>
          <p className="text-2xl font-bold text-gray-700">
            {attendanceData.sickLeave}
          </p>
        </div>
      </div>
    </div>
  );
}
