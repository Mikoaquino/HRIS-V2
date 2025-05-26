<?php

namespace App\Services;

use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Models\Company;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Pipeline;

class CompanyService
{
    use LoadsRequestQueryRelationship;

    public function __construct(protected Company $company) {}

    public function getCompanies(Request $request): LengthAwarePaginator
    {
        return Pipeline::send($this->company->query())
            ->through([
                LoadModelRelations::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }

    public function getCompany(Request $request, Company $company): Company
    {
        $company->when($request->has('load'),
            fn () => $this->applyRequestedRelations($company, $request)
        );

        return $company;
    }
}
