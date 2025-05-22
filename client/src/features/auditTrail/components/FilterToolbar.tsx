import React from "react";
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
import { Calendar, ChevronDown, Search } from "lucide-react";

interface FilterToolbarProps {
  perPage: number;
  actionFilter: string;
  dateFilter: Date | null;
  searchText: string;
  onPerPageChange: (perPage: number) => void;
  onActionChange: (e: React.ChangeEvent<HTMLSelectElement>) => void;
  onDateChange: (date: Date | null) => void;
  onSearchChange: (e: React.ChangeEvent<HTMLInputElement>) => void;
  onClearFilters: () => void;
  isAnyFilterActive: boolean;
}

const FilterToolbar: React.FC<FilterToolbarProps> = ({
  perPage,
  actionFilter,
  dateFilter,
  searchText,
  onPerPageChange,
  onActionChange,
  onDateChange,
  onSearchChange,
  onClearFilters,
  isAnyFilterActive,
}) => {
  return (
    <div className="flex flex-wrap items-center justify-between mb-6">
      <div className="flex items-center mb-2 sm:mb-0">
        <span className="text-gray-500 mr-2">Show</span>
        <select
          className="py-1 text-sm  bg-gray-50 border border-gray-200 rounded-md"
          value={perPage}
          onChange={(e) => onPerPageChange(Number(e.target.value))}
        >
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
        <span className="text-gray-500 ml-2">activity logs</span>
      </div>

      <div className="flex flex-wrap gap-2">
        {isAnyFilterActive && (
          <button
            className="px-4 py-1.5 border-2 border-solid border-red-500 text-red-500 rounded hover:bg-red-50 text-sm font-medium"
            onClick={onClearFilters}
          >
            Clear Filter
          </button>
        )}

        {/* Action Dropdown */}
        <div className="relative w-40">
          <select
            className="w-full appearance-none bg-gray-50 border border-gray-200 rounded-md px-4 py-2 pr-10 text-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-100"
            value={actionFilter}
            onChange={onActionChange}
          >
            <option value="" disabled selected>
              Action
            </option>
            <option value="log in">Log In</option>
            <option value="log out">Log Out</option>
            <option value="add account">Add Account</option>
            <option value="delete account">Delete Account</option>
          </select>
          <div className="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-400">
            <ChevronDown size={16} />
          </div>
        </div>

        {/* Date Picker */}
        <div className="relative w-48 flex items-center bg-gray-50 border border-gray-200 rounded-md">
          <div className="flex items-center justify-center pl-3 text-gray-400">
            <Calendar size={16} />
          </div>
          <DatePicker
            selected={dateFilter}
            onChange={onDateChange}
            dateFormat="MM/dd/yyyy"
            className="w-full bg-transparent border-0 py-2 pl-2 pr-4 text-gray-500 focus:outline-none"
            placeholderText="MM/DD/YYYY"
            isClearable
          />
        </div>

        {/* Search Input */}
        <div className="relative w-48 flex items-center bg-gray-50 border border-gray-200 rounded-md">
          <div className="flex items-center justify-center pl-3 text-gray-400">
            <Search size={16} />
          </div>
          <input
            type="text"
            placeholder="Search..."
            className="w-full bg-transparent border-0 py-2 pl-2 pr-4 text-gray-500 focus:outline-none"
            value={searchText}
            onChange={onSearchChange}
          />
        </div>
      </div>
    </div>
  );
};

export default FilterToolbar;
