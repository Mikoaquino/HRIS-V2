import { useState, useEffect } from 'react';
import { Coffee, LogOut } from 'lucide-react';

export default function TimeCard() {
  const [currentDate, setCurrentDate] = useState({ month: '', day: '' });

  useEffect(() => {
    const now = new Date();
    const month = new Intl.DateTimeFormat('en-US', {
      timeZone: 'Asia/Manila',
      month: 'short',
    }).format(now).toUpperCase();

    const day = new Intl.DateTimeFormat('en-US', {
      timeZone: 'Asia/Manila',
      day: '2-digit',
    }).format(now);

    setCurrentDate({ month, day });
  }, []);

  return (
    <div className="space-y-6 lg:col-span-3">
      {/* Header */}
      <div className="flex items-center mb-2">
        <div className="w-1 h-5 bg-teal-500 mr-2 rounded"></div>
        <h6 className="text-sm font-semibold text-gray-700 uppercase">Daily Time Report</h6>
      </div>
      
      <hr className="border-t border-gray-200 mb-4" />

      {/* Main content */}
      <div className="flex items-center justify-start space-x-6 mb-6 px-2">
        {/* Date */}
        <div className="flex flex-col items-center border-r border-gray-300 pr-4">
          <span className="text-red-500 font-medium text-sm">{currentDate.month}</span>
          <span className="text-2xl font-bold text-gray-900">{currentDate.day}</span>
        </div>

        {/* Buttons */}
        <div className="flex space-x-2">
          <button className="flex items-center justify-center gap-1 py-1.5 px-3 border border-yellow-400 text-yellow-700 rounded-md text-[10px] hover:bg-yellow-50">
            <Coffee size={14} />
            Start Break
          </button>
          <button className="flex items-center justify-center gap-1 py-1.5 px-3 bg-red-500 text-white rounded-md text-[10px] hover:bg-red-600">
            <LogOut size={14} />
            Clock Out
          </button>
        </div>
      </div>

      {/* Time Info */}
      <div className="grid grid-cols-4 gap-4 mb-4 ps-1">
        <div className="flex flex-col border-r border-gray-300 pr-2">
          <p className="text-xs text-gray-500 mb-0.5">Clock In</p>
          <p className="text-base font-bold text-gray-900">08:00 <span className="font-medium text-xs">AM</span></p>
        </div>
        <div className="flex flex-col border-r border-gray-300 pr-2">
          <p className="text-xs text-gray-500 mb-0.5">Breaks</p>
          <p className="text-base font-bold text-gray-900">00:30 <span className="font-medium text-xs">mins</span></p>
        </div>
        <div className="flex flex-col border-r border-gray-300 pr-2">
          <p className="text-xs text-gray-500 mb-0.5">Clocked Out</p>
          <p className="text-base font-bold text-gray-900">06:00 <span className="font-medium text-xs">PM</span></p>
        </div>
        {/* View Attendance */}
        <div className="flex flex-col justify-center">
          <button className="bg-teal-500 hover:bg-teal-600 text-white text-xs px-2 py-0.5 text-[11px] rounded-md">
            View Attendance
          </button>
        </div>
      </div>

      
    </div>
  );
}