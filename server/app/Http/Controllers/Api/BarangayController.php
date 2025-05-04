<?php

namespace App\Http\Controllers\Api;

use App\Models\Barangay;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\BarangayResource;
use App\Http\Resources\BarangayCollection;
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
