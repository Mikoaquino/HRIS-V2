<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDailyTimeReportRequest;
use App\Http\Resources\DailyTimeReportCollection;
use App\Services\DailyTimeReportService;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DailyTimeReportController extends Controller
{
    use HttpResponse;

    public function __construct(private DailyTimeReportService $service) {}

    public function index(): DailyTimeReportCollection
    {
        $dtrs = $this->service->getDailyTimeReports();

        return DailyTimeReportCollection::make($dtrs);
    }

    public function store(StoreDailyTimeReportRequest $request): JsonResponse
    {
        $result = $this->service->parseDtrFileContent($request->file('dtr'));

        if (! $result) {
            return $this->error(
                message: __('response.dtr_import.error'),
                status: Response::HTTP_BAD_REQUEST
            );
        }

        return $this->success(
            message: __('response.dtr_import.success'),
            status: Response::HTTP_CREATED
        );
    }
}
