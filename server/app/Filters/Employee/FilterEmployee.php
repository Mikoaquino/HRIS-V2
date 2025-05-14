<?php

namespace App\Filters\Employee;

use App\Filters\ApiFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterEmployee extends ApiFilter
{
    protected $params = EmployeeFields::FILTERABLE;

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('filter')) {
            return $next($builder);
        }

        $filterQuery = $this->apply(request()->filter);

        return $next($builder->where($filterQuery));
    }
}
