import { useState, useCallback } from 'react';
import axios from 'axios';

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

interface PaginationMeta {
  to: any;
  from: any;
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

interface PaginatedEmployeeResponse {
  data: Employee[];
  meta: PaginationMeta;
}

export const useEmployees = (page: number, token: string | null, perPage: number) => {
  const [employees, setEmployees] = useState<Employee[]>([]);
  const [meta, setMeta] = useState<PaginationMeta | null>(null);
  const [loading, setLoading] = useState<boolean>(false);

  const params = new URLSearchParams({
    page: page.toString(),
    per_page: perPage.toString(),
    load: 'employee_status,job_position,department,employment_type',
  });

  const fetchEmployees = useCallback(async () => {
    if (!token) return;
  
    setLoading(true);
    try {
      const response = await axios.get<PaginatedEmployeeResponse>(
        `http://127.0.0.1:8000/api/v1/employees?${params.toString()}`,
        {
          headers: {
            Authorization: `Bearer ${token}`,
          },
        }
      );
  
      setEmployees(response.data.data);
      setMeta(response.data.meta);
    } catch (err) {
    } finally {
      setLoading(false);
    }
  }, [page, perPage, token]);

  return {
    employees,
    meta,
    loading,
    refetchEmployees: fetchEmployees,
  };
};

export const deleteEmployee = async (id: number, token: string | null) => {
  if (!token) throw new Error('Token not found');

  try {
    await axios.delete(`http://127.0.0.1:8000/api/v1/employees/${id}`, {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    });
  } catch (error) {
    throw error;
  }
};