<?php

namespace App\Filters;

abstract class ApiSortFilter
{
    protected $params = [];

    private const ORDERS = [
        'asc',
        'desc',
    ];

    public function apply(array $sortables): array
    {
        $clause = [];

        foreach ($sortables as $sortable => $sortOrder) {

            [$validParams, $validSortOperator] = [
                array_any($this->params, fn ($param) => $param === $sortable),
                array_any(self::ORDERS, fn ($order) => $sortOrder == $order),
            ];

            if (! $validParams || ! $validSortOperator) {
                continue;
            }

            $clause[$sortable] = $sortOrder;
        }

        return $clause;
    }
}
