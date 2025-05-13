<?php

namespace App\Filters\User;

use App\Filters\ApiFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterUser extends ApiFilter
{
    protected $params = UserFields::FILTERABLE;

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('filter')) {
            return $next($builder);
        }

        $filterQuery = $this->apply(request()->filter);

        return $next($builder->where($filterQuery));
    }
}
