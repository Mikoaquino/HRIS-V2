interface TaskItem {
  title: string;
  description: string;
  time: string;
  checked?: boolean;
}

const tasks: TaskItem[] = [ // For static design only, will change to dynamic if there's api available
  {
    title: "Next Payslips Uploading",
    description: "Distribute upcoming payslips",
    time: "Today",
  },
  {
    title: "Performance Evaluations",
    description: "5 evaluations pending",
    time: "Today",
  },
  {
    title: "Quarterly Reports Submission",
    description: "Prepare and upload financial reports",
    time: "22 hrs",
  },
  {
    title: "Training Session for New Hires",
    description: "Mandatory orientation for new employees",
    time: "1 Day",
  },
  {
    title: "Monthly Team Meeting",
    description: "Mandatory orientation for new employees",
    time: "2 Days",
    checked: true,
  },
];

const getTimeColor = (time: string) => {
  if (time === "Today") return "bg-teal-500 text-white";
  if (time.includes("hr")) return "bg-teal-500 text-white";
  if (time.includes("Day")) return "bg-gray-100 text-gray-600";
  return "bg-gray-100 text-gray-600";
};

export default function Task() {
  return (
    <div className="col-span-12 md:col-span-5">
      <div className="flex items-center mb-4"> 
        <div className="w-1 h-4 bg-teal-500 mr-1"></div>
        <h6 className="text-sm font-semibold  text-gray-800">UPCOMING</h6>
      </div>
      <div className="space-y-3 text-xs">
        {tasks.map((task, index) => (
          <div
            key={index}
            className="flex items-start gap-2 border-b border-gray-100 pb-3"
          >
            <input type="checkbox" className="mt-1" defaultChecked={task.checked} />
            <div className="flex-1">
              <h6 className="text-xs">{task.title}</h6>
              <p className="text-xs text-gray-500">{task.description}</p>
            </div>
            <div
              className={`text-xs font-medium px-2 py-1 rounded ${getTimeColor(
                task.time
              )}`}
            >
              {task.time}
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}
