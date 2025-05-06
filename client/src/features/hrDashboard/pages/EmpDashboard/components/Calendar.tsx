import { useState } from 'react';
import {
  startOfMonth,
  endOfMonth,
  startOfWeek,
  endOfWeek,
  addDays,
  format,
  isSameMonth,
  isSameDay,
  addMonths,
  subMonths
} from 'date-fns';

interface Holiday {
  date: string;
  name: string;
  type: 'regular' | 'special' | 'observance';
}

const holidays: Holiday[] = [
  { date: '2025-01-01', name: "New Year's Day", type: 'regular' },
  { date: '2025-01-23', name: 'First Philippine Republic Day', type: 'special' },
  { date: '2025-01-29', name: 'Lunar New Year’s Day', type: 'special' },
  { date: '2025-02-25', name: 'People Power Anniversary', type: 'observance' },
  { date: '2025-03-02', name: 'Ramadan Start', type: 'observance' },
  { date: '2025-03-31', name: 'Eidul-Fitr', type: 'observance' },
  { date: '2025-04-01', name: 'Eidul-Fitr Holiday', type: 'regular' },
  { date: '2025-04-09', name: 'Araw ng Kagitingan', type: 'regular' },
  { date: '2025-04-17', name: 'Maundy Thursday', type: 'regular' },
  { date: '2025-04-18', name: 'Good Friday', type: 'regular' },
  { date: '2025-04-19', name: 'Black Saturday', type: 'special' },
  { date: '2025-04-20', name: 'Easter Sunday', type: 'observance' },
  { date: '2025-05-01', name: 'Labor Day', type: 'regular' },
  { date: '2025-06-07', name: 'Eid al-Adha (Tentative)', type: 'regular' },
  { date: '2025-06-08', name: 'Eid al-Adha Day 2 (Tentative)', type: 'regular' },
  { date: '2025-06-12', name: 'Independence Day', type: 'regular' },
  { date: '2025-06-27', name: 'Amun Jadid (Tentative)', type: 'observance' },
  { date: '2025-08-21', name: 'Ninoy Aquino Day', type: 'special' },
  { date: '2025-08-25', name: 'National Heroes Day', type: 'regular' },
  { date: '2025-09-03', name: 'Yamashita Surrender Day', type: 'special' },
  { date: '2025-09-05', name: 'Maulid un-Nabi (Tentative)', type: 'observance' },
  { date: '2025-09-08', name: 'Feast of the Nativity of Mary', type: 'special' },
  { date: '2025-10-31', name: 'Special non-working Day', type: 'special' },
  { date: '2025-11-01', name: 'All Saints Day', type: 'special' },
  { date: '2025-11-02', name: 'All Souls Day', type: 'observance' },
  { date: '2025-11-30', name: 'Bonifacio Day', type: 'regular' },
  { date: '2025-12-08', name: 'Feast of the Immaculate Conception', type: 'special' },
  { date: '2025-12-24', name: 'Christmas Eve', type: 'special' },
  { date: '2025-12-25', name: 'Christmas Day', type: 'regular' },
  { date: '2025-12-30', name: 'Rizal Day', type: 'regular' },
  { date: '2025-12-31', name: 'New Year’s Eve', type: 'special' },
];

const daysOfWeek = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];

function generateCalendar(currentDate: Date): Date[][] {
  const startMonth = startOfMonth(currentDate);
  const endMonth = endOfMonth(currentDate);
  const startDate = startOfWeek(startMonth, { weekStartsOn: 1 });
  const endDate = endOfWeek(endMonth, { weekStartsOn: 1 });

  const weeks: Date[][] = [];
  let day = startDate;
  let week: Date[] = [];

  while (day <= endDate) {
    for (let i = 0; i < 7; i++) {
      week.push(day);
      day = addDays(day, 1);
    }
    weeks.push(week);
    week = [];
  }

  return weeks;
}

function getDayStyle(date: Date, currentDate: Date, holidays: Holiday[]): string {
  const dateStr = format(date, 'yyyy-MM-dd');
  const holiday = holidays.find(h => h.date === dateStr);

  if (isSameDay(date, new Date())) {
    return 'bg-gray-500 text-white';
  }

  if (holiday) {
    if (holiday.type === 'regular') {
      return 'bg-red-400 text-white';
    } else if (holiday.type === 'special') {
      return 'bg-green-400 text-white';
    } else if (holiday.type === 'observance') {
      return 'bg-blue-500 text-white';
    }
  }
  
  return isSameMonth(date, currentDate) ? 'text-gray-700' : 'text-gray-300';
}

export default function Calendar() {
  const [currentDate, setCurrentDate] = useState(new Date());
  const weeks = generateCalendar(currentDate);

  // Filter holidays for the current month
  const currentMonthHolidays = holidays.filter(holiday =>
    isSameMonth(new Date(holiday.date), currentDate)
  );

  // Count holidays by type
  const regularHolidaysCount = currentMonthHolidays.filter(h => h.type === 'regular').length;
  const specialHolidaysCount = currentMonthHolidays.filter(h => h.type === 'special').length;
  const observanceHolidaysCount = currentMonthHolidays.filter(h => h.type === 'observance').length;

  return (
    <div className="space-y-6 lg:col-span-3">
      {/* Calendar Header */}
      <div className="">
        <div className="flex items-center justify-between mb-2 px-2 pb-2">
          <h6 className="text-green-500 font-medium text-xl">
          {format(currentDate, 'MMMM yyyy')}
          </h6>
          {/* Arrows */}
          <div className="flex items-center space-x-2">
          <button onClick={() => setCurrentDate(subMonths(currentDate, 1))}>
            <span className="text-gray-400 hover:text-black text-sm">&lt;</span>
          </button>
          <button onClick={() => setCurrentDate(addMonths(currentDate, 1))}>
            <span className="text-gray-400 hover:text-black text-sm">&gt;</span>
          </button>
          </div>
        </div>

        {/* Days of Week */}
        <div className="grid grid-cols-7 gap-1 mb-2">
          {daysOfWeek.map(day => (
          <div key={day} className="text-center py-1 text-[10px] font-medium text-gray-500">
            {day}
          </div>
          ))}
        </div>

        {/* Calendar Days */}
        {weeks.map((week, weekIndex) => (
          <div key={weekIndex} className="grid grid-cols-7 gap-1 mb-1">
          {week.map((date, dateIndex) => (
            <div
            key={dateIndex}
            className={`h-6 w-6 rounded-full flex items-center justify-center text-[10px] ${getDayStyle(date, currentDate, holidays)}`}
            >
            {format(date, 'd')}
            </div>
          ))}
          </div>
        ))}
        </div>

        {/* Legend */}
        <div className="text-xs">
        <h6 className="text-xs font-semibold text-gray-500 mb-2">
          FOR THIS MONTH
        </h6>
        <div className="space-y-1">
          <div className="flex items-center space-x-2">
          <div className="w-3 h-3 rounded-full bg-red-400"></div>
          <span>{regularHolidaysCount} Public Holidays </span>
          </div>
          <div className="flex items-center space-x-2">
          <div className="w-3 h-3 rounded-full bg-yellow-400"></div>
          <span>0 Company Events </span>
          </div>
          <div className="flex items-center space-x-2">
          <div className="w-3 h-3 rounded-full bg-green-400"></div>
          <span>{specialHolidaysCount} Special Non-working Holidays </span>
          </div>
          <div className="flex items-center space-x-2">
          <div className="w-3 h-3 rounded-full bg-blue-500"></div>
          <span>{observanceHolidaysCount} Observances</span>
          </div>
        </div>
      </div>
    </div>
  );
}
