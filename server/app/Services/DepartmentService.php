<?php

namespace App\Services;

use App\Filters\Department\FilterDepartment;
use App\Filters\Department\SearchDepartment;
use App\Filters\Department\SortDepartment;
use App\Filters\IncludeSoftDeletedModels;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Models\Department;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Pipeline;

class DepartmentService
{
    use LoadsRequestQueryRelationship;

    public function getDepartments(): LengthAwarePaginator
    {
        return Pipeline::send(Department::query())
            ->through([
                FilterDepartment::class,
                SearchDepartment::class,
                SortDepartment::class,
                LoadModelRelations::class,
                IncludeSoftDeletedModels::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }

    public function getDepartment(Request $request, Department $department): Department
    {
        $department->when($request->filled('load'),
            fn () => $this->applyRequestedRelations($department, $request)
        );

        return $department;
    }
}