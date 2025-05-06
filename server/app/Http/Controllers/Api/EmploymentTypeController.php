<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmploymentTypeCollection;
use App\Models\EmploymentType;

class EmploymentTypeController extends Controller
{
    public function index(): EmploymentTypeCollection
    {
        return EmploymentTypeCollection::make(EmploymentType::all());
    }
}
