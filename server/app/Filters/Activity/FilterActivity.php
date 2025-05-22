<?php

namespace App\Filters\Activity;

use App\Filters\ApiFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterActivity extends ApiFilter
{
    protected $params = ActivityFields::FILTERABLE;

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('filter')) {
            return $next($builder);
        }

        $filterQuery = $this->apply(request()->filter);

        return $next($builder->where($filterQuery));
    }
}
