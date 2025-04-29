<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\V1\JobPositionCollection;
use App\Models\JobPosition;
use App\Http\Controllers\Controller;

class JobPositionController extends Controller
{
    public function index(): JobPositionCollection
    {
        return JobPositionCollection::make(
            JobPosition::with('department')->get()
        );
    }
}

