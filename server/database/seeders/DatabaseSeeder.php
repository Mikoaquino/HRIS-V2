<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::disableQueryLog();

        activity()->disableLogging();

        Storage::deleteDirectory('employees');

        $this->call([
            PsgcSeeder::class,
            EmployeeStatusSeeder::class,
            EmploymentTypeSeeder::class,
            DepartmentSeeder::class,
            JobPositionSeeder::class,
            UserSeeder::class,
            TrashedUserSeeder::class,
            EmployeeSeeder::class,
            UserSeeder::class,
            EmployeeEducationSeeder::class,
            EmployeeWorkExperienceSeeder::class,
            EmployeeLifecycleSeeder::class,
            TerminatedEmployeeSeeder::class,
            EmployeePresentAddressSeeder::class,
            EmployeePermanentAddressSeeder::class,
            EmployeeAttachmentSeeder::class,
        ]);

        DB::enableQueryLog();
    }
}
