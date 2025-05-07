<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class OnboardingService
{
    public function __construct(
        private EmployeeService $employeeService,
        private EmployeeAddressService $addressService,
        private EmployeeAttachmentService $attachmentService,
        private EmployeeEducationService $educationService,
        private EmployeeLifecycleService $lifecycleService,
        private EmployeeWorkExperienceService $workExperienceService,
    ) {}

    public function createOnboardingRecord(array $validated): Employee
    {
        return DB::transaction(function () use ($validated) {
            $employee = $this->employeeService->createEmployee($validated);

            $this->addressService->createPresentAddress(array_merge(
                $validated['present_address'],
                ['employee_id' => $employee->id]
            ));

            $this->addressService->createPermanentAddress(array_merge(
                $validated['permanent_address'],
                ['employee_id' => $employee->id]
            ));

            $validated = array_merge($validated, ['employee_id' => $employee->id]);

            $this->educationService->createEducations($validated);

            $this->workExperienceService->createWorkExperiences($validated);

            $this->attachmentService->handleUploads($validated);

            $this->lifecycleService->createNewHire($validated);

            return $employee;
        });
    }
}
