<?php

namespace App\Http\Requests;

use App\Enums\CivilStatus;
use App\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOnboardingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            // General
            'first_name'         => ['required', 'string'],
            'middle_name'        => ['nullable', 'string'],
            'last_name'          => ['required', 'string'],
            'suffix'             => ['nullable', 'string'],
            'birth_date'         => ['required', 'date'],
            'gender'             => ['required', Rule::in(Gender::getValues())],
            'civil_status'       => ['required', Rule::in(CivilStatus::getValues())],
            'nationality'        => ['required', 'string'],
            'religion'           => ['required', 'string'],
            'contact_number'     => ['required', 'string', 'max:11', 'min:11', 'regex:/^09\d{9}$/'],
            'sss_id'             => ['required', 'numeric', 'digits:12'],
            'tin_id'             => ['required', 'numeric', 'digits:12'],
            'philhealth_id'      => ['required', 'numeric', 'digits:12'],
            'pagibig_id'         => ['required', 'numeric', 'digits:12'],
            'hired_at'           => ['required', 'date'],
            'employment_type_id' => ['required', 'exists:employment_types,id'],
            'job_position_id'    => ['required', 'exists:job_positions,id'],

            // Educations
            'educations'                => ['required', 'array'],
            'educations.*.school'       => ['required', 'string'],
            'educations.*.degree'       => ['required', 'string'],
            'educations.*.graduated_at' => ['required', 'date'],

            // Work Experiences
            'work_experiences'                      => ['nullable', 'array'],
            'work_experiences.*.previous_employer'  => ['required', 'string'],
            'work_experiences.*.job_position'       => ['required', 'string'],
            'work_experiences.*.from'               => ['required', 'date'],
            'work_experiences.*.to'                 => ['required', 'date'],
            'work_experiences.*.reason_for_leaving' => ['required', 'string'],

            // Attachments
            'attachments'   => ['required', 'array', 'max:15'],
            'attachments.*' => ['required', 'file', 'mimes:pdf,png,jpeg', 'max:5000'],

            // Present Addresses
            'present_address'                    => ['required', 'array'],
            'present_address.barangay_id'        => ['required', 'exists:barangays,id'],
            'present_address.additional_details' => ['required', 'string'],
            'present_address.zip_code'           => ['required', 'digits:4'],

            // Permanent Addresses
            'permanent_address'                    => ['required', 'array'],
            'permanent_address.barangay_id'        => ['required', 'exists:barangays,id'],
            'permanent_address.additional_details' => ['required', 'string'],
            'permanent_address.zip_code'           => ['required', 'digits:4'],
        ];
    }
}
