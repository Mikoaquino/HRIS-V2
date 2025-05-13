import React, { useEffect, useState, useCallback } from 'react';
import { useUsers, deleteUser, updateUser } from './hooks/useUser';
import { ChevronDown, MoreHorizontal, CircleCheckBig, X } from 'lucide-react';
import UserTable from './components/UserTable';
import EditUser from './components/EditUser';
import CreateUser from './components/CreateUser';

const AccountManagement: React.FC = () => {
  const [currentPage, setCurrentPage] = useState(1);
  const [perPage, setPerPage] = useState(10);
  const [openActionMenu, setOpenActionMenu] = useState<number | null>(null);
  const [editingUser, setEditingUser] = useState<any>(null);
  const [creatingUser, setCreatingUser] = useState<boolean>(false);
  const [showSuccess, setShowSuccess] = useState(false);
  const [successAction, setSuccessAction] = useState<'create' | 'edit' | 'delete' | null>(null);
  const [userToDelete, setUserToDelete] = useState<number | null>(null);
  const [showDeleteModal, setShowDeleteModal] = useState(false);
  const [isSubmitting, setIsSubmitting] = useState(false);

  const token = sessionStorage.getItem('token');
  const authenticatedUserId = Number(sessionStorage.getItem('user_id') || '0');

  console.log(sessionStorage.getItem('user_id'));

  const { users, meta, loading, refetchUsers, createUser } = useUsers(currentPage, token, perPage);

  useEffect(() => {
    if (!loading && meta && users.length === 0 && currentPage > 1 && meta.total > 0) {
      setCurrentPage(1);
    }
  }, [users, loading, meta, currentPage]);

  const toggleActionMenu = (userId: number | null) => {
    setOpenActionMenu((prev) => (prev === userId ? null : userId));
  };

  const handleEdit = (userId: number) => {
    const user = users.find(u => u.id === userId);
    if (user) {
      setEditingUser({
        id: user.id,
        email: user.email || '',
        employee_id: user.employee_id || '',
        status: user.status || 'active',
        password: '',
      });
    }
  };

  const handleUpdate = useCallback(async (formData: any) => {
    if (!editingUser || !token) return;

    const payload: Partial<typeof formData> = {};

    if (formData.email !== editingUser.email) payload.email = formData.email;
    if (formData.status.toLowerCase() !== editingUser.status) payload.status = formData.status.toLowerCase();
    if (Number(formData.employee_id) !== Number(editingUser.employee_id)) payload.employee_id = Number(formData.employee_id);
    if (formData.password?.trim()) payload.password = formData.password;

    if (Object.keys(payload).length === 0) {
      setEditingUser(null); 
      return;
    }

    setIsSubmitting(true);

    try {
      await updateUser(editingUser.id, payload, token);
      setEditingUser(null);
      setSuccessAction('edit');
      setShowSuccess(true);
      setTimeout(() => {
        setShowSuccess(false);
        setSuccessAction(null);
      }, 2000);
      await refetchUsers();
    } catch (err) {
      console.error('Failed to update user:', err);
      alert('Failed to update user. Please check console for details.');
    } finally {
      setIsSubmitting(false);
    }
  }, [editingUser, token, refetchUsers]);

  const handleDelete = (userId: number) => {
    setUserToDelete(userId);
    setShowDeleteModal(true);
  };

  const confirmDelete = async () => {
    if (!token || userToDelete === null) return;
    try {
      setIsSubmitting(true);
      await deleteUser(userToDelete, token);
      await refetchUsers();
      setSuccessAction('delete');
      setShowSuccess(true);
      setTimeout(() => setShowSuccess(false), 3000);
    } catch (error) {
      console.error("Failed to delete user:", error);
      setShowSuccess(false);
      setSuccessAction(null);
    }
    setShowDeleteModal(false);
    setUserToDelete(null);
    setOpenActionMenu(null);
    setIsSubmitting(false);
  };

  const calculatePaginationInfo = () => {
    if (!meta || users.length === 0) return "No entries to display";
    return `Showing ${meta.from} to ${meta.to} of ${meta.total} entries`;
  };

  const filteredUsers = users.map(user => ({ employee_id: user.employee_id ?? null }));

  return (
    <div className="bg-white p-6 rounded-lg shadow-sm w-full min-h-screen">
      <h5 className="text-gray-800 text-lg font-semibold mb-6">ACCOUNT MANAGEMENT</h5>

      {creatingUser && (
        <CreateUser
          isOpen={creatingUser}
          onClose={() => setCreatingUser(false)}
          users={filteredUsers}
          onSubmit={async (formData) => {
            try {
              await createUser(formData);
              setCreatingUser(false);
              setSuccessAction('create');
              setShowSuccess(true);
              setTimeout(() => {
                setShowSuccess(false);
                setSuccessAction(null);
              }, 3000);
            } catch (err) {
              console.error("Failed to create user:", err);
            }
          }}
        />
      )}

      {editingUser && (
        <EditUser
          isOpen={!!editingUser}
          onClose={() => setEditingUser(null)}
          user={editingUser}
          users={filteredUsers.filter(u => u.employee_id !== editingUser.employee_id)}
          onSubmit={handleUpdate}
          isSubmitting={isSubmitting}
        />
      )}

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
              {successAction === 'create' && 'Account created successfully! Please check the entered email to proceed with login.'}
              {successAction === 'edit' && 'User account has been updated successfully!'}
              {successAction === 'delete' && 'User account has been deleted successfully!'}
            </p>
          </div>
        </div>
      )}

    {showDeleteModal && (
      <div className="fixed inset-0 bg-black/50 flex items-center justify-center z-[1025]">
        <div className="bg-white rounded-md shadow-lg px-8 py-6 max-w-sm w-full text-center">
          <div className="flex justify-center items-center mb-4">
            <div className="w-16 h-16 rounded-full border-3 border-red-500 flex items-center justify-center">
              <X className="text-red-500 w-8 h-8" />
            </div>
          </div>
          <h2 className="text-red-600 text-lg font-semibold mb-2">Delete Employee</h2>
          <p className="text-gray-600 text-sm mb-6">
            Are you sure you want to delete this Employee? This process cannot be undone.
          </p>
          <hr className="border-t border-gray-200 mb-6" />
          <div className="flex justify-center gap-4">
            <button
              onClick={() => {
                setShowDeleteModal(false);
                setUserToDelete(null);
              }}
              className="bg-gray-200 hover:bg-gray-400 text-gray-800 px-4 py-1.5 rounded-md text-sm"
            >
              Cancel
            </button>
            <button
              onClick={confirmDelete}
              disabled={isSubmitting}
              className="px-4 py-2 text-sm text-white bg-red-500 hover:bg-red-600 rounded-md disabled:opacity-60 disabled:cursor-not-allowed"
            >
              {isSubmitting ? 'Deleting...' : 'Delete'}
            </button>
          </div>
        </div>
      </div>
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
          <button
            onClick={() => setCreatingUser(true)}
            className="bg-teal-500 hover:bg-teal-600 text-white px-4 py-1.5 rounded-md text-sm cursor-pointer"
          >
            Add Account
          </button>
        </div>
      </div>

      {loading ? (
        <p className="text-gray-500 flex justify-center items-center mt-10">Loading users...</p>
      ) : (
        <>
          <UserTable
            users={users.filter(user => user.id !== authenticatedUserId)}
            openActionMenu={openActionMenu}
            toggleActionMenu={toggleActionMenu}
            handleEdit={handleEdit}
            handleDelete={handleDelete}
          />

          <div className="flex justify-between items-center mt-4">
            <div className="text-sm text-gray-500">
              {calculatePaginationInfo()}
            </div>
            <div className="flex items-center space-x-2">
              <button
                onClick={() => currentPage > 1 && setCurrentPage(currentPage - 1)}
                disabled={currentPage === 1}
                className={`py-1 px-4 rounded-md text-xs ${currentPage === 1 ? 'bg-gray-200 text-gray-400' : 'bg-gray-300 text-gray-700'}`}
              >
                Previous
              </button>

              {meta && Array.from({ length: meta.last_page }, (_, i) => i + 1).map((page) => (
                <button
                  key={page}
                  onClick={() => setCurrentPage(page)}
                  className={`py-1 px-3 rounded-md text-xs ${currentPage === page ? 'bg-teal-500 text-white' : 'bg-gray-200 text-gray-700'}`}
                >
                  {page}
                </button>
              ))}

              <button
                onClick={() => currentPage < (meta?.last_page ?? 1) && setCurrentPage(currentPage + 1)}
                disabled={currentPage >= (meta?.last_page ?? 1)}
                className={`py-1 px-4 rounded-md text-xs ${currentPage >= (meta?.last_page ?? 1) ? 'bg-gray-200 text-gray-400' : 'bg-gray-300 text-gray-700'}`}
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

export default AccountManagement;