<?php

namespace App\Filters\V1\User;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterUser
{
    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('filter')) {
            return $next($builder);
        }
        
        $filterQuery = new UserFilter()->apply(request()->filter);

        return $next($builder->where($filterQuery));
    }
}