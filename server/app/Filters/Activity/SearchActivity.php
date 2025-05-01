<?php

namespace App\Filters\Activity;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class SearchActivity
{
    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('q')) {
            return $next($builder);
        }

        return $next($builder->whereLike('description', '%'.request()->q.'%'));
    }
}