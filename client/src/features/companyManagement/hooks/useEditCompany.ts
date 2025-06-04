import axios from 'axios';

const API_BASE_URL = import.meta.env.VITE_API_BASE_URL ?? '';

const getAuthHeader = () => {
  const token = sessionStorage.getItem('token');
  return {
    headers: {
      Authorization: `Bearer ${token}`,
      'Content-Type': 'application/json',
    }
  };
};

// Company-related functions
export const fetchCompanyDetails = async (id: string) => {
  const response = await axios.get(
    `${API_BASE_URL}/api/v1/companies/${id}`,
    {
      ...getAuthHeader(),
      validateStatus: (status) => status === 302 || status >= 200 && status < 300,
    }
  );
  return response.data.data;
};

export const updateCompanyDetails = async (id: string, data: any) => {
  const response = await axios.put(
    `${API_BASE_URL}/api/v1/companies/${id}`,
    data,
    getAuthHeader()
  );
  return response.data.data;
};

// Department-related functions
export const fetchCompanyDepartments = async (id: string) => {
  const response = await axios.get(
    `${API_BASE_URL}/api/v1/companies/${id}?load=departments`,
    {
      ...getAuthHeader(),
      validateStatus: (status) => status === 302 || status >= 200 && status < 300,
    }
  );
  return response.data.data.departments;
};

export const fetchDepartmentMembers = async (departmentId: string) => {
  const response = await axios.get(
    `${API_BASE_URL}/api/v1/departments/${departmentId}?load=employees`,
    {
      ...getAuthHeader(),
      validateStatus: (status) => status === 302 || status >= 200 && status < 300,
    }
  );
  return response.data.data;
};

export const createDepartment = async (departmentData: {
  name: string;
  description: string;
  company_id: string;
}) => {
  const response = await axios.post(
    `${API_BASE_URL}/api/v1/departments`,
    departmentData,
    getAuthHeader()
  );
  return response.data.data;
};

export const updateDepartment = async (departmentId: string, departmentData: {
  name: string;
  description: string;
  company_id: string;
}) => {
  const response = await axios.put(
    `${API_BASE_URL}/api/v1/departments/${departmentId}`,
    departmentData,
    getAuthHeader()
  );
  return response.data.data;
};

export const deleteDepartment = async (departmentId: string) => {
  const response = await axios.delete(
    `${API_BASE_URL}/api/v1/departments/${departmentId}`,
    getAuthHeader()
  );
  return response.data;
};