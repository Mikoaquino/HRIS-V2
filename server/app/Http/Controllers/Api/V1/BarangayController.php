<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Barangay;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\BarangayResource;
use App\Http\Resources\V1\BarangayCollection;
use Symfony\Component\HttpFoundation\Response;

class BarangayController extends Controller
{
    use HttpResponse;
    
    public function index(): BarangayCollection
    {
        return BarangayCollection::make(Barangay::paginate());
    }

    public function show(Barangay $barangay): JsonResponse
    {
        return $this->success(
            data: BarangayResource::make($barangay),
            status: Response::HTTP_FOUND,
        );
    }
}
