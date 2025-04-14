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

class PsgcImport implements ToModel, WithBatchInserts, WithHeadingRow, WithMultipleSheets, WithChunkReading, ShouldQueue
{
    public function sheets(): array
    {
        return [
            'PSGC' => $this,
        ];
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    public function model(array $row): Barangay|City|Province|Region
    {
        $psgc = $row['10-digit PSGC'];
        $name = $row['Name'];
        $geoLevel = $row['Geographic Level'];

        return match ($geoLevel) {
            'Reg' => Region::make(['code' => $psgc, 'name' => $name]),
            'Prov' => Province::make(['code' => $psgc, 'name' => $name]),
            'Mun', 'SubMun', 'City' => City::make(['code' => $psgc, 'name' => $name]),
            'Bgy' => Barangay::make(['code' => $psgc, 'name' => $name])
        };
    }
}
