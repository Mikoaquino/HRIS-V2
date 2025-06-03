import React, { useEffect, useRef } from 'react';
import { X } from 'lucide-react';

interface Props {
  company: any;
  onClose: () => void;
}

const CompanyView: React.FC<Props> = ({ company, onClose }) => {
  const modalRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const handleKeyDown = (e: KeyboardEvent) => {
      if (e.key === 'Escape') onClose();
    };
    document.addEventListener('keydown', handleKeyDown);
    return () => document.removeEventListener('keydown', handleKeyDown);
  }, [onClose]);

  if (!company) return null;

  return (
    <div
      className="fixed inset-0 bg-black/50 flex items-center justify-center z-[1025]"
      role="dialog"
      aria-modal="true"
      aria-labelledby="company-modal-title"
    >
      <div
        ref={modalRef}
        className="bg-white rounded-lg shadow-xl w-full max-w-md mx-4 md:mx-8 p-8 overflow-y-auto max-h-[90vh] transform transition-all duration-300"
      >
        <div className="flex justify-between items-start mb-6">
          <h2 id="company-modal-title" className="text-teal-600 text-2xl font-bold">
            Company Details
          </h2>
          <button
            onClick={onClose}
            className="text-gray-500 hover:text-gray-700 focus:outline-none cursor-pointer"
            aria-label="Close modal"
          >
            <X size={24} />
          </button>
        </div>

        <div className="space-y-4 text-gray-700 text-base">
          <div>
            <strong>Company Name:</strong>
            <span className="block break-words whitespace-normal max-w-[300px]">
              {company.name}
            </span>
          </div>
          <div>
            <strong>Type:</strong> {company.type}
          </div>
          <div>
            <strong>Address:</strong>
            <span className="block break-words whitespace-normal max-w-[300px]">
              {company.address}
            </span>
          </div>
          <div>
            <strong>Contact Number:</strong> {company.contact_number}
          </div>
        </div>
      </div>
    </div>
  );
};

export default CompanyView;
