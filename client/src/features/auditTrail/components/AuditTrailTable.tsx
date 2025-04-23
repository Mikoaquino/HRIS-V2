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
  token?: string;
}

interface Activity {
  id: number;
  event: string;
  description: string;
  causer_id: string | null;
  causer_type: string | null;
  created_at: string;
  user_name?: string;
  user_role?: string;
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

const getActionBadge = (
  event: string
): { color: string; text: string; icon: string } => {
  switch (event.toLowerCase()) {
    case "created":
      return {
        color: "bg-green-100 text-green-800",
        text: "Add Account",
        icon: "",
      };
    case "delete_account":
      return {
        color: "bg-red-100 text-red-800",
        text: "Delete Account",
        icon: "",
      };
    case "login":
      return {
        color: "bg-green-100 text-green-800",
        text: "Log In",
        icon: "",
      };
    case "login_failed":
      return { color: "bg-red-100 text-red-800", text: "Log In", icon: "" };
    case "logout":
      return {
        color: "bg-green-100 text-green-800",
        text: "Log Out",
        icon: "",
      };
    case "view_dashboard":
      return {
        color: "bg-blue-100 text-blue-800",
        text: "View Dashboard",
        icon: "",
      };
    case "view_audit_trail":
      return {
        color: "bg-blue-100 text-blue-800",
        text: "View Audit Trail",
        icon: "",
      };
    default:
      return { color: "bg-gray-100 text-gray-800", text: event, icon: "" };
  }
};

const AuditTrailTable: React.FC<AuditTrailTableProps> = ({
  token: propToken,
}) => {
  const [data, setData] = useState<Activity[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);
  const [token, setToken] = useState<string>(
    propToken || localStorage.getItem("auth_token") || ""
  );
  const [totalRows, setTotalRows] = useState<number>(57);
  const [perPage, setPerPage] = useState<number>(10);
  const [currentPage, setCurrentPage] = useState<number>(1);
  const [actionFilter, setActionFilter] = useState<string>("");
  const [dateFilter, setDateFilter] = useState<Date | null>(null);
  const [searchText, setSearchText] = useState<string>("");

  useEffect(() => {
    if (!token) {
      login("telly68@example.org", "password");
    } else {
      fetchActivities();
    }
  }, [token, currentPage, perPage, actionFilter, dateFilter, searchText]);

  const login = async (email: string, password: string) => {
    try {
      setLoading(true);
      const { data } = await axios.post(`${API_BASE_URL}/api/v1/auth/login`, {
        email,
        password,
      });

      if (data?.data?.token) {
        const newToken = data.data.token;
        localStorage.setItem("auth_token", newToken);
        setToken(newToken);
      } else {
        throw new Error("Invalid login response format");
      }
    } catch (error: any) {
      console.error("Login failed:", error.response?.data || error.message);
      setError("Authentication failed. Please refresh the page.");
    } finally {
      setLoading(false);
    }
  };

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

      // Fetch activities
      const response = await axios.get(`${API_BASE_URL}/api/v1/activities`, {
        params,
        headers: {
          Accept: "application/json",
          Authorization: `Bearer ${token}`,
        },
      });

      // Enhance data with user information (normally would come from API)
      const enhancedData = (response.data.data || []).map(
        (activity: Activity) => {
          // In a real implementation, this would come from the API
          const userName =
            activity.causer_id === "1" ? "John Doe" : "Juan Dela Cruz";
          const userRole = activity.causer_id === "1" ? "Admin" : "Employee";

          return {
            ...activity,
            user_name: userName,
            user_role: userRole,
          };
        }
      );

      setData(enhancedData);
      setTotalRows(response.data.meta?.total || 57);
      setError(null);
    } catch (error: any) {
      console.error("Failed to fetch activities:", error);
      if (error.response?.status === 401) {
        setError("Session expired. Please refresh to login again.");
        localStorage.removeItem("auth_token");
        setToken("");
      } else {
        setError("Failed to load activities. Please try again.");

        // Mock data for development when API is not available
        const mockData = [
          {
            id: 10,
            event: "add_account",
            description: "Added an account for Juan Dela Cruz (ACC-00010)",
            causer_id: "1",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-26T21:15:00",
            user_name: "John Doe",
            user_role: "Admin",
          },
          {
            id: 9,
            event: "delete_account",
            description: "Deleted the account of Michael Jordan (ACC-00016)",
            causer_id: "2",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-27T23:18:00",
            user_name: "Juan Dela Cruz",
            user_role: "Employee",
          },
          {
            id: 8,
            event: "login",
            description: "Logged in successfully",
            causer_id: "2",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-27T23:06:00",
            user_name: "Juan Dela Cruz",
            user_role: "Employee",
          },
          {
            id: 7,
            event: "login_failed",
            description: "Attempted log in with invalid credentials",
            causer_id: "2",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-27T21:56:00",
            user_name: "Juan Dela Cruz",
            user_role: "Employee",
          },
          {
            id: 6,
            event: "logout",
            description: "Logged out successfully",
            causer_id: "2",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-27T20:30:00",
            user_name: "Juan Dela Cruz",
            user_role: "Employee",
          },
          {
            id: 5,
            event: "view_dashboard",
            description: "Accessed the Dashboard",
            causer_id: "2",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-26T23:59:00",
            user_name: "Juan Dela Cruz",
            user_role: "Employee",
          },
          {
            id: 4,
            event: "view_audit_trail",
            description: "Accessed the Audit Trail",
            causer_id: "1",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-26T14:32:00",
            user_name: "John Doe",
            user_role: "Employee",
          },
          {
            id: 3,
            event: "add_account",
            description: "Added an account for Juan Dela Cruz (ACC-00010)",
            causer_id: "1",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-26T09:15:00",
            user_name: "John Doe",
            user_role: "Employee",
          },
          {
            id: 2,
            event: "delete_account",
            description: "Deleted the account of Michael Jordan (ACC-00016)",
            causer_id: "2",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-25T21:38:00",
            user_name: "Juan Dela Cruz",
            user_role: "Employee",
          },
          {
            id: 1,
            event: "login_failed",
            description: "Attempted log in with invalid credentials",
            causer_id: "2",
            causer_type: "App\\Models\\User",
            created_at: "2025-03-25T04:18:00",
            user_name: "Juan Dela Cruz",
            user_role: "Employee",
          },
        ];

        setData(mockData);
        setTotalRows(57);
      }
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
        const badge = getActionBadge(row.original.event);
        return (
          <div
            className={`inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium ${badge.color}`}
          >
            <span className="mr-1">{badge.icon}</span> {badge.text}
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
        <button
          className="bg-blue-500 text-white px-4 py-2 rounded mt-2"
          onClick={() => window.location.reload()}
        >
          Refresh Page
        </button>
      </div>
    );
  }

  return (
    <div>
      <div className="flex flex-wrap items-center justify-between mb-6">
        <div className="flex items-center mb-2 sm:mb-0">
          <span className="text-gray-500 mr-2">Show</span>
          <select
            className="border rounded  py-1 text-sm"
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
              Showing 1 to {Math.min(perPage, data.length)} of {totalRows}
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
