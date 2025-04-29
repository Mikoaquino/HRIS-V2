<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\V1\EmploymentTypeCollection;
use App\Models\EmploymentType;
use App\Http\Controllers\Controller;

class EmploymentTypeController extends Controller
{
    public function index(): EmploymentTypeCollection
    {
        return EmploymentTypeCollection::make(EmploymentType::all());
    }
}
