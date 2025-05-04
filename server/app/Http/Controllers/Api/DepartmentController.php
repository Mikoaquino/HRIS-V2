<?php

namespace App\Http\Controllers\Api;

use App\Models\Department;
use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentCollection;

class DepartmentController extends Controller
{
    public function index(): DepartmentCollection
    {
        return DepartmentCollection::make(Department::all());
    }
}
