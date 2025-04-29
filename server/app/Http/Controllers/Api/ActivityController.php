<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Filters\LoadModelRelations;
use App\Http\Controllers\Controller;
use App\Filters\PaginateQueryBuilder;
use App\Filters\Activity\SortActivity;
use Spatie\Activitylog\Models\Activity;
use App\Filters\Activity\FilterActivity;
use App\Filters\Activity\SearchActivity;
use Illuminate\Support\Facades\Pipeline;
use App\Http\Resources\ActivityCollection;
use Illuminate\Pagination\LengthAwarePaginator;

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
                ->then(fn (LengthAwarePaginator $paginator) => 
                    $paginator->appends($request->query())
                );
        
        return ActivityCollection::make($activities);
    }
}
