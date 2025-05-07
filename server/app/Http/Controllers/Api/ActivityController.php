<?php

namespace App\Http\Controllers\Api;

use App\Filters\Activity\FilterActivity;
use App\Filters\Activity\SearchActivity;
use App\Filters\Activity\SortActivity;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Pipeline;
use Spatie\Activitylog\Models\Activity;

class ActivityController extends Controller
{
    public function index(Request $request): ActivityCollection
    {
        $activities =
            Pipeline::send(Activity::query())
                ->through([
                    FilterActivity::class,
                    SearchActivity::class,
                    SortActivity::class,
                    LoadModelRelations::class,
                    PaginateQueryBuilder::class,
                ])
                ->thenReturn();

        return ActivityCollection::make($activities);
    }
}
