<?php

namespace App\Http\Controllers\Api;

use App\Models\JobPosition;
use App\Http\Controllers\Controller;
use App\Http\Resources\JobPositionCollection;

class JobPositionController extends Controller
{
    public function index(): JobPositionCollection
    {
        return JobPositionCollection::make(
            JobPosition::with('department')->get()
        );
    }
}

