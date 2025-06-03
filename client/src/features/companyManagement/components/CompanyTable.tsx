import React from "react";
import { Edit, MoreHorizontal, Delete, Eye } from "lucide-react";
import { useNavigate } from "react-router-dom";

export interface Company {
  id: number;
  name: string;
  type: string;
  address: string;
  contact_number: number;
}

interface Props {
  company: Company[];
  openActionMenu: number | null;
  toggleActionMenu: (id: number) => void;
  handleDelete: (id: number) => void;
  handleView: (id: number) => void;
}

const CompanyTable: React.FC<Props> = ({
  company,
  openActionMenu,
  toggleActionMenu,
  handleDelete,
  handleView,
}) => {
  const navigate = useNavigate();

  return (
    <div className="overflow-x-auto">
      <table className="min-w-full">
        <thead>
          <tr className="border-b border-gray-200">
            {["Name", "Address", "Type", "Contact"].map((title, i) => (
              <th
                key={i}
                className="py-3 px-3 text-left text-sm font-medium text-gray-700"
              >
                <div className="flex items-center justify-between">
                  {title}
                  <button className="text-gray-400">
                    <svg
                      width="6"
                      height="10"
                      viewBox="0 0 6 10"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M3 0L6 3H0L3 0Z" fill="#6B7280" />
                      <path d="M3 10L0 7H6L3 10Z" fill="#6B7280" />
                    </svg>
                  </button>
                </div>
              </th>
            ))}
            <th className="py-3 px-3 text-left text-sm font-medium text-gray-700">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          {company.length ? (
            company.map((comp) => {
              const Name = comp.name ?? "N/A";
              const Type = comp.type ?? "N/A";
              const Address = comp.address ?? "N/A";
              const Contact = comp.contact_number ?? "N/A";
              return (
                <tr
                  key={comp.id}
                  className="border-b border-gray-100 hover:bg-gray-50"
                >
                  <td className="py-3 px-3 align-top max-w-[180px] break-words whitespace-normal">
                    <div className="flex items-start min-w-0">
                      <div className="w-8 h-8 rounded-full bg-gray-300 flex-shrink-0" />
                      <span className="ml-3 text-sm text-gray-500 break-words whitespace-normal min-w-0 block">
                        {Name ?? "N/A"}
                      </span>
                    </div>
                  </td>
                  <td className="py-3 px-3 text-sm text-gray-500 align-top max-w-[220px] break-words whitespace-normal">
                    {Address ?? "N/A"}
                  </td>
                  <td className="py-3 px-3 text-sm text-gray-500 break-words whitespace-normal min-w-0 align-top">
                    {Type ?? "N/A"}
                  </td>
                  <td className="py-3 px-3 text-sm text-gray-500 break-words whitespace-normal min-w-0 align-top">
                    {Contact ?? "N/A"}
                  </td>
                  <td className="py-3 px-3 relative">
                    <button
                      onClick={() => toggleActionMenu(comp.id)}
                      className="text-gray-400 hover:text-gray-600 cursor-pointer"
                    >
                      <MoreHorizontal size={16} />
                    </button>

                    {openActionMenu === comp.id && (
                      <div className="absolute right-6 top-6 w-40 rounded-3xl shadow-xl bg-white z-10 py-2 border border-gray-100">
                        <ActionItem
                          icon={<Edit size={16} />}
                          color="teal"
                          label="Edit"
                          onClick={() => navigate(`/company/edit/${comp.id}`)}
                        />
                        <ActionItem
                          icon={<Delete size={16} />}
                          color="red"
                          label="Delete"
                          onClick={() => handleDelete(comp.id)}
                        />
                        <ActionItem
                          icon={<Eye size={18} />}
                          color="blue"
                          label="View"
                          onClick={() => handleView(comp.id)}
                        />
                      </div>
                    )}
                  </td>
                </tr>
              );
            })
          ) : (
            <tr>
              <td colSpan={5} className="py-8 text-center text-gray-500">
                No company found. Try adding a new Company.
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
    className="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left cursor-pointer"
    onClick={onClick}
  >
    <div
      className={`w-8 h-8 bg-${color}-500 text-white rounded flex items-center justify-center mr-3`}
    >
      {icon}
    </div>
    {label}
  </button>
);

export default CompanyTable;
