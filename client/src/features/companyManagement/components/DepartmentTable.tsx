import React, { useState, useEffect } from "react";
import {
  useReactTable,
  getCoreRowModel,
  flexRender,
  getPaginationRowModel,
} from "@tanstack/react-table";
import { useParams } from "react-router-dom";
import AddDepartmentModal from "./AddDepartmentModal";
import Pagination from "../../auditTrail/components/Pagination";
import {
  fetchCompanyDepartments,
  createDepartment,
  fetchDepartmentMembers,
  deleteDepartment,
} from "../hooks/useEditCompany";
import { MoreHorizontal, Edit, Trash2, Eye } from "lucide-react";
import axios from "axios";
import ActionItem from "./ActionItem";
interface Department {
  id: string;
  name: string;
  description: string;
  member_count: number;
}

interface Employee {
  id: number;
  first_name: string;
  middle_name: string | null;
  last_name: string;
  suffix: string | null;
}

interface DepartmentWithEmployees {
  id: number;
  name: string;
  employees: Employee[];
}

const DepartmentTable: React.FC = () => {
  const { id } = useParams<{ id: string }>();
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [isMembersModalOpen, setIsMembersModalOpen] = useState(false);
  const [currentDepartment, setCurrentDepartment] =
    useState<DepartmentWithEmployees | null>(null);
  const [data, setData] = useState<Department[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [membersLoading, setMembersLoading] = useState(false);
  const [openActionMenu, setOpenActionMenu] = useState<string | null>(null);
  const [editingDepartment, setEditingDepartment] = useState<Department | null>(
    null
  );

  useEffect(() => {
    const getDepartments = async () => {
      try {
        setLoading(true);
        const departments = await fetchCompanyDepartments(id!);
        setData(departments);
      } catch (err) {
        setError("Failed to load departments");
        console.error(err);
      } finally {
        setLoading(false);
      }
    };

    getDepartments();
  }, [id]);

  const handleAddDepartment = async (
    newDept: Omit<Department, "id" | "member_count">
  ) => {
    try {
      const createdDept = await createDepartment({
        ...newDept,
        company_id: id!,
      });
      setData((prev) => [...prev, { ...createdDept, member_count: 0 }]);
      setIsModalOpen(false);
    } catch (err) {
      console.error("Failed to add department:", err);
    }
  };

  const fetchDepartmentMember = async (departmentId: string) => {
    try {
      setMembersLoading(true);
      const departmentData = await fetchDepartmentMembers(departmentId);
      setCurrentDepartment(departmentData);
      setIsMembersModalOpen(true);
    } catch (err) {
      console.error("Failed to fetch department members:", err);
    } finally {
      setMembersLoading(false);
    }
  };
  const toggleActionMenu = (departmentId: string) => {
    setOpenActionMenu(openActionMenu === departmentId ? null : departmentId);
  };
  const handleDeleteDepartment = async (departmentId: string) => {
    if (window.confirm("Are you sure you want to delete this department?")) {
      try {
        await deleteDepartment(departmentId);
        setData(data.filter((dept) => dept.id !== departmentId));
      } catch (err) {
        console.error("Failed to delete department:", err);
      }
    }
  };

  const columns = [
    {
      accessorKey: "name",
      header: "Department",
    },
    {
      accessorKey: "description",
      header: "Description",
    },
    {
      header: "Members",
      cell: ({ row }: { row: { original: Department } }) => (
        <span
          className="text-black-500 text-center items-center justify-center flex hover:underline cursor-pointer"
          onClick={() => fetchDepartmentMember(row.original.id)}
        >
          {row.original.member_count} View Members
        </span>
      ),
    },
    {
      header: "Action",
      cell: ({ row }: { row: { original: Department } }) => (
        <div className="relative flex items-center justify-center">
          <button
            onClick={() => toggleActionMenu(row.original.id)}
            className="text-gray-400 hover:text-gray-600 cursor-pointer "
          >
            <MoreHorizontal size={16} />
          </button>

          {openActionMenu === row.original.id && (
            <div className="absolute right-0 z-10 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
              <div className="py-1">
                <ActionItem
                  icon={<Edit size={16} />}
                  color="teal"
                  label="Edit"
                  onClick={() => {
                    setEditingDepartment(row.original);
                    setIsModalOpen(true);
                    setOpenActionMenu(null);
                  }}
                />
                <ActionItem
                  icon={<Trash2 size={16} />}
                  color="red"
                  label="Delete"
                  onClick={() => {
                    handleDeleteDepartment(row.original.id);
                    setOpenActionMenu(null);
                  }}
                />
              </div>
            </div>
          )}
        </div>
      ),
    },
  ];

  const table = useReactTable({
    data,
    columns,
    getCoreRowModel: getCoreRowModel(),
    getPaginationRowModel: getPaginationRowModel(),
    initialState: {
      pagination: {
        pageIndex: 0,
        pageSize: 5,
      },
    },
  });

  if (loading) return <div>Loading departments...</div>;
  if (error) return <div className="text-red-500">{error}</div>;

  return (
    <div>
      <div>
        <div className="flex justify-end items-center mb-4">
          {data.length > 0 && (
            <button
              onClick={() => setIsModalOpen(true)}
              className="px-4 py-1 bg-teal-500 text-white rounded hover:bg-green-600 transition"
            >
              Add
            </button>
          )}
        </div>
      </div>
      <div>
        {data.length === 0 ? (
          <div className="text-center py-12">
            <svg
              className="mx-auto h-12 w-12 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth={2}
                d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"
              />
            </svg>
            <h3 className="mt-2 text-lg font-medium text-gray-900">
              No departments
            </h3>
            <p className="mt-1 text-gray-500">
              Get started by creating your first department.
            </p>
            <div className="mt-6">
              <button
                onClick={() => setIsModalOpen(true)}
                className="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
              >
                <svg
                  className="-ml-1 mr-2 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fillRule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clipRule="evenodd"
                  />
                </svg>
                New Department
              </button>
            </div>
          </div>
        ) : (
          <>
            <div className="overflow-x-auto">
              <table className="min-w-full bg-white">
                <thead className="bg-white">
                  {table.getHeaderGroups().map((headerGroup) => (
                    <tr key={headerGroup.id}>
                      {headerGroup.headers.map((header) => (
                        <th
                          key={header.id}
                          className="px-4 py-2 text-center text-gray-600 font-medium border-b border-gray-200"
                        >
                          {flexRender(
                            header.column.columnDef.header,
                            header.getContext()
                          )}
                        </th>
                      ))}
                    </tr>
                  ))}
                </thead>
                <tbody>
                  {table.getRowModel().rows.map((row) => (
                    <tr key={row.id} className="hover:bg-gray-50">
                      {row.getVisibleCells().map((cell) => (
                        <td
                          key={cell.id}
                          className="px-4 py-2 border border-gray-200"
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
            <div></div>
          </>
        )}
        <Pagination
          currentPage={table.getState().pagination.pageIndex + 1}
          perPage={table.getState().pagination.pageSize}
          totalRows={data.length}
          canPreviousPage={table.getCanPreviousPage()}
          canNextPage={table.getCanNextPage()}
          onPageChange={(page) => table.setPageIndex(page - 1)}
          onPreviousPage={() => table.previousPage()}
          onNextPage={() => table.nextPage()}
        />

        <AddDepartmentModal
          isOpen={isModalOpen}
          onClose={() => {
            setIsModalOpen(false);
            setEditingDepartment(null);
          }}
          companyId={id || ""}
          onSuccess={(newDept) => setData([...data, newDept])}
          department={editingDepartment}
          onUpdate={(updatedDept) => {
            setData(
              data.map((dept) =>
                dept.id === updatedDept.id ? updatedDept : dept
              )
            );
          }}
        />

        {/* Members Modal */}
        {isMembersModalOpen && (
          <div className="fixed inset-0 bg-black/50 flex items-center justify-center z-[9999]">
            <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
              <div className="flex justify-between items-center mb-4">
                <h2 className="text-xl font-semibold">
                  {currentDepartment?.name} Members
                </h2>
                <button
                  onClick={() => setIsMembersModalOpen(false)}
                  className="text-gray-500 hover:text-gray-700"
                >
                  ✕
                </button>
              </div>

              <div className="mb-4">
                <p className="font-medium">
                  Department: {currentDepartment?.name}
                </p>
              </div>

              {membersLoading ? (
                <div className="text-center py-4">Loading members...</div>
              ) : (
                <div className="space-y-2">
                  {currentDepartment?.employees.map((employee) => (
                    <div key={employee.id} className="border-b pb-2">
                      <p className="font-medium">
                        {employee.first_name}
                        {employee.middle_name
                          ? ` ${employee.middle_name} `
                          : " "}
                        {employee.last_name}
                        {employee.suffix ? ` ${employee.suffix}` : ""}
                      </p>
                    </div>
                  ))}
                </div>
              )}

              <div className="mt-6 flex justify-end space-x-2">
                <button
                  onClick={() => setIsMembersModalOpen(false)}
                  className="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        )}
      </div>
    </div>
  );
};

export default DepartmentTable;
