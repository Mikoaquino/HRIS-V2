<?php

namespace Database\Seeders;

use PDO;
use App\Models\City;
use App\Models\Region;
use App\Models\Barangay;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PsgcSeeder extends Seeder
{
    private $regionsCsvPath;

    private $provincesCsvPath;

    private $citiesCsvPath;

    private $barangaysCsvPath;

    public function __construct()
    {
        $this->regionsCsvPath   = storage_path('regions.csv');
        $this->provincesCsvPath = storage_path('provinces.csv');
        $this->citiesCsvPath    = storage_path('cities.csv');
        $this->barangaysCsvPath = storage_path('barangays.csv');
    }

    public function run(): void
    {
        $db = DB::connection()->getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME);

        $db === 'sqlite' ? $this->seedSqlite() : $this->seedMysql();
    }

    private function seedMysql(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::statement('ALTER TABLE regions DISABLE KEYS');
        DB::statement('ALTER TABLE provinces DISABLE KEYS');
        DB::statement('ALTER TABLE cities DISABLE KEYS');
        DB::statement('ALTER TABLE barangays DISABLE KEYS');

        $regionEscapedPath   = DB::getPdo()->quote($this->regionsCsvPath);
        $provinceEscapedPath = DB::getPdo()->quote($this->provincesCsvPath);
        $cityEscapedPath     = DB::getPdo()->quote($this->citiesCsvPath);
        $barangayEscapedPath = DB::getPdo()->quote($this->barangaysCsvPath);

        DB::statement("
            LOAD DATA LOCAL INFILE {$regionEscapedPath}
            INTO TABLE regions
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (code, name, @region_code)
            SET region_code = LEFT(code, 2)
        ");

        DB::statement("
            LOAD DATA LOCAL INFILE {$provinceEscapedPath}
            INTO TABLE provinces
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (code, name, @province_code, @region_code)
            SET province_code = LEFT(code, 5),
            region_code = LEFT(code, 2)
        ");

        DB::statement("
            LOAD DATA LOCAL INFILE {$cityEscapedPath}
            INTO TABLE cities
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (code, name, @city_code, @province_code, @region_code)
            SET city_code = LEFT(code, 7),
            province_code = LEFT(code, 5),
            region_code = LEFT(code, 2)
        ");

        DB::statement("
            LOAD DATA LOCAL INFILE {$barangayEscapedPath}
            INTO TABLE barangays
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (code, name, @city_code, @province_code, @region_code)
            SET city_code = LEFT(code, 7),
            province_code = LEFT(code, 5),
            region_code = LEFT(code, 2)
        ");

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        DB::statement('ALTER TABLE regions ENABLE KEYS');
        DB::statement('ALTER TABLE provinces ENABLE KEYS');
        DB::statement('ALTER TABLE cities ENABLE KEYS');
        DB::statement('ALTER TABLE barangays ENABLE KEYS');
    }

    private function seedSqlite(): void
    {
        DB::statement('PRAGMA foreign_keys=OFF');
        DB::statement('PRAGMA synchronous=OFF');

        $this->chunkInsert($this->regionsCsvPath, fn ($row) => [
            'code'        => $row[0],
            'name'        => $row[1],
            'region_code' => substr($row[0], 0, 2),
        ], new Region()->getTable());

        $this->chunkInsert($this->provincesCsvPath, fn ($row) => [
            'code'          => $row[0],
            'name'          => $row[1],
            'province_code' => substr($row[0], 0, 5),
            'region_code'   => substr($row[0], 0, 2),
        ], new Province()->getTable());

        $this->chunkInsert($this->citiesCsvPath, fn ($row) => [
            'code'          => $row[0],
            'name'          => $row[1],
            'city_code'     => substr($row[0], 0, 7),
            'province_code' => substr($row[0], 0, 5),
            'region_code'   => substr($row[0], 0, 2),
        ], new City()->getTable());

        $this->chunkInsert($this->barangaysCsvPath, fn ($row) => [
            'code'          => $row[0],
            'name'          => $row[1],
            'city_code'     => substr($row[0], 0, 7),
            'province_code' => substr($row[0], 0, 5),
            'region_code'   => substr($row[0], 0, 2),
        ], new Barangay()->getTable());

        DB::statement('PRAGMA foreign_keys=ON');
        DB::statement('PRAGMA synchronous=FULL');
    }

    private function chunkInsert(string $path, callable $generator, string $table): void
    {
        $chunkSize = 1000;

        $file = fopen($path, 'r');

        $data = [];

        while(($row = fgetcsv($file)) !== false) {
            $data[] = $generator($row);

            if (count($data) === $chunkSize) {
                DB::table($table)->insert($data);
                $data = [];
            }
        }

        if (! empty($data)) {
            DB::table($table)->insert($data);
        }

        fclose($file);
    }
}
