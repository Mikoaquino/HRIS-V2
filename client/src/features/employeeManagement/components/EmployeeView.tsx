import React, { useEffect, useRef } from 'react';
import { X } from 'lucide-react';

interface Props {
  employee: any;
  onClose: () => void;
}

const EmployeeView: React.FC<Props> = ({ employee, onClose }) => {
  const modalRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const handleKeyDown = (e: KeyboardEvent) => {
      if (e.key === 'Escape') onClose();
    };
    document.addEventListener('keydown', handleKeyDown);
    return () => document.removeEventListener('keydown', handleKeyDown);
  }, [onClose]);

  if (!employee) return null;

  const fullName = [employee.first_name, employee.middle_name, employee.last_name, employee.suffix]
    .filter(Boolean)
    .join(' ');

  const formatDate = (date: string) => {
    if (!date) return 'N/A';
    return new Date(date).toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'short',
      day: 'numeric',
    });
  };

  return (
    <div
      className="fixed inset-0 bg-black/50 flex items-center justify-center z-[1025]"
      role="dialog"
      aria-modal="true"
      aria-labelledby="employee-modal-title"
    >
      <div
        ref={modalRef}
        className="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 md:mx-8 p-8 overflow-y-auto max-h-[90vh] transform transition-all duration-300"
      >
        <div className="flex justify-between items-start mb-6">
          <h2 id="employee-modal-title" className="text-teal-600 text-2xl font-bold">
            Employee Details
          </h2>
          <button
            onClick={onClose}
            className="text-gray-500 hover:text-gray-700 focus:outline-none cursor-pointer"
            aria-label="Close modal"
          >
            <X size={24} />
          </button>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-700">
          <div>
            <h3 className="text-lg font-medium text-teal-700 mb-2">Personal Information</h3>
            <div className="space-y-2">
              <div><strong>Full Name:</strong> {fullName}</div>
              <div><strong>Birth Date:</strong> {formatDate(employee.birth_date)}</div>
              <div><strong>Gender:</strong> {employee.gender ?? 'N/A'}</div>
              <div><strong>Civil Status:</strong> {employee.civil_status ?? 'N/A'}</div>
              <div><strong>Nationality:</strong> {employee.nationality ?? 'N/A'}</div>
              <div><strong>Religion:</strong> {employee.religion ?? 'N/A'}</div>
              <div><strong>Contact Number:</strong> {employee.contact_number ?? 'N/A'}</div>
            </div>
          </div>

          <div>
            <h3 className="text-lg font-medium text-teal-700 mb-2">Employment Information</h3>
            <div className="space-y-2">
              <div><strong>Job Position:</strong> {employee.job_position?.name ?? 'N/A'}</div>
              <div><strong>Department:</strong> {employee.department?.name ?? 'N/A'}</div>
              <div><strong>Employment Type:</strong> {employee.employment_type?.name ?? 'N/A'}</div>
              <div><strong>Status:</strong> {employee.status?.name ?? 'N/A'}</div>
              <div><strong>SSS ID:</strong> {employee.sss_id ?? 'N/A'}</div>
              <div><strong>TIN ID:</strong> {employee.tin_id ?? 'N/A'}</div>
              <div><strong>PhilHealth ID:</strong> {employee.philhealth_id ?? 'N/A'}</div>
              <div><strong>Pag-IBIG ID:</strong> {employee.pagibig_id ?? 'N/A'}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default EmployeeView;
