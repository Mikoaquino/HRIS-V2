import React, { useEffect, useState, lazy, Suspense } from 'react';
import { Eye, EyeOff } from 'lucide-react';
import axios from 'axios';

const EmployeeSelector = lazy(() => import('./EmployeeSelector'));

interface EditUserProps {
  isOpen: boolean;
  onClose: () => void;
  user: any;
  users: any[];
  onSubmit: (data: any, original: any) => void;
  isSubmitting: boolean;
}

const EditUser: React.FC<EditUserProps> = ({
  isOpen,
  onClose,
  user,
  users: userList,
  onSubmit,
  isSubmitting,
}) => {
  const [showEmployeeSelector, setShowEmployeeSelector] = useState(false);
  const [formData, setFormData] = useState({
    email: '',
    password: '',
    status: 'active',
    employee_id: null as number | null,
  });
  const [showPassword, setShowPassword] = useState(false);
  const [selectedEmployeeName, setSelectedEmployeeName] = useState('');
  const [loadingEmployeeName, setLoadingEmployeeName] = useState(false);
  const token = sessionStorage.getItem('token')
  
  useEffect(() => {
    if (user) {
      setFormData({
        email: user.email,
        password: '',
        status: user.status,
        employee_id: user.employee_id,
      });

      fetchEmployeeName();
    }
  }, [user]);

  const fetchEmployeeName = async () => {
    if (user?.employee_id) {
      setLoadingEmployeeName(true);
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/v1/employees/${user.employee_id}`, {
          headers: {
            Authorization: `Bearer ${token}`,
          },
          validateStatus: (status) => status < 500,
        });

        if (response.status === 302) {

          const employee = response.data.data;
          if (employee) {
            const name = employee.first_name && employee.last_name
              ? `${employee.first_name} ${employee.last_name}`
              : `Employee ID: ${user.employee_id} (Name not available)`;
            setSelectedEmployeeName(name);
          } else {
            setSelectedEmployeeName(`Employee ID: ${user.employee_id} (not found)`);
          }
          return;
        }

        const employee = response.data.data;
        if (employee) {
          const name = employee.first_name && employee.last_name
            ? `${employee.first_name} ${employee.last_name}`
            : `Employee ID: ${user.employee_id} (Name not available)`;
          setSelectedEmployeeName(name);
        } else {
          setSelectedEmployeeName(`Employee ID: ${user.employee_id} (not found)`);
        }
      } catch (error) {
        setSelectedEmployeeName(`Employee ID: ${user.employee_id}`);
      } finally {
        setLoadingEmployeeName(false);
      }
    } else {
      setSelectedEmployeeName('');
    }
  };

  if (!isOpen) return null;

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>) => {
    setFormData((prev) => ({ ...prev, [e.target.name]: e.target.value }));
  };

  const handleEmployeeSelect = (id: number, name: string) => {
    setFormData((prev) => ({ ...prev, employee_id: id }));
    setSelectedEmployeeName(name);
    setShowEmployeeSelector(false);
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();

    if (!formData.email || !formData.status || !formData.employee_id) {
      alert('All fields except password are required.');
      return;
    }

    const dataToSend: any = {
      email: formData.email,
      status: formData.status.toLowerCase(),
      employee_id: Number(formData.employee_id),
    };

    if (formData.password.trim() !== '') {
      dataToSend.password = formData.password;
    }

    try {
      onSubmit(dataToSend, user);
    } catch (err) {
      alert('Failed to update user ❌');
    }
  };

  // Validations
  const isEmailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email);
  const isPasswordValid =
    formData.password === '' ||
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/.test(formData.password);
  const isFormValid = isEmailValid && isPasswordValid && formData.status && formData.employee_id;

  return (
    <div className="fixed inset-0 bg-black/50 flex justify-center items-center z-[1025]">
      <div className="bg-white rounded-lg shadow-lg w-96 p-8">
        <h2 className="text-2xl font-semibold text-gray-800 mb-6">Edit User</h2>

        <form onSubmit={handleSubmit} className="space-y-5 text-sm">

          <div>
            <label className="block text-gray-700 mb-1">Email</label>
            <input
              type="email"
              name="email"
              value={formData.email}
              onChange={handleChange}
              required
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
              placeholder="Enter email"
            />
          </div>

          <div>
            <label className="block text-gray-700 mb-1">Password</label>
            <div className="relative">
              <input
                type={showPassword ? 'text' : 'password'}
                name="password"
                value={formData.password}
                onChange={handleChange}
                className="w-full px-4 py-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
                placeholder="Leave blank to keep current password"
              />
              <button
                type="button"
                onClick={() => setShowPassword(!showPassword)}
                tabIndex={-1}
                className="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700 focus:outline-none"
              >
                {showPassword ? <EyeOff size={18} /> : <Eye size={18} />}
              </button>
            </div>
            <p className="mt-1 text-[8px] text-gray-500">
              <span className="text-red-500">Note:</span> Password must contain at least 1 uppercase letter, 1 lowercase letter, 1 number, 1 special character, and be at least 8 characters long.
            </p>
          </div>

          <div>
            <label className="block text-gray-700 mb-1">Status</label>
            <select
              name="status"
              value={formData.status}
              onChange={handleChange}
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
            >
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>

          <div>
            <label className="block text-gray-700 mb-1">Employee</label>

            {formData.employee_id && !showEmployeeSelector && (
              <div className="mb-2 p-2 bg-teal-100 rounded-md text-sm flex justify-between items-center">
                <span className="text-gray-700">
                  {loadingEmployeeName
                    ? 'Fetching employee name...'
                    : selectedEmployeeName
                  }
                </span>
                <button
                  type="button"
                  className="text-teal-700 hover:text-teal-900"
                  onClick={() => setShowEmployeeSelector(true)}
                >
                  Change
                </button>
              </div>
            )}

            {!formData.employee_id && !showEmployeeSelector &&(
              <button
                type="button"
                onClick={() => setShowEmployeeSelector(true)}
                className="w-full border border-gray-300 rounded-md px-4 py-2 text-sm text-left bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-teal-500"
              >
                Select an employee...
              </button>
            )}

            {showEmployeeSelector && (
              <Suspense fallback={<div className="text-center py-4">Loading employee selector...</div>}>
                <EmployeeSelector
                  users={userList.filter((u) => u.id !== user.id)}
                  onSelect={handleEmployeeSelect}
                  onClose={() => setShowEmployeeSelector(false)}
                  initialEmployeeId={user.employee_id}
                />
              </Suspense>
            )}
          </div>

          <div className="flex justify-end space-x-2 pt-2">
            <button
              type="button"
              onClick={onClose}
              className="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 hover:cursor-pointer"
            >
              Cancel
            </button>
            <button
              type="submit"
              disabled={isSubmitting || !isFormValid}
              className="px-4 py-2 rounded-lg bg-teal-600 text-white hover:bg-teal-700 disabled:opacity-60 disabled:cursor-not-allowed hover:cursor-pointer"
            >
              {isSubmitting ? 'Updating...' : 'Update'}
            </button>
          </div>

        </form>
      </div>
    </div>
  );
};

export default EditUser;