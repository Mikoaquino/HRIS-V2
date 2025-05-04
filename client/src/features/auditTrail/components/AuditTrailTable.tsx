import React, { useEffect, useState } from "react";
import axios from "axios";
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
import {
  useReactTable,
  getCoreRowModel,
  getPaginationRowModel,
  ColumnDef,
  flexRender,
} from "@tanstack/react-table";

const API_BASE_URL = "http://127.0.0.1:8000";

interface AuditTrailTableProps {
  token: string;
}
interface Causer {
  id: number;
  first_name: string;
  last_name: string;
}
interface Activity {
  id: number;
  event: string;
  log_name: string;
  description: string;
  causer: Causer | null;
  created_at: string;
  updated_at: string;
}

const formatDateTime = (dateString: string): { day: string; time: string } => {
  const date = new Date(dateString);
  const days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  const day = days[date.getDay()];

  const hours = date.getHours().toString().padStart(2, "0");
  const minutes = date.getMinutes().toString().padStart(2, "0");

  return {
    day,
    time: `${hours}:${minutes}`,
  };
};

const formatDate = (dateString: string): string => {
  const date = new Date(dateString);
  return `March ${date.getDate()}, ${date.getFullYear()}`;
};

const getActionBadge = (event: string, log_name: string) => {
  if (log_name === "auth") {
    switch (event.toLowerCase()) {
      case "created":
        return {
          color: "bg-green-100 text-green-800",
          text: "Log In",
          icon: "🔑",
        };
      case "logout":
        return {
          color: "bg-green-100 text-green-800",
          text: "Log Out",
          icon: "🚪",
        };
      case "login_failed":
        return {
          color: "bg-red-100 text-red-800",
          text: "Log In Failed",
          icon: "❌",
        };
      default:
        return { color: "bg-gray-100 text-gray-800", text: event, icon: "" };
    }
  }

  if (log_name === "employee") {
    switch (event.toLowerCase()) {
      case "created":
      case "add_account":
        return {
          color: "bg-green-100 text-green-800",
          text: "Add Employee",
          icon: "👨‍💼",
        };
      default:
        return { color: "bg-gray-100 text-gray-800", text: event, icon: "" };
    }
  }

  if (log_name === "user") {
    switch (event.toLowerCase()) {
      case "created":
      case "add_account":
        return {
          color: "bg-green-100 text-green-800",
          text: "Add Account",
          icon: "👤",
        };
      default:
        return { color: "bg-gray-100 text-gray-800", text: event, icon: "" };
    }
  }

  return { color: "bg-gray-100 text-gray-800", text: event, icon: "" };
};

const AuditTrailTable: React.FC<AuditTrailTableProps> = ({ token }) => {
  const [data, setData] = useState<Activity[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);
  const [totalRows, setTotalRows] = useState<number>(0);
  const [perPage, setPerPage] = useState<number>(10);
  const [currentPage, setCurrentPage] = useState<number>(1);
  const [actionFilter, setActionFilter] = useState<string>("");
  const [dateFilter, setDateFilter] = useState<Date | null>(null);
  const [searchText, setSearchText] = useState<string>("");

  useEffect(() => {
    // Only fetch activities when token is available
    if (token) {
      fetchActivities();
    }
  }, [token, currentPage, perPage, actionFilter, dateFilter, searchText]);

  const fetchActivities = async () => {
    try {
      setLoading(true);

      const params: Record<string, any> = {
        page: currentPage,
        per_page: perPage,
      };

      if (actionFilter) params.action = actionFilter;
      if (dateFilter) {
        params.date = `${String(dateFilter.getMonth() + 1).padStart(
          2,
          "0"
        )}/${String(dateFilter.getDate()).padStart(
          2,
          "0"
        )}/${dateFilter.getFullYear()}`;
      }
      if (searchText) params.search = searchText;

      const response = await axios.get(`${API_BASE_URL}/api/v1/activities`, {
        params,
        headers: {
          Accept: "application/json",
          Authorization: `Bearer ${token}`,
        },
      });

      const activitiesData = response.data.data || [];

      const enhancedData = activitiesData.map((activity: any) => {
        // Assuming causer is an object with first_name and last_name fields
        const userName =
          activity.causer &&
          activity.causer.first_name &&
          activity.causer.last_name
            ? `${activity.causer.first_name} ${activity.causer.last_name}`
            : "Unknown User";

        const userRole =
          activity.causer && activity.causer.id === 1 ? "Admin" : "Employee";

        return {
          ...activity,
          user_name: userName,
          user_role: userRole,
        };
      });

      setData(enhancedData);
      setTotalRows(response.data.meta?.total || enhancedData.length);
      setError(null);
    } catch (error: any) {
      console.error("Failed to fetch activities:", error);
      setError("Failed to load activities. Please try again.");
      setData([]);
    } finally {
      setLoading(false);
    }
  };
  const handlePageChange = (pageIndex: number) => {
    setCurrentPage(pageIndex);
  };

  const handlePerRowsChange = (newPerPage: number) => {
    setPerPage(newPerPage);
    setCurrentPage(1);
  };

  const handleActionChange = (e: React.ChangeEvent<HTMLSelectElement>) => {
    setActionFilter(e.target.value);
    setCurrentPage(1);
  };

  const handleDateChange = (date: Date | null) => {
    setDateFilter(date);
    setCurrentPage(1);
  };

  const handleSearch = (e: React.ChangeEvent<HTMLInputElement>) => {
    setSearchText(e.target.value);
    setCurrentPage(1);
  };

  const handleClearFilters = () => {
    setActionFilter("");
    setDateFilter(null);
    setSearchText("");
    setCurrentPage(1);
  };

  const columns: ColumnDef<Activity>[] = [
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
        className: "border-l-2 border-b-2 border-t-2 border-gray-300 p-2",
      },
    },
    {
      id: "user",
      header: "User",
      cell: ({ row }) => (
        <div className="flex items-center">
          <div className="w-8 h-8 rounded-full bg-gray-200 flex justify-center items-center mr-2">
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
        className: "border-b-2 border-gray-300 border-t-2 p-2",
      },
    },
    {
      id: "action",
      header: "Action",
      cell: ({ row }) => {
        const { event, log_name } = row.original; // Extract both event and log_name
        const badge = getActionBadge(event, log_name); // Pass both to getActionBadge

        // Fallback if badge is undefined or doesn't return a valid color
        const badgeColor = badge?.color || "bg-gray-100 text-gray-800";
        const badgeText = badge?.text || event;
        const badgeIcon = badge?.icon || "";

        return (
          <div
            className={`inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium ${badgeColor}`}
          >
            <span className="mr-1">{badgeIcon}</span> {badgeText}
          </div>
        );
      },
      size: 150,
      meta: {
        className: "border-b-2 border-gray-300 border-t-2 p-2",
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
        className: "border-b-2 border-gray-300 border-t-2 p-2",
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

  const table = useReactTable({
    data,
    columns,
    getCoreRowModel: getCoreRowModel(),
    getPaginationRowModel: getPaginationRowModel(),
    manualPagination: true,
    pageCount: Math.ceil(totalRows / perPage),
    state: {
      pagination: {
        pageIndex: currentPage - 1,
        pageSize: perPage,
      },
    },
    onPaginationChange: (updater) => {
      if (typeof updater === "function") {
        const newPagination = updater({
          pageIndex: currentPage - 1,
          pageSize: perPage,
        });
        handlePageChange(newPagination.pageIndex + 1);
        if (newPagination.pageSize !== perPage) {
          handlePerRowsChange(newPagination.pageSize);
        }
      }
    },
  });

  if (error && !data.length) {
    return (
      <div className="bg-red-100 text-red-700 p-4 rounded m-4">
        <h5 className="font-bold">Error</h5>
        <p>{error}</p>
      </div>
    );
  }

  return (
    <div>
      <div className="flex flex-wrap items-center justify-between mb-6">
        <div className="flex items-center mb-2 sm:mb-0">
          <span className="text-gray-500 mr-2">Show</span>
          <select
            className="border rounded py-1 text-sm"
            value={perPage}
            onChange={(e) => handlePerRowsChange(Number(e.target.value))}
          >
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
          <span className="text-gray-500 ml-2">activity logs</span>
        </div>

        <div className="flex flex-wrap gap-2">
          <button
            className="px-4 py-1.5 border-2 border-solid border-red-500 text-red-500 rounded hover:bg-red-50 text-sm font-medium"
            onClick={handleClearFilters}
          >
            Clear Filter
          </button>

          <select
            className="border rounded px-2 text-sm min-w-32"
            value={actionFilter}
            onChange={handleActionChange}
          >
            <option value="">Action</option>
            <option value="login">Log In</option>
            <option value="logout">Log Out</option>
            <option value="add_account">Add Account</option>
            <option value="delete_account">Delete Account</option>
            <option value="view_audit_trail">View Audit Trail</option>
            <option value="view_dashboard">View Dashboard</option>
          </select>

          <DatePicker
            selected={dateFilter}
            onChange={handleDateChange}
            dateFormat="MM/DD/YYYY"
            className="border rounded px-3 py-2 text-sm min-w-32"
            placeholderText="MM/DD/YYYY"
            isClearable
          />

          <input
            type="text"
            placeholder="Search..."
            className="border rounded px-3 py-1.5 text-sm min-w-48"
            value={searchText}
            onChange={handleSearch}
          />
        </div>
      </div>

      {loading ? (
        <div className="flex justify-center items-center h-64">
          <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
        </div>
      ) : (
        <>
          <div className="overflow-x-auto">
            <table className="w-full">
              <tbody>
                {table.getRowModel().rows.map((row) => (
                  <tr key={row.id} className="border-gray-100 hover:bg-gray-50">
                    {row.getVisibleCells().map((cell) => (
                      <td
                        key={cell.id}
                        className={cell.column.columnDef.meta?.className}
                        style={{ minWidth: `${cell.column.getSize()}px` }}
                      >
                        {flexRender(
                          cell.column.columnDef.cell,
                          cell.getContext()
                        )}
                      </td>
                    ))}
                  </tr>
                ))}
              </tbody>
            </table>
          </div>

          <div className="flex justify-between items-center mt-6">
            <div className="text-sm text-gray-500">
              Showing 1 to {Math.min(perPage, data.length)} of {totalRows} {""}
              activity logs
            </div>

            <div className="flex items-center space-x-1">
              <button
                onClick={() => table.previousPage()}
                disabled={!table.getCanPreviousPage()}
                className="px-3 py-1 border rounded text-sm"
              >
                Previous
              </button>

              {Array.from(
                { length: Math.min(6, Math.ceil(totalRows / perPage)) },
                (_, i) => i + 1
              ).map((page) => (
                <button
                  key={page}
                  onClick={() => handlePageChange(page)}
                  className={`w-8 h-8 rounded-md text-sm ${
                    currentPage === page
                      ? "bg-teal-500 text-white"
                      : "bg-white text-gray-700 border"
                  }`}
                >
                  {page}
                </button>
              ))}

              <button
                onClick={() => table.nextPage()}
                disabled={!table.getCanNextPage()}
                className="px-3 py-1 border rounded text-sm"
              >
                Next
              </button>
            </div>
          </div>
        </>
      )}
    </div>
  );
};

export default AuditTrailTable;
