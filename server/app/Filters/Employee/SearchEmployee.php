<?php

namespace App\Filters\Employee;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class SearchEmployee
{
    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('q')) {
            return $next($builder);
        }

        $q = request()->q;

        return $next($builder
            ->whereLike('first_name', "%$q%")
            ->orWhereLike('middle_name', "%$q%")
            ->orWhereLike('last_name', "%$q%")
            ->orWhereLike('suffix', "%$q%")
        );
    }
}
