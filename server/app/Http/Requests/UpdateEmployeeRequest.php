<?php

namespace App\Http\Requests;

use App\Models\Barangay;
use Illuminate\Validation\Rule;
use App\Models\EmployeeEducation;
use App\Models\EmployeeWorkExperience;

class UpdateEmployeeRequest extends EmployeeFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $requestMethod = $this->method();

        $modelMap = [
            'educations' => [
                'table' => new EmployeeEducation()->getTable(),
                'column' => 'id',
            ],
            'work_experiences' => [
                'table' => new EmployeeWorkExperience()->getTable(),
                'column' => 'id',
            ],
            'present_address' => [
                'table' => new Barangay()->getTable(),
                'column' => 'code',
            ],
            'permanent_address' => [
                'table' => new Barangay()->getTable(),
                'column' => 'code',
            ],
        ];

        $modifiedRules = [];

        foreach ($this->baseRules() as $key => $rule) {
            $modifiedRules[$key] = $requestMethod === 'PATCH' ? ['sometimes', ...$rule] : $rule;

            if (! isset($modelMap[$key])) {
                continue;
            }

            ['table' => $table, 'column' => $column] = $modelMap[$key];

            $isAddress = in_array($key, ['present_address', 'permanent_address'], true);

            $index = $isAddress ? "{$key}.barangay_code" : "{$key}.*.{$column}";

            $modifiedRules[$index] = ['sometimes', 'required', Rule::exists($table, $column)];
        }

        return $modifiedRules;
    }
}
