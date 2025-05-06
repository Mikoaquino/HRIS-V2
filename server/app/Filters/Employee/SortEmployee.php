<?php

namespace App\Filters\Employee;

use App\Filters\ApiSortFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class SortEmployee extends ApiSortFilter
{
    protected $params = EmployeeFields::SORTABLE;

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has('sort')) {
            return $next($builder);
        }

        $validSortables = $this->apply(request()->sort);

        foreach ($validSortables as $field => $order) {
            $builder->orderBy($field, $order);
        }

        return $next($builder);
    }
}
