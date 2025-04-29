<?php

namespace App\Filters\V1\User;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class SortUser
{
    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('sort')) {
            return $next($builder);
        }

        foreach (request()->sort as $sort => $order) {
            $builder->orderBy($sort, $order);
        }

        return $next($builder);
    }
}