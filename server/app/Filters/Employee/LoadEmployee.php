<?php

namespace App\Filters\Employee;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\LoadsRequestQueryRelationship;

class LoadEmployee
{
    use LoadsRequestQueryRelationship;

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->filled('load')) {
            return $next($builder);
        }

        return $next($this->applyRequestedRelations($builder, request()));
    }
}
