<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Http\Resources\V1\ActivityCollection;

class ActivityController extends Controller
{
    public function index(): ActivityCollection
    {
        return ActivityCollection::make(Activity::paginate(10));
    }
}
