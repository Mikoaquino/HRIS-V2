import React from "react";

interface NoDataFoundProps {
  isAnyFilterActive: boolean;
  onClearFilters: () => void;
  imageSrc: string;
}

const NoDataFound: React.FC<NoDataFoundProps> = ({
  isAnyFilterActive,
  onClearFilters,
  imageSrc,
}) => {
  return (
    <div className="flex flex-col items-center justify-center">
      <img
        src={imageSrc}
        alt="No items found"
        className="max-h-full max-w-full object-contain"
      />
      <h2 className="text-2xl font-medium text-gray-700">Items Not Found</h2>
      {isAnyFilterActive && (
        <div className="mt-4">
          <button
            className="px-4 py-1.5 border-2 border-solid border-red-500 text-red-500 rounded hover:bg-red-50 text-sm font-medium"
            onClick={onClearFilters}
          >
            Clear Filter
          </button>
        </div>
      )}
    </div>
  );
};

export default NoDataFound;
