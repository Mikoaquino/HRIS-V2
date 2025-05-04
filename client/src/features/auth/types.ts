export interface LoginPayload {
  email: string;
  password: string;
}

export type Role = 'admin' | 'hr' | 'employee';

export interface User {
  id: number;
  name: string;
  email: string;
  role: Role;
}

export interface AuthResponse {
  user: User;
  access_token: string;
  refresh_token?: string;
}