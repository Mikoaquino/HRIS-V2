<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use Illuminate\Support\Facades\Pipeline;
use App\Filters\IncludeSoftDeletedModels;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Pagination\LengthAwarePaginator;

class CompanyService
{
    use LoadsRequestQueryRelationship;

    public function __construct(protected Company $company) {}

    public function getCompanies(Request $request): LengthAwarePaginator
    {
        return Pipeline::send($this->company->query())
            ->through([
                LoadModelRelations::class,
                IncludeSoftDeletedModels::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }

    public function createCompany(array $validated): Company
    {
        return DB::transaction(function () use ($validated) {
            $company = Company::create([
                'name'    => $validated['name'],
                'type'    => $validated['type'],
                'address' => $validated['address'],
                'contact_number'  => $validated['contact_number'],
            ]);

            return $company->unsetRelations(); 
        });
    }

    public function getCompany(Request $request, Company $company): Company
    {
        $company->when($request->filled('load'),
            fn () => $this->applyRequestedRelations($company, $request)
        );

        return $company;
    }

    public function updateCompany(array $validated, Company $company): Company
    {
        return DB::transaction(function () use ($validated, $company) {
            $company = tap($company)->update($validated);

            return $company->unsetRelations();
        });
    }

    public function handleCompanyDelete(Company $company): Company
    {
        if ($company->trashed()) {
            return tap($company)->forceDelete(); 
        }

        return tap($company)->delete(); 
    }
}
