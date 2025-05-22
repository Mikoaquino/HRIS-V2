<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait LoadsRequestQueryRelationship
{
    public function applyRequestedRelations(Model|Builder $query, Request $request): Builder|Model
    {
        $relationships = array_map(fn ($rel) => Str::camel($rel), explode(',', $request->load));

        return $query instanceof Builder
            ? $query->with($relationships)
            : $query->loadMissing($relationships);
    }
}
