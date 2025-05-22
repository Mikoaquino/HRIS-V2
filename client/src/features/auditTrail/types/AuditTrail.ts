export interface Causer {
    id: number;
    first_name: string;
    last_name: string;
  }
  
  export interface Activity {
    id: number;
    event: string;
    log_name: string;
    description: string;
    causer: Causer | null;
    created_at: string;
    updated_at: string;
    user_name?: string;
    user_role?: string;
  }
  

  
  export interface FormattedDateTime {
    day: string;
    time: string;
  }
  