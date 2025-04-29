<?php

namespace App\Filters\V1;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class IncludeSoftDeletedModels
{
    public function handle(Builder $builder, Closure $next)
    {
        if (request()->boolean('with_trashed')) {
            return $next($builder->withTrashed());
        }

        if (request()->boolean('only_trashed')) {
            return $next($builder->onlyTrashed());
        }

        return $next($builder);  
    }
}