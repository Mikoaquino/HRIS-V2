<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\EmploymentType;
use App\Http\Controllers\Controller;


class EmploymentTypeController extends Controller
{
    public function index()
    {
        return response()->json(EmploymentType::all());
    }

}
