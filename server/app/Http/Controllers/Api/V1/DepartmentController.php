<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Department;
use App\Http\Controllers\Controller;


class DepartmentController extends Controller
{
    public function index()
    {
        return response()->json(Department::all());
    }

}
