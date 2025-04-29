<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Filters\V1\PaginateQueryBuilder;
use Illuminate\Support\Facades\Pipeline;
use App\Filters\V1\Activity\SortActivity;
use App\Filters\V1\Activity\FilterActivity;
use App\Filters\V1\Activity\SearchActivity;
use App\Http\Resources\V1\ActivityCollection;
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
                    PaginateQueryBuilder::class,
                ])
                ->then(fn (LengthAwarePaginator $paginator) => 
                    $paginator->appends($request->query())
                );
        
        return ActivityCollection::make($activities);
    }
}
