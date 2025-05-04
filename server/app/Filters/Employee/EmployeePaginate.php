<?php

namespace App\Filters\Employee;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class EmployeePaginate
{
    const PER_PAGE = 10;

    public function handle(Builder $builder, Closure $next)
    {
        $perPage = request()->input('per_page', self::PER_PAGE);

        return $next($builder->paginate($perPage));
    }
}