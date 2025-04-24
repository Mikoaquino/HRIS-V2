<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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