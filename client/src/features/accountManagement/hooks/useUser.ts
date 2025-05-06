import { useEffect, useState, useCallback } from 'react';
import axios from 'axios';

export interface User {
  created_at: string | null;
  id: number;
  name: string;
  email: string;
  employee_id: number | null;
  permissions: 'User' | 'Admin';
  addedDate: string;
  status: 'Active' | 'Inactive';
  deleted_at?: string | null;
}

interface PaginationMeta {
  to: any;
  from: any;
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

interface PaginatedUserResponse {
  data: User[];
  meta: PaginationMeta;
}

export const useUsers = (
  page: number,
  token: string | null,
  perPage: number
) => {
  const [users, setUsers] = useState<User[]>([]);
  const [meta, setMeta] = useState<PaginationMeta | null>(null);
  const [loading, setLoading] = useState<boolean>(false);

  const fetchUsers = useCallback(async () => {
    if (!token) return;

    setLoading(true);
    try {
      const response = await axios.get<PaginatedUserResponse>(
        `http://127.0.0.1:8000/api/v1/users?page=${page}&per_page=${perPage}`,
        {
          headers: {
            Authorization: `Bearer ${token}`,
          },
        }
      );

      setUsers(response.data.data);
      setMeta(response.data.meta);
    } catch (err) {
      
      if (axios.isAxiosError(err) && (err.response?.status === 401 || err.response?.status === 403)) {
        sessionStorage.removeItem('token');
        sessionStorage.removeItem('user_id');
        window.location.href = '/login';
      }
    } finally {
      setLoading(false);
    }
  }, [page, perPage, token]);

  useEffect(() => {
    fetchUsers();
  }, [fetchUsers]);

  // Create User
  const createUser = async (data: {
    email: string;
    password: string;
    status: 'Active' | 'Inactive';
    employee_id: number | null;
  }) => {
    if (!token) throw new Error('Token not found');

    try {
      const response = await axios.post(
        'http://127.0.0.1:8000/api/v1/users',
        data,
        {
          headers: {
            Authorization: `Bearer ${token}`,
          },
        }
      );
      await fetchUsers();
      return response.data;
    } catch (error) {
      throw error;
    }
  };

  return {
    users,
    meta,
    loading,
    refetchUsers: fetchUsers,
    createUser,
  };
};

export const deleteUser = async (id: number, token: string | null) => {
  if (!token) throw new Error('Token not found');

  try {
    await axios.delete(`http://127.0.0.1:8000/api/v1/users/${id}`, {
      headers: {
        Authorization: `Bearer ${token}`,
        Accept: 'application/json', // Can remove this line, the backend handles it automatically. Practice lang
      },
    });
  } catch (error) {
    throw error;
  }
};

// Update User
export const updateUser = async (
  id: number,
  data: Partial<User>,
  token: string
) => {
  if (!token) throw new Error('Token not found');

  try {
    const response = await axios.patch(
      `http://127.0.0.1:8000/api/v1/users/${id}`,
      data,
      {
        headers: {
          Authorization: `Bearer ${token}`,
          Accept: 'application/json', // Can remove this line, the backend handles it automatically. Practice lang
          'Content-Type': 'application/json',
        },
      }
    );
    return response.data;
  } catch (error: any) {
    throw error;
  }
};
