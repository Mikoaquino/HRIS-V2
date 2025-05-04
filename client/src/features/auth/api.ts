// src/features/auth/api.ts
import axios, { AxiosError, InternalAxiosRequestConfig } from 'axios';

const API = axios.create({
  baseURL: 'http://localhost:8000/api/v1/auth',
});

// Attach access token
API.interceptors.request.use((config: InternalAxiosRequestConfig) => {
  const token = localStorage.getItem('token');
  if (token) {
    config.headers = config.headers || {};
    config.headers['Authorization'] = `Bearer ${token}`;
  }
  return config;
});

// Handle 401 with refresh
API.interceptors.response.use(
  response => response,
  async (error: AxiosError) => {
    const originalRequest: any = error.config;

    if (
      error.response?.status === 401 &&
      !originalRequest._retry &&
      localStorage.getItem('refresh_token')
    ) {
      originalRequest._retry = true;
      try {
        const refreshToken = localStorage.getItem('refresh_token');
        const res = await axios.post(`${API.defaults.baseURL}/refresh`, {
          refresh_token: refreshToken,
        });

        const { access_token, refresh_token: newRefreshToken } = res.data;
        if (access_token) localStorage.setItem('token', access_token);
        if (newRefreshToken) localStorage.setItem('refresh_token', newRefreshToken);

        originalRequest.headers['Authorization'] = `Bearer ${access_token}`;
        return API(originalRequest);
      } catch (err) {
        console.error('Token refresh failed:', err);
        localStorage.clear();
        window.location.href = '/login';
        return Promise.reject(err);
      }
    }

    return Promise.reject(error);
  }
);

// Login
export const login = async ({
  email,
  password,
}: {
  email: string;
  password: string;
}) => {
  const response = await API.post('/login', { email, password });
  return response.data;
};

// Logout
export const logout = async () => {
  try {
    await API.post('/logout');
  } catch (error) {
    console.error('Logout failed:', error);
  } finally {
    localStorage.clear();
    window.location.href = '/login';
  }
};
