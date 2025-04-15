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
    
    public function __construct(protected Barangay $barangay) {}

    public function index(): BarangayCollection
    {
        return BarangayCollection::make($this->barangay->paginate());
    }

    public function show(string $code): JsonResponse
    {
        $barangay = $this->barangay->firstWhere('code', $code);

        if (! $barangay) {
            return $this->error(
                message: __('response.error.show', ['resource' => $code]),
                status: Response::HTTP_NOT_FOUND
            );
        }

        return $this->success(
            data: BarangayResource::make($barangay),
            status: Response::HTTP_FOUND,
        );
    }
}
