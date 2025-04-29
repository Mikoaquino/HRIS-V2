<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\V1\DepartmentCollection;
use App\Models\Department;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index(): DepartmentCollection
    {
        return DepartmentCollection::make(Department::all());
    }
}
