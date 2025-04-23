export default function DailyTimeRecordCard() {
  const timeRecords = [
    { name: "John Doe", timeIn: "08:00 AM", timeOut: "05:00 PM" },
    { name: "Jane Smith", timeIn: "08:30 AM", timeOut: "05:30 PM" },
    { name: "Alex Johnson", timeIn: "09:00 AM", timeOut: "06:00 PM" },
  ];

  return (
    <div className="rounded-lg  shadow-sm bg-white overflow-hidden p-8">
      <div className="text-center p-3 ">
        <div className="flex items-center justify-center">
          <div className="h-4 w-4 rounded-full bg-red-500 mr-2"></div>
          <span className="font-semibold">
            <span className="text-red-500">LIVE </span>
            <span className="font-bold text-md">Daily Time Record</span>
          </span>
        </div>
      </div>
      <div className="p-4">
        <div className="overflow-hidden">
          <table className="w-full mx-5 text-xs">
            <thead>
              <tr className="text-left">
                <th className="pb-2">Employee</th>
                <th className="pb-2">Time In</th>
                <th className="pb-2">Time Out</th>
              </tr>
            </thead>
            <tbody>
              {timeRecords.map((record, index) => (
                <tr key={index}>
                  <td className="py-2">{record.name}</td>
                  <td className="py-2">{record.timeIn}</td>
                  <td className="py-2">{record.timeOut}</td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
        <div className="text-right mt-3">
          <a
            href="#"
            className="text-blue-500 font-bold border-b-2 border-blue-500 pb-1 text-xs"
          >
            View Full Details
          </a>
        </div>
      </div>
    </div>
  );
}
