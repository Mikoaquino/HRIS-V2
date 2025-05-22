import React from 'react';
import { format, parseISO } from 'date-fns';
import { Edit, MoreHorizontal, Archive, Eye } from 'lucide-react';

export interface Employee {
  id: number;
  first_name: string;
  middle_name?: string | null;
  last_name: string;
  suffix?: string | null;
  created_at: string;
  status?: {
    id: number;
    name: string;
    description?: string;
  };
  department?: {
    id: number;
    name: string;
    description?: string;
  };
}

interface Props {
  employees: Employee[];
  openActionMenu: number | null;
  toggleActionMenu: (id: number) => void;
  handleEdit: (id: number) => void;
  handleDelete: (id: number) => void;
  handleView: (id: number) => void;
}

const formatName = (employee: Employee): string =>
  [employee.first_name, employee.middle_name, employee.last_name, employee.suffix]
    .filter(Boolean)
    .join(' ');

const getStatusClass = (status: string): string => {
  switch (status) {
    case 'Active':
      return 'bg-green-100 text-green-800';
    case 'Resigned':
      return 'bg-yellow-100 text-yellow-800';
    case 'Terminated':
      return 'bg-red-100 text-red-800';
    default:
      return 'bg-gray-100 text-gray-800';
  }
};

const EmployeeTable: React.FC<Props> = ({
  employees,
  openActionMenu,
  toggleActionMenu,
  handleEdit,
  handleDelete,
  handleView,
}) => {
  return (
    <div className="overflow-x-auto">
      <table className="min-w-full">
        <thead>
          <tr className="border-b border-gray-200">
            {['Name', 'Department', 'Date Created', 'Status'].map((title, i) => (
              <th key={i} className="py-3 px-3 text-left text-sm font-medium text-gray-700">
                <div className="flex items-center justify-between">
                  {title}
                  <button className="text-gray-400">
                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3 0L6 3H0L3 0Z" fill="#6B7280" />
                      <path d="M3 10L0 7H6L3 10Z" fill="#6B7280" />
                    </svg>
                  </button>
                </div>
              </th>
            ))}
            <th className="py-3 px-3 text-left text-sm font-medium text-gray-700">Action</th>
          </tr>
        </thead>
        <tbody>
          {employees.length ? (
            employees.map((emp) => {
              const formattedDate = emp.created_at
                ? format(parseISO(emp.created_at), 'MM/dd/yyyy')
                : 'N/A';
              const status = emp.status?.name ?? 'N/A';
              const department = emp.department?.name ?? 'N/A';
              return (
                <tr key={emp.id} className="border-b border-gray-100 hover:bg-gray-50">
                  <td className="py-3 px-3">
                    <div className="flex items-center">
                      <div className="w-8 h-8 rounded-full bg-gray-300" />
                      <span className="ml-3 text-sm text-gray-800">{formatName(emp)}</span>
                    </div>
                  </td>
                  <td className="py-3 px-3 text-sm text-gray-500">
                    {department ?? 'N/A'}
                  </td>
                  <td className="py-3 px-3 text-sm text-gray-800">{formattedDate}</td>
                  <td className="py-3 px-3 align-middle">
                    <span className={`py-1 px-2 text-xs rounded-full inline-block ${getStatusClass(status)}`}>
                      {status ?? 'N/A'}
                    </span>
                  </td>
                  <td className="py-3 px-3 relative">
                    <button onClick={() => toggleActionMenu(emp.id)} className="text-gray-400 hover:text-gray-600">
                      <MoreHorizontal size={16} />
                    </button>

                    {openActionMenu === emp.id && (
                      <div className="absolute right-6 top-6 w-40 rounded-3xl shadow-xl bg-white z-10 py-2 border border-gray-100">
                        <ActionItem icon={<Edit size={16} />} color="teal" label="Edit" onClick={() => handleEdit(emp.id)} />
                        <ActionItem icon={<Archive size={16} />} color="yellow" label="Archive" onClick={() => handleDelete(emp.id)} />
                        <ActionItem icon={<Eye size={18} />} color="blue" label="View" onClick={() => handleView(emp.id)} />
                      </div>
                    )}
                  </td>
                </tr>
              );
            })
          ) : (
            <tr>
              <td colSpan={5} className="py-8 text-center text-gray-500">
                No employees found. Try adjusting your filters or add a new Employee.
              </td>
            </tr>
          )}
        </tbody>
      </table>
    </div>
  );
};

const ActionItem = ({
  icon,
  label,
  onClick,
  color,
}: {
  icon: React.ReactNode;
  label: string;
  onClick: () => void;
  color: string;
}) => (
  <button
    className="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left"
    onClick={onClick}
  >
    <div className={`w-8 h-8 bg-${color}-500 text-white rounded flex items-center justify-center mr-3`}>
      {icon}
    </div>
    {label}
  </button>
);

export default EmployeeTable;
