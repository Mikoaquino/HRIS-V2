<?php

namespace App\Filters\Activity;

use Closure;
use App\Filters\ApiSortFilter;
use Illuminate\Database\Eloquent\Builder;

class SortActivity extends ApiSortFilter
{
    protected $params = ActivityFields::SORTABLE;

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('sort')) {
            return $next($builder);
        }
        
        $validSortables = $this->apply(request()->sort);
        
        foreach ($validSortables as $field => $order) {
            $builder->orderBy($field, $order);
        }

        return $next($builder);
    }
}