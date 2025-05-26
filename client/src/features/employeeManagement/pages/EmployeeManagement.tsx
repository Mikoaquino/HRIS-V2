import React, { useEffect, useState } from 'react';
import { useEmployees, deleteEmployee } from '../hooks/useEmployee';
import { ChevronDown, CircleCheckBig, MoreHorizontal, XCircle } from 'lucide-react';
import EmployeeTable from '../components/EmployeeTable';
import EmployeeViewModal from '../components/EmployeeView';
import { Link } from 'react-router-dom';

const EmployeeManagement: React.FC = () => {
  const [currentPage, setCurrentPage] = useState(1);
  const [perPage, setPerPage] = useState(10);
  const [openActionMenu, setOpenActionMenu] = useState<number | null>(null);
  const [showSuccess, setShowSuccess] = useState(false);
  const [successAction, setSuccessAction] = useState<'create' | 'edit' | 'delete' | null>(null);
  const [employeeToDelete, setEmployeeToDelete] = useState<number | null>(null);
  const [showDeleteModal, setShowDeleteModal] = useState(false);
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [selectedEmployee, setSelectedEmployee] = useState<any | null>(null);

  const token = sessionStorage.getItem('token');
  const { employees, meta, loading, refetchEmployees } = useEmployees(currentPage, token, perPage);

  useEffect(() => {
    if (!loading && meta && employees.length === 0 && currentPage > 1 && meta.total > 0) {
      setCurrentPage(1);
    }
  }, [employees, loading, meta, currentPage]);
  
  const toggleActionMenu = (employeeId: number | null) => {
    setOpenActionMenu((prev) => (prev === employeeId ? null : employeeId));
  };

  const handleDelete = (employeeId: number) => {
    setEmployeeToDelete(employeeId);
    setShowDeleteModal(true);
  };

  const confirmDelete = async () => {
    if (!token || employeeToDelete === null) return;
    try {
      setIsSubmitting(true);
      await deleteEmployee(employeeToDelete, token);
      await refetchEmployees();
      setSuccessAction('delete');
      setShowSuccess(true);
      setTimeout(() => setShowSuccess(false), 3000);
    } catch (error) {
      setShowSuccess(false);
      setSuccessAction(null);
    }
    setShowDeleteModal(false);
    setEmployeeToDelete(null);
    setOpenActionMenu(null);
    setIsSubmitting(false);
  };

  const calculatePaginationInfo = () => {
    if (!meta || employees.length === 0) return 'No employees to display';
    return `Showing ${meta.from} to ${meta.to} of ${meta.total} entries`;
  };

  const handleView = (employeeId: number) => {
    const emp = employees.find(emp => emp.id === employeeId);
    if (emp) setSelectedEmployee(emp);
  };

  useEffect(() => {
    refetchEmployees();
  }, [refetchEmployees]);
  
  return (
    <div className="bg-white p-6 rounded-lg shadow-sm w-full min-h-screen">
      <h5 className="text-black text-lg font-semibold mb-6">EMPLOYEE MANAGEMENT</h5>

      {showSuccess && (
      <div className="fixed inset-0 bg-black/50 flex justify-center items-center z-[1025]">
          <div className="bg-gray-100 border border-green-300 rounded-md shadow-md px-8 py-6 max-w-md text-center">
            <div className="flex justify-center items-center mb-4">
              <div className="w-12 h-12 rounded-full border-2 border-green-300 flex items-center justify-center">
                <CircleCheckBig className="text-green-600 w-6 h-6" />
              </div>
            </div>
            <h2 className="text-green-700 text-2xl font-semibold mb-2">Success!</h2>
            <p className="text-gray-700 text-sm">
              {successAction === 'delete' && 'Employee has been deleted'}
            </p>
          </div>
        </div>
      )}

      {showDeleteModal && (
        <div className="fixed inset-0 bg-black/50 flex items-center justify-center z-[1025]">
          <div className="bg-white rounded-md shadow-lg px-8 py-6 max-w-sm text-center border border-gray-200">
            <div className="flex justify-center items-center">
              <div className="text-yellow-500 mb-2">
                <XCircle size={80} strokeWidth={1.5} className="mx-auto" />
              </div>
            </div>
            <h2 className="text-yellow-600 text-lg font-semibold mb-2">Archive Employee</h2>
            <p className="text-gray-600 text-sm mb-4">
              Are you sure you want to archive this Employee? This process cannot be undone
            </p>
            <hr className="mb-4 text-gray-200 justify-center items-center"/>
            <div className="flex justify-center gap-4">
              <button
                onClick={() => {
                  setShowDeleteModal(false);
                  setEmployeeToDelete(null);
                }}
                className="bg-gray-200 hover:bg-gray-400 text-gray-800 px-4 py-1.5 rounded-md text-sm cursor-pointer"
              >
                Cancel
              </button>
              <button
                onClick={confirmDelete}
                disabled={isSubmitting}
                className="px-4 py-2 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded-md cursor-pointer"
              >
                {isSubmitting ? 'Archiving...' : 'Archive'}
              </button>
            </div>
          </div>
        </div>
      )}

      {selectedEmployee && (
        <EmployeeViewModal
          employee={selectedEmployee}
          onClose={() => setSelectedEmployee(null)}
        />
      )}

      <div className="overflow-x-auto sm:flex mb-6 justify-between items-center">
        <div className="flex space-x-4 items-center">
          <div className="relative flex items-center">
            <span className="text-gray-700 text-sm mr-2">Show</span>
            <div className="relative">
              <select
                value={perPage}
                onChange={(e) => {
                  setPerPage(Number(e.target.value));
                  setCurrentPage(1);
                }}
                className="appearance-none bg-white border border-gray-300 text-gray-700 py-1 pl-2 pr-6 rounded-md text-xs"
              >
                <option value={10}>10</option>
                <option value={25}>25</option>
                <option value={50}>50</option>
                <option value={100}>100</option>
              </select>
              <div className="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-teal-500">
                <ChevronDown size={14} />
              </div>
            </div>
          </div>
          <span className="text-gray-700 text-sm">entries</span>
        </div>

        <div className="flex items-center">
          <button className="mx-2">
            <MoreHorizontal size={20} className="text-gray-500" />
          </button>
          <Link to="/employee-management/onboarding" className="bg-teal-500 hover:bg-teal-600 text-white px-4 py-1.5 rounded-md text-sm"
          >
            Add Employee
          </Link>
        </div>
      </div>

      {loading ? (
        <p className="text-gray-500 flex justify-center items-center mt-10">Loading employees...</p>
      ) : (
        <>
          <EmployeeTable
            employees={employees}
            openActionMenu={openActionMenu}
            toggleActionMenu={toggleActionMenu}
            handleEdit={() => {}}
            handleDelete={handleDelete}
            handleView={handleView}
          />

          <div className="flex justify-between items-center mt-4">
            <div className="text-sm text-gray-500">{calculatePaginationInfo()}</div>
            <div className="flex items-center space-x-2">
              <button
                onClick={() => setCurrentPage((prev) => Math.max(prev - 1, 1))}
                disabled={currentPage === 1}
                className={`py-1 px-4 rounded-md text-xs ${
                  currentPage === 1 ? 'bg-gray-200 text-gray-400' : 'bg-gray-300 text-gray-700 hover:bg-gray-400'
                }`}
              >
                Previous
              </button>

              {meta &&
                Array.from({ length: meta.last_page }, (_, i) => i + 1).map((page) => (
                  <button
                    key={page}
                    onClick={() => setCurrentPage(page)}
                    className={`py-1 px-3 rounded-md text-xs ${
                      currentPage === page
                        ? 'bg-teal-500 text-white'
                        : 'bg-gray-200 text-gray-700 hover:bg-gray-300'
                    }`}
                  >
                    {page}
                  </button>
                ))}

              <button
                onClick={() => setCurrentPage((prev) => Math.min(prev + 1, meta?.last_page ?? 1))}
                disabled={currentPage >= (meta?.last_page ?? 1)}
                className={`py-1 px-4 rounded-md text-xs ${
                  currentPage >= (meta?.last_page ?? 1)
                    ? 'bg-gray-200 text-gray-400'
                    : 'bg-gray-300 text-gray-700 hover:bg-gray-400'
                }`}
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

export default EmployeeManagement;