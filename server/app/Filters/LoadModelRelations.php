<?php

namespace App\Filters;

use App\Traits\LoadsRequestQueryRelationship;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class LoadModelRelations
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
