import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { useInView } from 'react-intersection-observer';

interface Employee {
  id: number;
  first_name: string;
  last_name: string;
  status: string;
  deleted_at: string | null;
}

interface EmployeeSelectorProps {
  users: any[];
  onSelect: (id: number, name: string) => void;
  onClose: () => void;
  initialEmployeeId: number | null;
}

const EmployeeSelector: React.FC<EmployeeSelectorProps> = ({ onSelect, onClose }) => {
  const [employees, setEmployees] = useState<Employee[]>([]);
  const [page, setPage] = useState(1);
  const [hasMore, setHasMore] = useState(true);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState<string | null>(null);
  const [searchTerm, setSearchTerm] = useState('');
  const [debouncedSearchTerm, setDebouncedSearchTerm] = useState('');
  const { ref: intersectionRef, inView } = useInView({ threshold: 1.0 });

  const token = sessionStorage.getItem('token');

  useEffect(() => {
    const handler = setTimeout(() => {
      setDebouncedSearchTerm(searchTerm);
    }, 500);

    return () => {
      clearTimeout(handler);
    };
  }, [searchTerm]);

  const fetchEmployees = async (reset = false) => {
    if (loading || (!hasMore && !reset)) return;

    setLoading(true);
    try {
      const response = await axios.get('http://127.0.0.1:8000/api/v1/employees', {
        params: {
          page: reset ? 1 : page,
          per_page: 15,
          q: debouncedSearchTerm || undefined,
        },
        headers: { Authorization: `Bearer ${token}` },
      });

      const data = response.data;
      const newEmployees = data.data || [];
      const meta = data.meta || {};

      setEmployees((prev) => (reset ? newEmployees : [...prev, ...newEmployees]));

      // Update the page number
      setPage(reset ? 2 : page + 1);

      if (meta.current_page && meta.last_page) {
        setHasMore(meta.current_page < meta.last_page);
      } else {
        setHasMore(newEmployees.length === 15);
      }
    } catch (err) {
      console.error('Error fetching employees:', err);
      setError('Failed to load employees. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchEmployees(true);
  }, [debouncedSearchTerm]);

  useEffect(() => {
    if (inView && hasMore && !loading) {
      fetchEmployees();
    }
  }, [inView]);

  const handleSearchChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setSearchTerm(e.target.value);
    setPage(1);
    setHasMore(true);
  };

  const handleEmployeeSelect = (emp: Employee) => {
    onSelect(emp.id, `${emp.first_name} ${emp.last_name}`);
    onClose();
  };

  return (
    <div className="relative mt-2 bg-white border border-gray-300 rounded-md shadow-lg">
      <div className="p-2">
        <input
          type="text"
          placeholder="Search employees..."
          value={searchTerm}
          onChange={handleSearchChange}
          className="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-teal-500"
          autoFocus
        />
      </div>
      <div className="max-h-25 overflow-y-auto bg-white border-t border-gray-200">
        {error && (
          <div className="p-3 text-sm text-red-500 bg-red-50 text-center">
            {error}
          </div>
        )}
        {employees.length === 0 && !loading && !error ? (
          <div className="p-3 text-sm text-gray-500 text-center">No employees found</div>
        ) : (
          <>
            {employees.map((emp) => (
              <div
                key={emp.id}
                className="px-4 py-2 text-sm cursor-pointer hover:bg-teal-100"
                onClick={() => handleEmployeeSelect(emp)}
              >
                {emp.first_name} {emp.last_name}
              </div>
            ))}
            <div ref={intersectionRef} className="text-center py-2 text-sm text-gray-500">
              {loading ? 'Loading more employees...' : !hasMore && 'No more employees to show'}
            </div>
          </>
        )}
      </div>
    </div>
  );
};

export default EmployeeSelector;