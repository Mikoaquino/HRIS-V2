import { useEffect, useState, useCallback } from 'react';
import axios from 'axios';

export interface Company {
  id: number;
  name: string;
  type: string;
  address: string;
  contact_number: string;
  created_at?: string | null;
  updated_at?: string | null;
}

interface PaginationMeta {
  to: any;
  from: any;
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

interface PaginatedCompanyResponse {
  data: Company[];
  meta: PaginationMeta;
}

export const useCompanies = (
  page: number,
  token: string | null,
  perPage: number
) => {
  const [companies, setCompanies] = useState<Company[]>([]);
  const [meta, setMeta] = useState<PaginationMeta | null>(null);
  const [loading, setLoading] = useState<boolean>(false);

  const fetchCompanies = useCallback(async () => {
    if (!token) return;

    setLoading(true);
    try {
      const response = await axios.get<PaginatedCompanyResponse>(
        `http://127.0.0.1:8000/api/v1/companies?page=${page}&per_page=${perPage}`,
        {
          headers: {
            Authorization: `Bearer ${token}`,
          },
        }
      );

      setCompanies(response.data.data);
      setMeta(response.data.meta);
    } catch (err) {
      console.error('Failed to fetch companies:', err);
      
      if (axios.isAxiosError(err) && (err.response?.status === 401 || err.response?.status === 403)) {
        // Clear authentication
        sessionStorage.removeItem('token');
        sessionStorage.removeItem('company_id');
        // Redirect to login
        window.location.href = '/login';
      }
    } finally {
      setLoading(false);
    }
  }, [page, perPage, token]);

  useEffect(() => {
    fetchCompanies();
  }, [fetchCompanies]);

  // Create Company
  const createCompany = async (data: {
    name: string;
    type: string;
    address: string;
    contact_number: string;
  }) => {
    if (!token) throw new Error('Token not found');

    try {
      const response = await axios.post(
        'http://127.0.0.1:8000/api/v1/companies',
        data,
        {
          headers: {
            Authorization: `Bearer ${token}`,
          },
        }
      );
      await fetchCompanies(); // Refresh company list after creation
      return response.data;
    } catch (error) {
      console.error('Failed to create company:', error);
      throw error;
    }
  };

  return {
    companies,
    meta,
    loading,
    refetchCompanies: fetchCompanies,
    createCompany,
  };
};

export const deleteCompany = async (id: number, token: string | null) => {
  if (!token) throw new Error('Token not found');

  try {
    await axios.delete(`http://127.0.0.1:8000/api/v1/companies/${id}`, {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    });
  } catch (error) {
    console.error('Failed to delete company:', error);
    throw error;
  }
};
