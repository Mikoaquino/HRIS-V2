<?php

namespace App\Filters\V1\Activity;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterActivity
{
    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('filter')) {
            return $next($builder);
        }

        $filterQuery = new ActivityFilter()->apply(request()->filter);

        return $next($builder->where($filterQuery));
    }
}

