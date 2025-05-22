import React from "react";

interface PaginationProps {
  currentPage: number;
  perPage: number;
  totalRows: number;
  canPreviousPage: boolean;
  canNextPage: boolean;
  onPageChange: (page: number) => void;
  onPreviousPage: () => void;
  onNextPage: () => void;
}

const Pagination: React.FC<PaginationProps> = ({
  currentPage,
  perPage,
  totalRows,
  canPreviousPage,
  canNextPage,
  onPageChange,
  onPreviousPage,
  onNextPage,
}) => {
  const totalPages = Math.ceil(totalRows / perPage);
  const getPageNumbers = () => {
    let pages = [];
    if (totalPages <= 6) {
      pages = Array.from({ length: totalPages }, (_, i) => i + 1);
    } else {
      if (currentPage <= 3) {
        pages = [1, 2, 3, 4, 5, 6];
      } else if (currentPage > totalPages - 3) {
        pages = Array.from({ length: 6 }, (_, i) => totalPages - 5 + i);
      } else {
        pages = [
          currentPage - 2,
          currentPage - 1,
          currentPage,
          currentPage + 1,
          currentPage + 2,
          currentPage + 3,
        ];
      }
    }

    return pages;
  };

  return (
    <div className="flex justify-between items-center mt-6">
      <div className="text-sm text-gray-500">
        Showing 1 to{" "}
        {Math.min(
          perPage,
          Math.min(perPage * currentPage, totalRows) -
            perPage * (currentPage - 1)
        )}{" "}
        of {totalRows} {""} activity logs
      </div>

      <div className="flex items-center space-x-2">
        {/* Previous Button */}
        <button
          onClick={onPreviousPage}
          disabled={!canPreviousPage}
          className={`px-4 py-4 rounded-md text-sm font-medium ${
            canPreviousPage
              ? "bg-white text-gray-600 border border-gray-200 hover:bg-gray-50"
              : "bg-gray-50 text-gray-300 border border-gray-200 cursor-not-allowed"
          }`}
        >
          Previous
        </button>

        {/* Page Numbers */}
        {getPageNumbers().map((page) => (
          <button
            key={page}
            onClick={() => onPageChange(page)}
            className={`w-12 h-12 flex items-center justify-center rounded-md text-base font-medium ${
              currentPage === page
                ? "bg-teal-500 text-white"
                : "bg-white text-gray-600 border border-gray-200 hover:bg-gray-50"
            }`}
          >
            {page}
          </button>
        ))}

        {/* Next Button */}
        <button
          onClick={onNextPage}
          disabled={!canNextPage}
          className={`px-4 py-4 rounded-md text-sm font-medium ${
            canNextPage
              ? "bg-white text-gray-600 border border-gray-200 hover:bg-gray-50"
              : "bg-gray-50 text-gray-300 border border-gray-200 cursor-not-allowed"
          }`}
        >
          Next
        </button>
      </div>
    </div>
  );
};

export default Pagination;
