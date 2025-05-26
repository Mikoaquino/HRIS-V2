<?php

namespace App\Http\Controllers\Api;

use App\Models\Company;
use App\Traits\HttpResponse;
use App\Services\CompanyService;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyCollection;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{
    use HttpResponse;
    
    public function __construct(protected CompanyService $service) {}
    
    public function index(Request $request): CompanyCollection
    {
        $companies = $this->service->getCompanies($request);

        return CompanyCollection::make($companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Company $company): JsonResponse
    {
        $company = $this->service->getCompany($request, $company);

        return $this->success(
            data: CompanyResource::make($company),
            status: Response::HTTP_FOUND,
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
