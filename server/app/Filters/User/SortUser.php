<?php

namespace App\Filters\User;

use App\Filters\ApiSortFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class SortUser extends ApiSortFilter
{
    protected $params = UserFields::SORTABLE;

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
