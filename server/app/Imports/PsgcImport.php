<?php

namespace App\Imports;

use App\Models\Barangay;
use App\Models\City;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class PsgcImport implements ShouldQueue, ToModel, WithBatchInserts, WithChunkReading, WithHeadingRow, WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'PSGC' => $this,
        ];
    }

    public function batchSize(): int
    {
        return 4000;
    }

    public function chunkSize(): int
    {
        return 4000;
    }

    public function model(array $row): Barangay|City|Province|Region|null
    {
        $psgc     = $row['10-digit PSGC'];
        $name     = $row['Name'];
        $geoLevel = $row['Geographic Level'];

        return match ($geoLevel) {
            'Reg' => new Region([
                'code'        => $psgc,
                'name'        => $name,
                'region_code' => substr($psgc, 0, 2),
            ]),

            'Prov' => new Province([
                'code'          => $psgc,
                'name'          => $name,
                'province_code' => substr($psgc, 0, 5),
                'region_code'   => substr($psgc, 0, 2),
            ]),

            'Mun',
            'SubMun',
            'City' => new City([
                'code'          => $psgc,
                'name'          => $name,
                'city_code'     => substr($psgc, 0, 7),
                'province_code' => substr($psgc, 0, 5),
                'region_code'   => substr($psgc, 0, 2),
            ]),

            'Bgy' => new Barangay([
                'code'          => $psgc,
                'name'          => $name,
                'city_code'     => substr($psgc, 0, 7),
                'province_code' => substr($psgc, 0, 5),
                'region_code'   => substr($psgc, 0, 2),
            ]),

            default => null,
        };
    }
}
