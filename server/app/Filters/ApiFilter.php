<?php

namespace App\Filters;

abstract class ApiFilter
{
    protected $params = [];

    protected $operatorMap = [
        'gt'  => '>',
        'gte' => '>=',
        'eq'  => '=',
        'ne'  => '!=',
        'lt'  => '<',
        'lte' => '<=',
    ];

    public function apply(array $filters): array
    {
        $clause = [];

        foreach ($this->params as $param => $operators) {
            if (! array_key_exists($param, $filters)) {
                continue;
            }

            $query = $filters[$param];

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $clause[] = [
                        $param,
                        $this->operatorMap[$operator],
                        $query[$operator],
                    ];
                }
            }
        }

        return $clause;
    }
}
