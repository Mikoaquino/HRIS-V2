<?php

namespace App\Http\Requests;

use App\Enums\CivilStatus;
use App\Enums\Gender;
use App\Models\Barangay;
use App\Models\EmployeeStatus;
use App\Models\EmploymentType;
use App\Models\JobPosition;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeFormRequest extends FormRequest
{
    public function baseRules(): array
    {
        return [

            // General
            'first_name'         => ['required', 'string', 'max:255'],
            'middle_name'        => ['nullable', 'string', 'max:255'],
            'last_name'          => ['required', 'string', 'max:255'],
            'suffix'             => ['nullable', 'string', 'max:255'],
            'birth_date'         => ['required', 'date', 'before_or_equal:'.now()->subYears(18)],
            'gender'             => ['required', 'string', 'max:255', Rule::in(Gender::getValues())],
            'civil_status'       => ['required', 'string', 'max:255', Rule::in(CivilStatus::getValues())],
            'nationality'        => ['required', 'string', 'max:255'],
            'religion'           => ['required', 'string', 'max:255'],
            'contact_number'     => ['required', 'string', 'digits:11', 'regex:/^09\d{9}$/'],
            'sss_id'             => ['required', 'numeric', 'digits:12'],
            'tin_id'             => ['required', 'numeric', 'digits:12'],
            'philhealth_id'      => ['required', 'numeric', 'digits:12'],
            'pagibig_id'         => ['required', 'numeric', 'digits:12'],
            'hired_at'           => ['required', 'date'],
            'employment_type_id' => ['required', Rule::exists(new EmploymentType()->getTable(), 'id')],
            'job_position_id'    => ['required', Rule::exists(new JobPosition()->getTable(), 'id')],
            'employee_status_id' => ['required', Rule::exists(new EmployeeStatus()->getTable(), 'id')],

            // Educations
            'educations'                => ['required', 'array'],
            'educations.*.school'       => ['required', 'string', 'max:255'],
            'educations.*.degree'       => ['required', 'string', 'max:255'],
            'educations.*.graduated_at' => ['required', 'date'],

            // Work Experiences
            'work_experiences'                      => ['nullable', 'array'],
            'work_experiences.*.previous_employer'  => ['required', 'string', 'max:255'],
            'work_experiences.*.job_position'       => ['required', 'string', 'max:255'],
            'work_experiences.*.from'               => ['required', 'date'],
            'work_experiences.*.to'                 => ['required', 'date'],
            'work_experiences.*.reason_for_leaving' => ['required', 'string'],

            // Attachments
            'attachments'   => ['nullable', 'array', 'max:15'],
            'attachments.*' => ['file', 'mimes:pdf,png,jpeg', 'max:5000'],

            // Present Addresses
            'present_address'                    => ['required', 'array'],
            'present_address.barangay_code'      => ['required', Rule::exists(new Barangay()->getTable(), 'code')],
            'present_address.additional_details' => ['required', 'string', 'max:255'],
            'present_address.zip_code'           => ['required', 'digits:4'],

            // Permanent Addresses
            'permanent_address'                    => ['required', 'array'],
            'permanent_address.barangay_code'      => ['required', Rule::exists(new Barangay()->getTable(), 'code')],
            'permanent_address.additional_details' => ['required', 'string', 'max:255'],
            'permanent_address.zip_code'           => ['required', 'digits:4'],
        ];
    }
}
