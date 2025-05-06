<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EmployeeStatusCollection;
use App\Models\EmployeeStatus;
use Illuminate\Http\Request;

class EmployeeStatusController extends Controller
{
    public function index(Request $request): EmployeeStatusCollection
    {
        $statuses = EmployeeStatus::all();

        return new EmployeeStatusCollection($statuses);
    }
}
