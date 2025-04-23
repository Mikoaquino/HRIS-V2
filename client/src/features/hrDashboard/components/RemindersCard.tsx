interface ReminderItem {
  text: string;
  subtext?: string;
  timeLabel: string;
  isUrgent: boolean;
  isCompleted?: boolean;
}

interface RemindersCardProps {
  reminders?: ReminderItem[];
  className?: string;
}

export default function RemindersCard({
  reminders = [
    {
      text: "Next Payslips",
      subtext: "Distribute upcoming payslips",
      timeLabel: "Today",
      isUrgent: true,
    },
    {
      text: "sharing the information with clients or stakeholders.",
      timeLabel: "Today",
      isUrgent: true,
    },
    {
      text: "Hearing the information and responding.",
      timeLabel: "22 hrs",
      isUrgent: true,
    },
    {
      text: "Setting up and customizing your own sales.",
      timeLabel: "1 Day",
      isUrgent: false,
    },
    {
      text: "To have a complete 360° overview of sales information, having.",
      timeLabel: "2 Days",
      isUrgent: false,
      isCompleted: true,
    },
  ],
  className = "",
}: RemindersCardProps) {
  return (
    <div className={`bg-white rounded-lg shadow ${className}`}>
      <div className="p-4">
        <h3 className="relative font-semibold text-sm before:content-[''] before:absolute before:w-[3px] before:h-[16px] before:bg-[var(--primary-bg-color)] before:left-[11px] before:top-[21px] before:block">
          REMINDERS
        </h3>
      </div>

      <div className="p-2">
        <div>
          {reminders.map((reminder, index) => (
            <label
              key={index}
              className={`p-2 ${index > 0 ? "mt-2" : ""} flex items-center`}
            >
              <span className="flex items-center ml-2">
                <input
                  type="checkbox"
                  defaultChecked={reminder.isCompleted}
                  className="form-checkbox h-4 w-4"
                />
              </span>
              <span className="mx-3 my-auto text-sm">
                {reminder.text}
                {reminder.subtext && (
                  <>
                    <br />
                    <span className="text-xs">{reminder.subtext}</span>
                  </>
                )}
              </span>
              <span className="ml-auto">
                <span
                  className={`${
                    reminder.isUrgent
                      ? "bg-blue-600 text-white"
                      : "bg-gray-200 text-gray-700"
                  } px-2 py-1 text-xs font-semibold rounded mr-2 whitespace-nowrap`}
                >
                  {reminder.timeLabel}
                </span>
              </span>
            </label>
          ))}
        </div>
      </div>
    </div>
  );
}
