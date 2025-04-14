<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        activity()->disableLogging();
        
        $this->call([
            UserSeeder::class,
            EmployeeEducationSeeder::class,
            EmployeeWorkExperienceSeeder::class,
            EmployeeAttachmentSeeder::class,
            EmployeeLifecycleSeeder::class,
            TerminatedEmployeeSeeder::class,
        ]);
    }
}
