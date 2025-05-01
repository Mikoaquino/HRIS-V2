<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EmployeeStatusCollection; 
use App\Models\EmployeeStatus;
use Illuminate\Http\Request;

class EmployeeStatusController extends Controller
{
    public function index(Request $request)
    {
        $statuses = EmployeeStatus::all();

        return new EmployeeStatusCollection($statuses);
    }
}
