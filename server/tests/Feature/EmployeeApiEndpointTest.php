<?php

use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\EmploymentType;
use App\Models\JobPosition;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\UploadedFile;
use Illuminate\Testing\Fluent\AssertableJson;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->token = $this->user->createToken('access-token')->plainTextToken;
});

test('`GET:` Get a paginated resource collection of employee', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/employees');

    $response->assertOk()->assertExactJsonStructure(['data', 'links', 'meta']);

    foreach ($response->getData()->data as $data) {
        expect($data)->not()->toHaveKey('archived_at');
    }
});

test('`GET:` Get a specific employee resource', function () {
    $employee = Employee::factory()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/employees/'.$employee->id);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['data', 'status'])
        ->assertJsonPath('data.id', $employee->id);
});

test('`GET:` Include archived employees in paginated resource collection', function () {
    $employee = Employee::factory()->create([
        'created_at'  => now()->addMinute(),
        'archived_at' => now(),
    ]);

    $requestQuery = '?with_trashed=true&sort[created_at]=desc&per_page='.Employee::withTrashed()->count();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/employees'.$requestQuery);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['data', 'links', 'meta'])
        ->assertJsonPath('data.0', fn ($data) => $data['id'] === $employee->id);
});

test('`GET:` Get only archived employees in paginated resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/employees?only_trashed=true');

    $response->assertOk()->assertExactJsonStructure(['data', 'links', 'meta']);

    foreach ($response->getData()->data as $data) {
        expect($data)->toHaveKey('archived_at');
    }
});

test('`POST:` Create a new employee resource', function () {
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
        'employment_type_id' => EmploymentType::inRandomOrder()->first()->id,
        'job_position_id'    => JobPosition::inRandomOrder()->first()->id,
        'department_id'      => Department::inRandomOrder()->first()->id,
        'employee_status_id' => EmployeeStatus::firstWhere(['name' => 'Active'])->id,
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

    $response = $this->withHeaders(['Authorization' => 'Bearer '.$this->token])->postJson('/api/v1/employees', $requestPayload);

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
            'first_name'         => $requestPayload['first_name'],
            'middle_name'        => $requestPayload['middle_name'],
            'last_name'          => $requestPayload['last_name'],
            'suffix'             => $requestPayload['suffix'],
            'birth_date'         => $requestPayload['birth_date'],
            'gender'             => $requestPayload['gender'],
            'civil_status'       => $requestPayload['civil_status'],
            'nationality'        => $requestPayload['nationality'],
            'religion'           => $requestPayload['religion'],
            'contact_number'     => $requestPayload['contact_number'],
            'sss_id'             => $requestPayload['sss_id'],
            'tin_id'             => $requestPayload['tin_id'],
            'philhealth_id'      => $requestPayload['philhealth_id'],
            'pagibig_id'         => $requestPayload['pagibig_id'],
            'employment_type_id' => $requestPayload['employment_type_id'],
            'job_position_id'    => $requestPayload['job_position_id'],
            'department_id'      => $requestPayload['department_id'],
            'employee_status_id' => $requestPayload['employee_status_id'],
        ]);
});

test('`PATCH:` Update an employee resource fields', function () {
    $employee = Employee::inRandomOrder()->first();

    $requestPayload = [
        'first_name'  => 'Ricardo',
        'middle_name' => 'Kanor',
        'last_name'   => 'Dalisay',
        'suffix'      => 'Sr.',
        'hired_at'    => '2025-01-10',
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->patchJson('/api/v1/employees/'.$employee->id, $requestPayload);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.success.update', ['resource' => 'employee']),
            'status'  => Response::HTTP_OK,
        ])
        ->assertJson(function (AssertableJson $json) {
            return $json->has('data', function (AssertableJson $json) {
                return
                    $json->where('first_name', 'Ricardo')
                        ->where('middle_name', 'Kanor')
                        ->where('last_name', 'Dalisay')
                        ->where('suffix', 'Sr.')
                        ->etc();
            })->etc();
        });
});

test('`DELETE:` Flag an employee resource as archived', function () {
    $employee = Employee::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/employees/'.$employee->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertJson([
            'message' => __('response.employee.delete.temporary', [
                'employee' => $employee->first_name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});

test('`DELETE:` Force delete an employee resource', function () {
    $employee = Employee::factory()->create(['archived_at' => now()]);

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/employees/'.$employee->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertJson([
            'message' => __('response.employee.delete.permanent', [
                'employee' => $employee->first_name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});
