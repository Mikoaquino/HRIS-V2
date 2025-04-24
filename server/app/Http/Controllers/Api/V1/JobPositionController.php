<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\JobPosition;
use App\Http\Controllers\Controller;

class JobPositionController extends Controller
{
    public function index()
    {
        return response()->json(JobPosition::with('department')->get());
    }
}
