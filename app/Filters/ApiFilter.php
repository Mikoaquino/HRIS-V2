<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    protected $params = [];

    protected $columnMap = [];

    protected $operatorMap = [];

    public function transform(Request $request): array
    {
        $clause = [];

        foreach($this->params as $param => $operators) {
            $query = $request->query($param);

            if (! isset($query)) continue;

            $column = $this->columnMap[$param] ?? $param;

            foreach($operators as $operator) {
                if (isset($query[$operator])) {
                    $clause[] = [
                        $column, 
                        $this->operatorMap[$operator], 
                        $query[$operator]
                    ];
                }
            }
        }

        return $clause;
    }
}