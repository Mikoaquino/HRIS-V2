import React, { useEffect, useState, useRef } from "react";
import axios from "axios";
import { formatDate } from "../utils/helpers";
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
import DataTable from "react-data-table-component";

interface AuditTrailTableProps {
  token: string;
}

interface Activity {
  id: number;
  event: string;
  description: string;
  causer_id: string | null;
  causer_type: string | null;
  created_at: string;
}

const AuditTrailTable: React.FC<AuditTrailTableProps> = ({ token }) => {
  const [data, setData] = useState<Activity[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [totalRows, setTotalRows] = useState<number>(0);
  const [perPage, setPerPage] = useState<number>(10);
  const [currentPage, setCurrentPage] = useState<number>(1);
  const [actionFilter, setActionFilter] = useState<string>("");
  const [dateFilter, setDateFilter] = useState<Date | null>(null);
  const [searchText, setSearchText] = useState<string>("");

  const fetchData = async (page: number) => {
    try {
      setLoading(true);

      // Format date to MM/dd/yyyy if exists
      const formattedDate = dateFilter
        ? `${String(dateFilter.getMonth() + 1).padStart(2, "0")}/${String(
            dateFilter.getDate()
          ).padStart(2, "0")}/${dateFilter.getFullYear()}`
        : "";

      const response = await axios.get("/api/v1/activities", {
        headers: {
          Authorization: `Bearer ${token}`,
        },
        params: {
          page,
          per_page: perPage,
          action: actionFilter,
          date: formattedDate,
          search: searchText,
        },
      });

      setData(response.data.data || []);
      setTotalRows(response.data.meta?.total || 0);
    } catch (error) {
      console.error("Error fetching data:", error);
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchData(currentPage);
  }, [currentPage, perPage, actionFilter, dateFilter, searchText]);

  const handlePageChange = (page: number) => {
    setCurrentPage(page);
  };

  const handlePerRowsChange = (newPerPage: number) => {
    setPerPage(newPerPage);
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

  const columns = [
    {
      name: "Date Done",
      selector: (row: Activity) => row.created_at,
      cell: (row: Activity) => (
        <div className="text-center relative">
          <div className="absolute left-0 top-1/2 -translate-y-1/2">
            <a
              href="javascript:void(0);"
              className="w-3 h-3 inline-block rounded-full bg-white border-2 border-blue-500"
            ></a>
          </div>
          <div className="font-bold">{formatDate(row.created_at, "day")}</div>
          <div>{formatDate(row.created_at, "time")}</div>
        </div>
      ),
      width: "150px",
    },
    {
      name: "Log Number",
      selector: (row: Activity) => row.id,
      cell: (row: Activity) => (
        <div className="border-l border-b p-3">
          LOG#{String(row.id).padStart(4, "0")}
        </div>
      ),
      width: "150px",
    },
    {
      name: "Name",
      cell: (row: Activity) => (
        <div className="border-b p-3">
          <div className="flex items-center">
            <img
              className="rounded-full mr-2 w-10 h-10"
              src="https://placehold.co/40"
              alt="Placeholder"
            />
            <div className="text-center">
              <p className="mb-0 font-semibold">{row.causer_id ?? "System"}</p>
              <p className="mb-0 text-gray-500 text-sm">
                {row.causer_type ?? "Automated"}
              </p>
            </div>
          </div>
        </div>
      ),
      width: "200px",
    },
    {
      name: "Action",
      selector: (row: Activity) => row.event,
      cell: (row: Activity) => (
        <div className="border-b p-3">
          <div className="bg-blue-500 text-white rounded-full px-2 py-1 text-xs">
            {row.event}
          </div>
        </div>
      ),
      width: "150px",
    },
    {
      name: "Description",
      selector: (row: Activity) => row.description,
      cell: (row: Activity) => (
        <div className="border-b p-3">
          {row.description || "No description available"}
        </div>
      ),
      grow: 2,
    },
    {
      name: "Timestamp",
      selector: (row: Activity) => row.created_at,
      cell: (row: Activity) => (
        <div className="border-b border-r p-3">
          {row.created_at
            ? new Intl.DateTimeFormat("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric",
              }).format(new Date(row.created_at))
            : "N/A"}
        </div>
      ),
      width: "200px",
    },
  ];

  const customStyles = {
    headRow: {
      style: {
        display: "none",
      },
    },
    rows: {
      style: {
        minHeight: "72px",
        borderRadius: "0",
      },
    },
  };

  return (
    <div>
      {/* Filter Controls */}
      <div className="flex flex-wrap items-center mb-4">
        <button
          className="px-3 py-1 bg-red-100 text-red-700 rounded mr-2 mb-3 text-sm"
          onClick={handleClearFilters}
        >
          Clear Filter
        </button>

        <select
          className="border rounded px-3 py-1 mr-2 mb-3 text-sm w-48"
          value={actionFilter}
          onChange={handleActionChange}
        >
          <option value="">Action</option>
          <optgroup label="Authentication">
            <option value="login">Log in</option>
            <option value="logout">Log out</option>
          </optgroup>
          <optgroup label="Account Management">
            <option value="add_account">Add Account</option>
            <option value="delete_account">Delete Account</option>
          </optgroup>
          <optgroup label="Audit Trail">
            <option value="view_audit_trail">View Audit Trail</option>
          </optgroup>
          <optgroup label="Dashboard">
            <option value="view_dashboard">View Dashboard</option>
          </optgroup>
        </select>

        <DatePicker
          selected={dateFilter}
          onChange={handleDateChange}
          dateFormat="MM/dd/yyyy"
          className="border rounded px-3 py-1 mr-2 mb-3 text-sm w-36"
          placeholderText="MM/dd/yyyy"
          isClearable
        />

        <input
          type="text"
          placeholder="Search..."
          className="border rounded px-3 py-1 mb-3 text-sm w-48"
          value={searchText}
          onChange={handleSearch}
        />
      </div>

      {/* Timeline with vertical line */}
      <div className="relative">
        {/* Vertical line */}
        <div className="absolute top-0 bottom-0 left-6 w-0.5 bg-blue-100"></div>

        <DataTable
          columns={columns}
          data={data}
          progressPending={loading}
          pagination
          paginationServer
          paginationTotalRows={totalRows}
          onChangeRowsPerPage={handlePerRowsChange}
          onChangePage={handlePageChange}
          customStyles={customStyles}
          noHeader
          progressComponent={
            <div className="flex justify-center items-center h-64">
              <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
            </div>
          }
          noDataComponent={
            <div className="p-4 text-center text-gray-500">
              No activity logs found
            </div>
          }
        />
      </div>
    </div>
  );
};

export default AuditTrailTable;
