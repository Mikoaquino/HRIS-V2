<?php

namespace Database\Seeders;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class EmployeeAttachmentSeeder extends Seeder
{
    const REQUIREMENTS = [
        'resume',
        'employment_contract',
        'government_id',
        'diploma',
        'tor',
        'medical_exam_results',
        'nbi_clearance',
        'police_clearance',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachments = [];

        Employee::all()->each(function ($employee) use (&$attachments) {
            foreach (self::REQUIREMENTS as $requirement) {
                $fileName     = "$employee->last_name-$requirement.pdf";
                $fileContents = '<h1>'.$employee->last_name.' --- '.ucfirst($requirement).'</h1>';
                $file         = UploadedFile::fake()->createWithContent($fileName, Pdf::loadHTML($fileContents)->output());
                $file->store('employees');

                $attachments[] = [
                    'employee_id' => $employee->id,
                    'client_name' => $file->getClientOriginalName(),
                    'hashed_name' => $file->hashName(),
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ];
            }
        });

        DB::transaction(fn () => DB::table('employee_attachments')->insert($attachments));
    }
}
