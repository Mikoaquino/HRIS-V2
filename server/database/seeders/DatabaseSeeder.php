<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        activity()->disableLogging();
        
        $this->call([
            PsgcSeeder::class,
            UserSeeder::class,
            EmployeeSeeder::class,
            EmployeeEducationSeeder::class,
            EmployeeWorkExperienceSeeder::class,
            EmployeeAttachmentSeeder::class,
            EmployeeLifecycleSeeder::class,
            TerminatedEmployeeSeeder::class,
        ]);

        $this->command->info("<fg=yellow;options=bold>  Seeding regions, provinces, cities, and barangays table. This may take a while, you can leave this terminal open.</>");
        Artisan::call('queue:work --queue=seed-psgc-address --stop-when-empty');
        $this->command->info("\n\n<fg=green;options=bold>  Finished seeding. :)</>");

        $this->call([
            EmployeePresentAddressSeeder::class,
            EmployeePermanentAddressSeeder::class,
        ]);
    }
}
