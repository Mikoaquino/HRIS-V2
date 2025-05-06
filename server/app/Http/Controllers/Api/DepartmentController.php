<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentCollection;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(): DepartmentCollection
    {
        return DepartmentCollection::make(Department::all());
    }
}
