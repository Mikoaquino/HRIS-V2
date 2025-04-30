<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\EmployeeStatus;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeStatusCollection;

class EmployeeStatusController extends Controller
{
    public function index(Request $request): EmployeeStatusCollection
    {
        $statuses = EmployeeStatus::all();

        return new EmployeeStatusCollection($statuses);
    }
}
