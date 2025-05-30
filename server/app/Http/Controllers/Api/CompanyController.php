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
   
    public function store(StoreCompanyRequest $request): JsonResponse
    {
        $company = $this->service->createCompany($request->validated());

        return $this->success(
            data: CompanyResource::make($company),
            message: __('response.success.create', ['resource' => 'company']),
            status: Response::HTTP_CREATED
        );
    }

    public function show(Request $request, Company $company): JsonResponse
    {
        $company = $this->service->getCompany($request, $company);
        
        return $this->success(
            data: CompanyResource::make($company),
            status: Response::HTTP_FOUND,
        );
    }
   
    public function update(UpdateCompanyRequest $request, Company $company):JsonResponse
    {
        $updatedCompany = $this->service->updateCompany($request->validated(), $company);

        return $this->success(
            data: CompanyResource::make($updatedCompany),
            message: __('response.success.update', ['resource' => 'company']),
        );
    }
    
    public function destroy(Company $company): JsonResponse
    {
        $company = $this->service->handleCompanyDelete($company);

        $message = $company->exists
            ? 'response.company.delete.temporary'
            : 'response.company.delete.permanent';

        return $this->success(message: __($message, [
            'company' => $company->name,
        ]));
    }
}
