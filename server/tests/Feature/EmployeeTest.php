<?php

use App\Models\Department;
use App\Models\EmployeeStatus;
use App\Models\EmploymentType;
use App\Models\JobPosition;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\UploadedFile;
use Illuminate\Testing\Fluent\AssertableJson;
use Symfony\Component\HttpFoundation\Response;

test('get a paginated resource collection of employee', function () {
    $user = User::factory()->create();

    $token = $user->createToken('access-token')->plainTextToken;

    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->getJson('/api/v1/employees');

    $response
        ->assertOk()
        ->assertExactJsonStructure(['data', 'links', 'meta'])
        ->assertJson(fn (AssertableJson $json) => 
            $json->has('data', 10, fn (AssertableJson $json) =>
                $json->missing('archived_at')->etc()
            )->etc()
        );
});

test('get a paginated resource collection of employee based on query strings', function () {
    // 
})->todo(note: 
    <<<NOTE
    test query strings,
    check if query strings are appended to each in page links
    NOTE,
    assignee: 'Carlito'
);

test('create a new employee resource', function () {
    $user = User::factory()->create();

    $token = $user->createToken('access-token')->plainTextToken;

    $attachments = collect([
        'resume',
        'employment_contract',
        'government_id',
        'diploma',
        'tor',
        'medical_exam_results',
        'nbi_clearance',
        'police_clearance',
    ])->map(function (string $requirement) {
        $fileName     = "Tabuso-$requirement.pdf";
        $fileContents = '<h1>Tabuso --- '.ucfirst($requirement).'</h1>';

        return UploadedFile::fake()->createWithContent($fileName, Pdf::loadHTML($fileContents)->output());
    });

    $employmentTypeId = EmploymentType::inRandomOrder()->first()->id;
    $jobPositionId    = JobPosition::inRandomOrder()->first()->id;
    $departmentId     = Department::inRandomOrder()->first()->id;
    $employeeStatusId = EmployeeStatus::firstWhere(['name' => 'Active'])->id;

    $requestPayload = [
        'first_name'         => 'Carl',
        'middle_name'        => 'Francisco',
        'last_name'          => 'Tabuso',
        'suffix'             => null,
        'birth_date'         => '2003-02-19',
        'gender'             => 'male',
        'civil_status'       => 'single',
        'nationality'        => 'Filipino',
        'religion'           => 'Saksi ni Java',
        'contact_number'     => '09300758835',
        'sss_id'             => '123456789101',
        'tin_id'             => '123456789102',
        'philhealth_id'      => '123456789103',
        'pagibig_id'         => '123456789104',
        'hired_at'           => '2025-01-03',
        'employment_type_id' => $employmentTypeId,
        'job_position_id'    => $jobPositionId,
        'department_id'      => $departmentId,
        'employee_status_id' => $employeeStatusId,
        'educations'         => [
            [
                'school'       => 'Polytechnic University of the Philippines Santa Rosa',
                'degree'       => 'Bachelor of Science in Information Technology',
                'graduated_at' => '2024-02-01',
            ],
            [
                'school'       => 'AMA University',
                'degree'       => 'Master of Science in Information Technology',
                'graduated_at' => '2025-03-01',
            ],
        ],
        'work_experiences' => [
            [
                'previous_employer'  => 'Amazon',
                'job_position'       => 'Quality Control Engineer Intern',
                'from'               => '2021-11-04',
                'to'                 => '2022-04-10',
                'reason_for_leaving' => 'End of Contract',
            ],
            [
                'previous_employer'  => 'Netflix',
                'job_position'       => 'Junior Software Engineer',
                'from'               => '2022-05-12',
                'to'                 => '2024-06-23',
                'reason_for_leaving' => 'Layoff',
            ],
            [
                'previous_employer'  => 'Google',
                'job_position'       => 'Solutions Architect',
                'from'               => '2024-07-07',
                'to'                 => '2025-03-01',
                'reason_for_leaving' => 'Personal reasons',
            ],
        ],
        'present_address' => [
            'barangay_code'      => '0403428005',
            'additional_details' => 'Barangay Hilahan, Pababa Street, Block 69 Lot 69',
            'zip_code'           => '2345',
        ],
        'permanent_address' => [
            'barangay_code'      => '0403428010',
            'additional_details' => 'Barangay Camella, West Wing, Bldg. 2, Room 69',
            'zip_code'           => '1234',
        ],
        'attachments' => $attachments->toArray(),
    ];

    $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])->postJson('/api/v1/employees', $requestPayload);

    $hashedAttachments = $attachments->map(fn ($attachment) => 'employees/'.$attachment->hashName())->toArray();

    Storage::disk('local')->assertExists($hashedAttachments);

    Storage::disk('local')->delete($hashedAttachments);

    $responsePayload = array_diff(
        array_keys($requestPayload),
        [
            'hired_at',
            'educations',
            'work_experiences',
            'present_address',
            'permanent_address',
            'attachments',
        ]
    );

    $response
        ->assertCreated()
        ->assertJsonStructure(['message', 'status', 'data' => array_merge($responsePayload, ['created_at', 'updated_at'])])
        ->assertJson([
            'message' => __('response.success.create', ['resource' => 'employee']),
            'status'  => Response::HTTP_CREATED,
        ])
        ->assertJsonFragment([
            'first_name'         => 'Carl',
            'middle_name'        => 'Francisco',
            'last_name'          => 'Tabuso',
            'suffix'             => null,
            'birth_date'         => '2003-02-19',
            'gender'             => 'male',
            'civil_status'       => 'single',
            'nationality'        => 'Filipino',
            'religion'           => 'Saksi ni Java',
            'contact_number'     => '09300758835',
            'sss_id'             => '123456789101',
            'tin_id'             => '123456789102',
            'philhealth_id'      => '123456789103',
            'pagibig_id'         => '123456789104',
            'employment_type_id' => $employmentTypeId,
            'job_position_id'    => $jobPositionId,
            'department_id'      => $departmentId,
            'employee_status_id' => $employeeStatusId,
        ]);
});
