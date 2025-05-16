<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PsgcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::statement('ALTER TABLE regions DISABLE KEYS');
        DB::statement('ALTER TABLE provinces DISABLE KEYS');
        DB::statement('ALTER TABLE cities DISABLE KEYS');
        DB::statement('ALTER TABLE barangays DISABLE KEYS');

        $regionCsv   = DB::getPdo()->quote(storage_path('regions.csv'));
        $provinceCsv = DB::getPdo()->quote(storage_path('provinces.csv'));
        $citycsv     = DB::getPdo()->quote(storage_path('cities.csv'));
        $barangaycsv = DB::getPdo()->quote(storage_path('barangays.csv'));

        DB::statement("
            LOAD DATA LOCAL INFILE {$regionCsv}
            INTO TABLE regions
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (code, name, @region_code)
            SET region_code = LEFT(code, 2)
        ");

        DB::statement("
            LOAD DATA LOCAL INFILE {$provinceCsv}
            INTO TABLE provinces
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (code, name, @province_code, @region_code)
            SET province_code = LEFT(code, 5),
            region_code = LEFT(code, 2)
        ");

        DB::statement("
            LOAD DATA LOCAL INFILE {$citycsv}
            INTO TABLE cities
            FIELDS TERMINATED BY ','
            LINES TERMINATED BY '\n'
            (code, name, @city_code, @province_code, @region_code)
            SET city_code = LEFT(code, 7),
            province_code = LEFT(code, 5),
            region_code = LEFT(code, 2)
        ");

        DB::statement("
            LOAD DATA LOCAL INFILE {$barangaycsv}
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
}
