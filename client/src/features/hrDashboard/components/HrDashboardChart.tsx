import { useState } from "react";
import {
  BarChart,
  Bar,
  XAxis,
  YAxis,
  CartesianGrid,
  Tooltip,
  ResponsiveContainer,
  LabelList,
} from "recharts";

const HrDashboardChart = () => {
  const absenceData = [
    { month: "Jan", present: 10, absent: 2, total: 12 },
    { month: "Feb", present: 12, absent: 6, total: 18 },
    { month: "Mar", present: 14, absent: 4, total: 18 },
    { month: "Apr", present: 11, absent: 2, total: 13 },
    { month: "May", present: 8, absent: 3, total: 11 },
    { month: "Jun", present: 11, absent: 3, total: 14 },
    { month: "Jul", present: 12, absent: 1, total: 13 },
    { month: "Aug", present: 14, absent: 6, total: 20 },
    { month: "Sep", present: 13, absent: 1, total: 14 },
    { month: "Oct", present: 11, absent: 0, total: 11 },
    { month: "Nov", present: 10, absent: 1, total: 11 },
    { month: "Dec", present: 14, absent: 2, total: 16 },
  ];

  const barColors = [
    "#4EC6B0",
    "#FF6E6E",
    "#FFCC33",
    "#2ED598",
    "#227C9D",
    "#EE526B",
    "#F89472",
    "#66CCAA",
    "#8A8CEC",
    "#F9A13A",
    "#E8C1D2",
    "#808C99",
  ];

  const [activeTab, setActiveTab] = useState("absence");

  const CustomTooltip = ({ active, payload, label }) => {
    if (active && payload && payload.length) {
      const data = payload[0].payload;
      const month = label;
      const totalValue = data.total;

      const highestValue = Math.max(...absenceData.map((item) => item.total));
      const isHighest = totalValue === highestValue;

      return (
        <div className="bg-gray-800 text-white p-2 rounded shadow">
          <p className="font-semibold">{month}</p>
          <p>Present: {data.present}</p>
          <p>Absent: {data.absent}</p>
          <p className="font-bold border-t border-gray-600 pt-1 mt-1">
            Total: {totalValue}
          </p>
          {isHighest && (
            <p className="text-teal-300 font-bold">Highest Month</p>
          )}
        </div>
      );
    }
    return null;
  };

  const renderCustomizedLabel = (props) => {
    const { x, y, width, value, index } = props;
    const highestValue = Math.max(...absenceData.map((item) => item.total));

    if (value === highestValue) {
      return (
        <g>
          <rect
            x={x + width / 2 - 12}
            y={y - 30}
            width="24"
            height="20"
            fill="#1e2a5a"
            rx="4"
          />
          <text
            x={x + width / 2}
            y={y - 16}
            fill="#fff"
            textAnchor="middle"
            dominantBaseline="middle"
            fontSize="12"
          >
            {value}
          </text>
          <polygon
            points={`${x + width / 2 - 5},${y - 10} ${x + width / 2 + 5},${
              y - 10
            } ${x + width / 2},${y - 5}`}
            fill="#1e2a5a"
          />
        </g>
      );
    }
    return null;
  };

  return (
    <div className="bg-white p-4 rounded-lg shadow">
      <div className="flex justify-between items-center mb-4">
        <h3 className="text-gray-800 font-semibold text-sm">KEY METRICS</h3>
        <div className="flex">
          <button className="px-3 py-1 text-sm bg-transparent border border-gray-300 rounded-l">
            Week
          </button>
          <button className="px-3 py-1 text-sm bg-gray-100 border border-gray-300">
            Month
          </button>
          <button className="px-3 py-1 text-sm bg-transparent border border-gray-300 rounded-r">
            Year
          </button>
        </div>
      </div>

      <div className="mb-4 ">
        <div className="flex">
          <button
            className={`px-4 py-2 ${
              activeTab === "satisfaction"
                ? "border-b-2 border-teal-500 text-teal-500 font-bold"
                : "text-gray-600"
            }`}
            onClick={() => setActiveTab("satisfaction")}
          >
            Employee Satisfaction
          </button>
          <button
            className={`px-4 py-2 ${
              activeTab === "absence"
                ? "border-b-2 border-teal-500 text-teal-500 font-bold"
                : "text-gray-600"
            }`}
            onClick={() => setActiveTab("absence")}
          >
            Absence Rate
          </button>
          <button
            className={`px-4 py-2 ${
              activeTab === "training"
                ? "border-b-2 border-teal-500 text-teal-500 font-bold"
                : "text-gray-600"
            }`}
            onClick={() => setActiveTab("training")}
          >
            Training Completion
          </button>
        </div>
      </div>

      <div className="h-64 w-full">
        {activeTab === "absence" ? (
          <ResponsiveContainer width="100%" height="100%">
            <BarChart
              data={absenceData}
              margin={{ top: 20, right: 15, left: 15, bottom: 5 }}
            >
              <CartesianGrid
                strokeDasharray="3 3"
                vertical={false}
                stroke="#f0f0f0"
              />
              <XAxis
                dataKey="month"
                axisLine={false}
                tickLine={false}
                tick={{ fill: "#888", fontSize: 12 }}
              />
              <YAxis
                axisLine={false}
                tickLine={false}
                tick={{ fill: "#888", fontSize: 12 }}
                ticks={[0, 4, 8, 12, 16, 20]}
              />
              <Tooltip content={<CustomTooltip />} />
              <Bar dataKey="total" fill="transparent" />
              <Bar
                dataKey="present"
                stackId="a"
                fill="#4EC6B0"
                radius={[4, 4, 0, 0]}
                shape={(props) => {
                  const { x, y, width, height, index } = props;
                  return (
                    <rect
                      x={x}
                      y={y}
                      width={width}
                      height={height}
                      fill={barColors[index % barColors.length]}
                      rx={4}
                      ry={4}
                    />
                  );
                }}
              >
                <LabelList dataKey="total" content={renderCustomizedLabel} />
              </Bar>
              <Bar
                dataKey="absent"
                stackId="a"
                fill="#e0e0ff"
                radius={[4, 4, 0, 0]}
              />
            </BarChart>
          </ResponsiveContainer>
        ) : (
          <div className="h-full flex items-center justify-center">
            <p className="text-gray-500">
              {activeTab === "satisfaction"
                ? "Employee Satisfaction"
                : "Training Completion"}{" "}
              data will appear here
            </p>
          </div>
        )}
      </div>
    </div>
  );
};

export default HrDashboardChart;
