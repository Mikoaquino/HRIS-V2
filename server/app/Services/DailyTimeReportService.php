<?php

namespace App\Services;

use App\Filters\IncludeSoftDeletedModels;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Models\DailyTimeReport;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Pipeline;

class DailyTimeReportService
{
    public function getDailyTimeReports(): LengthAwarePaginator
    {
        return Pipeline::send(DailyTimeReport::query())
            ->through([
                IncludeSoftDeletedModels::class,
                LoadModelRelations::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }

    public function parseDtrFileContent(UploadedFile $file): ?bool
    {
        $content = $file->getContent();

        if (empty(trim($content))) {
            return null;
        }

        $lines = preg_split("/\r\n|\n|\r/", $content, flags: PREG_SPLIT_NO_EMPTY);

        $data = array_map(function ($line) {
            $parsed = explode("\t", $line);

            return [
                'employee_id' => $parsed[0],
                'date_time'   => $parsed[1],
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }, $lines);

        return DailyTimeReport::insert($data);
    }
}
