import { ColumnDef } from "@tanstack/react-table";
import { Activity } from "../types/AuditTrail";
import {
  formatDateTime,
  formatDate,
  getActionBadge,
} from "../utils/formatters";

export const getAuditColumns = (): ColumnDef<Activity>[] => {
  return [
    {
      id: "dateTime",
      header: "Date & Time",
      cell: ({ row }) => {
        const { day, time } = formatDateTime(row.original.created_at);
        return (
          <div className="relative pl-20 flex items-center py-2">
            <div className="absolute left-10 top-1/2 -translate-y-1/2 w-4 h-4 rounded-full bg-white border-2 border-teal-400 z-10"></div>
            <div
              className="absolute left-12 h-full w-0.5 bg-gray-200"
              style={{ top: 0 }}
            ></div>
            <div className="text-center">
              <div className="font-medium">{day}</div>
              <div className="text-gray-500">{time}</div>
            </div>
          </div>
        );
      },
      size: 140,
    },
    {
      id: "logNumber",
      header: "Log Number",
      cell: ({ row }) => (
        <div className="text-gray-500 ">
          LOG #{String(row.original.id).padStart(5, "0")}
        </div>
      ),
      size: 120,
      meta: {
        className: "border-l-2 border-b-2 border-t-2 border-gray-200 p-2",
      },
    },
    {
      id: "user",
      header: "User",
      cell: ({ row }) => (
        <div className="flex items-center">
          <div className="w-10 h-10 rounded-full bg-gray-200 flex justify-center items-center mr-20">
            <span className="text-gray-500">👤</span>
          </div>
          <div className="text-center">
            <div className="font-medium">{row.original.user_name}</div>
            <div className="text-gray-500 text-sm">
              {row.original.user_role}
            </div>
          </div>
        </div>
      ),
      size: 180,
      meta: {
        className: "border-b-2 border-gray-200 border-t-2 p-2",
      },
    },
    {
      id: "action",
      header: "Action",
      cell: ({ row }) => {
        const { event, log_name } = row.original;
        const badge = getActionBadge(event, log_name);
        const badgeColor = badge?.color || "bg-gray-100 text-gray-800";
        const badgeText = badge?.text || event;
        const badgeIcon = badge?.icon || "";

        return (
          <div
            className={`inline-flex items-center px-2.5 py-1 w-2/3 justify-center rounded-lg text-xs font-medium ${badgeColor}`}
          >
            {badgeIcon} <span className="ml-1">{badgeText}</span>
          </div>
        );
      },
      size: 150,
      meta: {
        className: "border-b-2 border-gray-200 border-t-2 p-2",
      },
    },
    {
      id: "description",
      header: "Description",
      cell: ({ row }) => (
        <div className="text-gray-700">{row.original.description}</div>
      ),
      size: 300,
      meta: {
        className: "border-b-2 border-gray-200 border-t-2 p-2",
      },
    },
    {
      id: "date",
      header: "Date",
      cell: ({ row }) => (
        <div className="text-gray-500">
          {formatDate(row.original.created_at)}
        </div>
      ),
      size: 120,
      meta: {
        className: "border-b-2 border-r-2 border-gray-300 border-t-2 p-2",
      },
    },
  ];
};
