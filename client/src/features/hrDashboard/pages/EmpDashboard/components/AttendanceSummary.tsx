import { useState } from 'react';

// Dot indicator component for the legend
const StatusDot = ({ color }: { color: string }) => (
  <div className={`h-3 w-3 rounded-full ${color}`}></div>
);

export default function AttendanceSummary() {
  // Attendance data
  const [attendanceData] = useState([
    { label: 'Absent', value: 8, color: 'bg-emerald-800' },
    { label: 'Present', value: 48, color: 'bg-blue-300' },
    { label: 'On leave', value: 6, color: 'bg-amber-700' },
    { label: 'Sick Leave', value: 3, color: 'bg-gray-300' }
  ]);

  return (
    <>
      <h2 className="text-xl md:text-xl font-medium text-gray-700 mb-4">Attendance Summary</h2>
      
      {/* Progress bars */}
      <div className="flex h-2 mb-6 w-full overflow-hidden rouded-full">
        {attendanceData.map((item, index) => (
          <div 
            key={index}
            className={`${item.color}`}
            style={{ 
              width: `${(item.value / attendanceData.reduce((sum, item) => sum + item.value, 0)) * 100}%` 
            }}
          />
        ))}
      </div>
      
      {/* Legend with values */}
      <div className="grid grid-cols-2 sm:grid-cols-4 gap-4">
        {attendanceData.map((item, index) => (
          <div key={index} className="flex flex-col items-center">
            <div className="flex items-center gap-2 mb-1">
              <StatusDot color={item.color} />
              <span className="text-sm text-gray-600">{item.label}</span>
            </div>
            <span className="text-xl font-bold">{item.value}</span>
          </div>
        ))}
      </div>
    </>
  );
}