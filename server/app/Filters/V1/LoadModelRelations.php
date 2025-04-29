<?php

namespace App\Filters\V1;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\LoadsRequestQueryRelationship;

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
