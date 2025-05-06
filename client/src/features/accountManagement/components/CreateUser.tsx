import { useEffect, useState, lazy, Suspense } from 'react';
import { Eye, EyeOff } from 'lucide-react';

const EmployeeSelector = lazy(() => import('./EmployeeSelector'));

interface CreateUserProps {
  isOpen: boolean;
  onClose: () => void;
  users: { employee_id: number | null }[];
  onSubmit: (formData: any) => Promise<void>;
}

const CreateUser: React.FC<CreateUserProps> = ({ isOpen, onClose, users, onSubmit }) => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [status, setStatus] = useState<'active' | 'inactive'>('active');
  const [employeeId, setEmployeeId] = useState<number | null>(null);
  const [error, setError] = useState<string>('');
  const [showEmployeeSelector, setShowEmployeeSelector] = useState(false);
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [showPassword, setShowPassword] = useState(false);
  const [employeeName, setEmployeeName] = useState('');

  // Modified to accept both ID and name, like EditUser does
  const handleEmployeeSelect = (id: number, name: string) => {
    setEmployeeId(id);
    setEmployeeName(name);
    setShowEmployeeSelector(false);
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setError('');

    if (!email || !password || !employeeId) {
      setError('All fields are required.');
      return;
    }

    setIsSubmitting(true);

    const formData = {
      email,
      password,
      status,
      employee_id: employeeId,
    };

    try {
      await onSubmit(formData);
      onClose();
    } catch (err: any) {
      setError('Failed to create user. Please try again.');
    } finally {
      setIsSubmitting(false);
    }
  };

  useEffect(() => {
    if (isOpen) {
      // Clear any existing data when the modal is opened
      setEmail('');
      setPassword('');
      setStatus('active');
      setEmployeeId(null);
      setError('');
      setShowEmployeeSelector(false);
      setEmployeeName('');
    }
  }, [isOpen]);

  if (!isOpen) return null;

  // Validations
  const isEmailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  const isPasswordValid = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/.test(password);
  const isFormValid = isEmailValid && isPasswordValid && employeeId !== null;

  return (
    <div className="fixed inset-0 bg-black/50 flex justify-center items-center z-[1025]">
      <div className="bg-white rounded-lg shadow-lg w-96 p-8">
        <h3 className="text-2xl font-semibold text-gray-800 mb-4">Create New User</h3>

        {error && <p className="text-red-500 text-sm mb-4">{error}</p>}

        <form onSubmit={handleSubmit} className="space-y-5 text-sm">
          <div className="mb-4">
            <label className="block text-sm text-gray-700 mb-2">Email</label>
            <input
              type="email"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              className="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500"
              placeholder="Enter email"
              required
            />
          </div>

          <div className="mb-4">
            <label className="block text-sm text-gray-700 mb-2">Password</label>
            <div className="relative">
              <input
                type={showPassword ? 'text' : 'password'}
                value={password}
                onChange={(e) => setPassword(e.target.value)}
                className="w-full pr-10 px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-teal-500"
                placeholder="Enter password"
              />
              <button
                type="button"
                onClick={() => setShowPassword(!showPassword)}
                className="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 focus:outline-none"
                aria-label={showPassword ? 'Hide password' : 'Show password'}
              >
                {showPassword ? <EyeOff size={18} /> : <Eye size={18} />}
              </button>
            </div>
            <p className="mt-1 text-[8px] text-gray-500">
              <span className="text-red-500">Note:</span> Password must contain at least 1 uppercase letter, 1 lowercase letter, 1 number, 1 special character, and be at least 8 characters long.
            </p>
          </div>

          <div className="mb-4">
            <label className="block text-sm text-gray-700 mb-2">Status</label>
            <select
              value={status}
              onChange={(e) => setStatus(e.target.value as 'active' | 'inactive')}
              className="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500"
            >
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>

          <div className="mb-4">
            <label className="block text-sm text-gray-700 mb-2">Employee</label>

            {employeeId && !showEmployeeSelector && (
              <div className="mb-2 p-2 bg-teal-100 rounded-md text-sm flex justify-between items-center">
                <span>{employeeName}</span>
                <button
                  type="button"
                  className="text-teal-700 hover:text-teal-900"
                  onClick={() => {
                    setEmployeeId(null);
                    setEmployeeName('');
                    setShowEmployeeSelector(true);
                  }}
                >
                  Change
                </button>
              </div>
            )}

            {!employeeId && !showEmployeeSelector && (
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
                  users={users}
                  onSelect={handleEmployeeSelect}
                  onClose={() => setShowEmployeeSelector(false)} initialEmployeeId={null}                />
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
              className={`px-4 py-2 rounded-lg bg-teal-600 text-white hover:bg-teal-700 disabled:opacity-60 disabled:cursor-not-allowed hover:cursor-pointer ${
                isFormValid
                  ? 'bg-teal-500 hover:bg-teal-600'
                  : 'bg-teal-400 disabled:opacity-60 disabled:cursor-not-allowed'
              }`}
            >
              {isSubmitting ? 'Creating...' : 'Create'}
            </button>
          </div>

        </form>
      </div>
    </div>
  );
};

export default CreateUser;