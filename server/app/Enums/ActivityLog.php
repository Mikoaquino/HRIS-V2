<?php

namespace App\Enums;

enum ActivityLog: string
{
    case AUTH     = 'auth';
    case EMPLOYEE = 'employee';
    case USER     = 'user';
}
