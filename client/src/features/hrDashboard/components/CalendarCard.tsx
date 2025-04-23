import { useState } from "react";
import { ChevronLeft, ChevronRight } from "lucide-react";

export default function CalendarCard() {
  const weekdays = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"];

  const [currentDate, setCurrentDate] = useState(new Date());
  const [selectedDate, setSelectedDate] = useState(new Date().getDate());

  const currentMonth = currentDate.toLocaleString("default", { month: "long" });
  const currentYear = currentDate.getFullYear();

  const daysInMonth = new Date(
    currentYear,
    currentDate.getMonth() + 1,
    0
  ).getDate();
  const firstDayOfMonth = new Date(
    currentYear,
    currentDate.getMonth(),
    1
  ).getDay();
  const startDay = firstDayOfMonth > 0 ? firstDayOfMonth - 1 : 6; // Adjust to make Monday first day

  const getPreviousMonth = () => {
    setCurrentDate(new Date(currentYear, currentDate.getMonth() - 1, 1));
    setSelectedDate(null);
  };

  const getNextMonth = () => {
    setCurrentDate(new Date(currentYear, currentDate.getMonth() + 1, 1));
    setSelectedDate(null);
  };

  // Date selection function
  const selectDate = (day: Date): void => {
    setSelectedDate(day);
  };

  // Generate calendar grid
  const generateCalendarGrid = () => {
    const grid = [];
    let day = 1;

    for (let i = 0; i < 6; i++) {
      const week = [];

      for (let j = 0; j < 7; j++) {
        if (i === 0 && j < startDay) {
          week.push(
            <td key={`empty-${i}-${j}`} className="text-center p-1"></td>
          );
        } else if (day > daysInMonth) {
          week.push(
            <td key={`empty-end-${i}-${j}`} className="text-center p-1"></td>
          );
        } else {
          week.push(
            <td key={`day-${day}`} className="text-center p-1">
              <button
                onClick={() => selectDate(day)}
                className={`p-1 flex items-center justify-center ${
                  day === selectedDate
                    ? "bg-blue-500 text-white rounded-full"
                    : "text-gray-800"
                }`}
                style={{ width: "32px", height: "32px" }}
              >
                {day}
              </button>
            </td>
          );
          day++;
        }
      }

      grid.push(<tr key={`week-${i}`}>{week}</tr>);
      if (day > daysInMonth) break;
    }

    return grid;
  };

  return (
    <div>
      <div className="bg-white border-0 flex justify-between items-center p-3">
        <button onClick={getPreviousMonth} className="text-gray-500 p-0">
          <ChevronLeft size={16} />
        </button>
        <h5 className="mb-0">
          {currentMonth} {currentYear}
        </h5>
        <button onClick={getNextMonth} className="text-gray-500 p-0">
          <ChevronRight size={16} />
        </button>
      </div>
      <div className="p-3">
        <table className="w-full">
          <thead>
            <tr>
              {weekdays.map((day) => (
                <th
                  key={day}
                  className="text-center text-gray-500 font-normal p-1"
                >
                  {day}
                </th>
              ))}
            </tr>
          </thead>
          <tbody>{generateCalendarGrid()}</tbody>
        </table>
      </div>
    </div>
  );
}
