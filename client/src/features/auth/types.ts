export interface LoginPayload {
  email: string;
  password: string;
}


export interface User {
  id: number;
  email: string;
  employee_id: number;
  status: 'active' | 'inactive';
  remember_token?: string | null;
  created_at: string;
  updated_at: string;
  deleted_at?: string | null;
}

export interface AuthResponse {
  user: User;
  access_token: string;
  refresh_token?: string;
}
