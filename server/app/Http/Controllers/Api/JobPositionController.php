<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobPositionCollection;
use App\Models\JobPosition;

class JobPositionController extends Controller
{
    public function index(): JobPositionCollection
    {
        return JobPositionCollection::make(
            JobPosition::with('department')->get()
        );
    }
}
