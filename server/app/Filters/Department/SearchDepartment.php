<?php

namespace App\Filters\Department;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class SearchDepartment
{
    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('q')) {
            return $next($builder);
        }

        $q = request()->q;

        return $next($builder
            ->whereLike('name', "%$q%")
            ->orWhereLike('description', "%$q%")
        );
    }
}
