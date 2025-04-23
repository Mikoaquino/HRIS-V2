<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\v1\EmploymentTypeCollection;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use App\Models\EmploymentType;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CityCollection;

class EmploymentTypeController extends Controller
{
    public function index()
    {
        return response()->json(EmploymentType::all());
    }

}
