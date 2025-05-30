<?php

namespace App\Filters\Department;

use App\Filters\ApiFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class FilterDepartment extends ApiFilter
{
    protected $params = DepartmentFields::FILTERABLE;

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('filter')) {
            return $next($builder);
        }

        $filterQuery = $this->apply(request()->filter);

        return $next($builder->where($filterQuery));
    }
}
