<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Http\Resources\V1\ActivityCollection;

class ActivityController extends Controller
{
    public function index(Request $request): ActivityCollection
    {
        $activities = Activity::with(['causer', 'subject'])
            ->paginate($request->input('per_page', 10));

        return ActivityCollection::make($activities);
    }
}
