<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    protected $params = [];

    protected $operatorMap = [];

    public function transform(Request $request): array
    {
        $clause = [];

        foreach($this->params as $param => $operators) {
            $query = $request->query($param);

            if (! isset($query)) continue;

            foreach($operators as $operator) {
                if (isset($query[$operator])) {
                    $clause[] = [
                        $param, 
                        $this->operatorMap[$operator], 
                        $query[$operator]
                    ];
                }
            }
        }

        return $clause;
    }
}