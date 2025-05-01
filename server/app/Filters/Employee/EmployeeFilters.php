<?php 

namespace App\Filters\Employee;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class EmployeeFilters
{
    public function handle(Builder $builder, Closure $next)
    {
        if (!request()->has('filter')) {
            return $next($builder);
        }

        foreach (request()->filter as $field => $conditions) {
            foreach ($conditions as $op => $value) {
                match ($op) {
                    'eq' => $builder->where($field, '=', $value),
                    'neq' => $builder->where($field, '!=', $value),
                    'like' => $builder->where($field, 'like', "%{$value}%"),
                    'gt' => $builder->where($field, '>', $value),
                    'lt' => $builder->where($field, '<', $value),
                    default => null,
                };
            }
        }

        return $next($builder);
    }
}
