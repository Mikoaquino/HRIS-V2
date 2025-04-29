<?php

namespace App\Filters\V1\User;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class SearchUser
{
    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('q')) {
            return $next($builder);
        }

        return $next($builder->whereLike('email', '%'.request()->q.'%'));
    }
}
