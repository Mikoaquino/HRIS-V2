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

        return $next($builder
            ->whereLike('first_name', '%'.request()->q.'%')
            ->orWhereLike('middle_name', '%'.request()->q.'%')
            ->orWhereLike('last_name', '%'.request()->q.'%')
            ->orWhereLike('suffix', '%'.request()->q.'%')
        );
    }
}
