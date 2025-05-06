import React, { useEffect, useState, useRef } from "react";
import axios from "axios";
import {
  useReactTable,
  getCoreRowModel,
  getPaginationRowModel,
  flexRender,
} from "@tanstack/react-table";
import { Activity } from "../types/AuditTrail";
import FilterToolbar from "./FilterToolbar";
import NoDataFound from "./NoDataFound";
import Pagination from "./Pagination";
import { getAuditColumns } from "./TableColumns";
import ItemsNotFoundImage from "../assets/img/Items not Found.png";

const API_BASE_URL = import.meta.env.VITE_API_BASE_URL ?? "";

interface AuditTrailTableProps {
  token: string;
}

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
  const [debouncedSearchText, setDebouncedSearchText] = useState<string>("");
  const searchTimeout = useRef<NodeJS.Timeout | null>(null);

  useEffect(() => {
    if (token) {
      fetchActivities();
    }
  }, [
    token,
    currentPage,
    perPage,
    actionFilter,
    dateFilter,
    debouncedSearchText,
  ]);

  useEffect(() => {
    if (searchTimeout.current) {
      clearTimeout(searchTimeout.current);
    }

    searchTimeout.current = setTimeout(() => {
      setDebouncedSearchText(searchText);
    }, 500);

    return () => {
      if (searchTimeout.current) {
        clearTimeout(searchTimeout.current);
      }
    };
  }, [searchText]);

  const fetchActivities = async () => {
    try {
      setLoading(true);

      const params: Record<string, any> = {
        page: currentPage,
        per_page: perPage,
      };

      if (actionFilter) {
        params.filter = {
          ...params.filter,
          event: {
            eq: actionFilter,
          },
        };
      }

      if (dateFilter) {
        const formattedDate = `${dateFilter.getFullYear()}-${String(
          dateFilter.getMonth() + 1
        ).padStart(2, "0")}-${String(dateFilter.getDate()).padStart(2, "0")}`;

        params.filter = {
          ...params.filter,
          created_at: {
            gte: `${formattedDate} 00:00:00`,
            lte: `${formattedDate} 23:59:59`,
          },
        };
      }
      if (searchText) params.q = searchText;

      const response = await axios.get(`${API_BASE_URL}/api/v1/activities`, {
        params,
        headers: {
          Accept: "application/json",
          Authorization: `Bearer ${token}`,
        },
      });

      const activitiesData = response.data.data || [];

      const enhancedData = activitiesData.map((activity: any) => {
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
    if (date) {
      const safeDate = new Date(
        date.getFullYear(),
        date.getMonth(),
        date.getDate()
      );
      setDateFilter(safeDate);
    } else {
      setDateFilter(null);
    }
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

  const isAnyFilterActive = () => {
    return (
      actionFilter !== "" ||
      dateFilter !== null ||
      searchText !== "" ||
      perPage !== 10 ||
      currentPage !== 1
    );
  };

  const columns = getAuditColumns();

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
      <FilterToolbar
        perPage={perPage}
        actionFilter={actionFilter}
        dateFilter={dateFilter}
        searchText={searchText}
        onPerPageChange={handlePerRowsChange}
        onActionChange={handleActionChange}
        onDateChange={handleDateChange}
        onSearchChange={handleSearch}
        onClearFilters={handleClearFilters}
        isAnyFilterActive={isAnyFilterActive()}
      />

      {loading ? (
        <div className="flex justify-center items-center h-64">
          <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
        </div>
      ) : data.length === 0 ? (
        <NoDataFound
          isAnyFilterActive={isAnyFilterActive()}
          onClearFilters={handleClearFilters}
          imageSrc={ItemsNotFoundImage}
        />
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

          <Pagination
            currentPage={currentPage}
            perPage={perPage}
            totalRows={totalRows}
            canPreviousPage={table.getCanPreviousPage()}
            canNextPage={table.getCanNextPage()}
            onPageChange={handlePageChange}
            onPreviousPage={() => table.previousPage()}
            onNextPage={() => table.nextPage()}
          />
        </>
      )}
    </div>
  );
};

export default AuditTrailTable;
