import React from 'react';
import { format, parseISO } from 'date-fns';
import { User } from '../hooks/useUser';
import { Edit, MoreHorizontal, Trash2 } from 'lucide-react';

interface Props {
  users: User[];
  openActionMenu: number | null;
  toggleActionMenu: (id: number) => void;
  handleEdit: (id: number) => void;
  handleDelete: (id: number) => void;
}

const sortIcon = (
  <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 0L6 3H0L3 0Z" fill="#6B7280" />
    <path d="M3 10L0 7H6L3 10Z" fill="#6B7280" />
  </svg>
);

const UserTable: React.FC<Props> = ({
  users,
  openActionMenu,
  toggleActionMenu,
  handleEdit,
  handleDelete,
}) => {
  return (
    <div className="overflow-x-auto">
      <table className="min-w-full">
        <thead>
          <tr className="border-b border-gray-200">
            {['Name', 'Email', 'Permissions', 'Joined Date'].map((title, i) => (
              <th key={i} className="py-3 px-3 text-left text-sm font-medium text-gray-700">
                <div className="flex items-center justify-between">
                  {title}
                  {title !== 'Email' && <button className="text-gray-400">{sortIcon}</button>}
                </div>
              </th>
            ))}
            <th className="py-3 px-3 text-left text-sm font-medium text-gray-700">Action</th>
          </tr>
        </thead>
        <tbody>
          {users.length > 0 ? (
            users.map((user) => {
              const formattedDate = user.created_at ? format(parseISO(user.created_at), 'MM/dd/yyyy') : 'N/A';

              return (
                <tr key={user.id} className="border-b border-gray-100 hover:bg-gray-50">
                  <td className="py-3 px-3">
                    <div className="flex items-center">
                      <div className="w-8 h-8 rounded-full bg-gray-300 flex-shrink-0" />
                      <span className="ml-3 text-sm text-gray-800">{user.name ? 'None' : 'None'}</span>
                    </div>
                  </td>
                  <td className="py-3 px-3 text-sm text-gray-500">{user.email}</td>
                  <td className="py-3 px-3">
                    <span
                      className={`inline-block px-2 py-1 text-xs rounded ${
                        user.permissions === 'Admin'
                          ? 'bg-teal-100 text-teal-800'
                          : 'bg-blue-100 text-blue-800'
                      }`}
                    >
                      {user.permissions ? 'Admin' : 'User'}
                    </span>
                  </td>
                  <td className="py-3 px-3 text-sm text-gray-800">
                    {formattedDate}
                  </td>
                  <td className="py-3 px-3 relative">
                    <button
                      className="text-gray-400 hover:text-gray-600"
                      onClick={() => toggleActionMenu(user.id)}
                    >
                      <MoreHorizontal size={16} />
                    </button>

                    {openActionMenu === user.id && (
                      <div className="absolute right-6 top-6 w-40 rounded-3xl shadow-xl bg-white z-10 py-2 border border-gray-100">
                        <button
                          className="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left"
                          onClick={() => handleEdit(user.id)}
                        >
                          <div className="w-8 h-8 bg-teal-500 text-white rounded flex items-center justify-center mr-3">
                            <Edit size={16} />
                          </div>
                          Edit
                        </button>
                        <button
                          className="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left"
                          onClick={() => handleDelete(user.id)}
                        >
                          <div className="w-8 h-8 bg-red-500 text-white rounded flex items-center justify-center mr-3">
                            <Trash2 size={16} />
                          </div>
                          Delete
                        </button>
                      </div>
                    )}
                  </td>
                </tr>
              );
            })
          ) : (
            <tr>
              <td colSpan={6} className="py-8 text-center text-gray-500">
                No users found. Try adjusting your filters or add a new user.
              </td>
            </tr>
          )}
        </tbody>
      </table>
    </div>
  );
};

export default UserTable;
