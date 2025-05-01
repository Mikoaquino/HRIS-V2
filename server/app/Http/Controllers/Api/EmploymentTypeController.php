<?php

namespace App\Http\Controllers\Api;

use App\Models\EmploymentType;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmploymentTypeCollection;

class EmploymentTypeController extends Controller
{
    public function index(): EmploymentTypeCollection
    {
        return EmploymentTypeCollection::make(EmploymentType::all());
    }
}
