<?php

namespace App\Services;

use App\Models\EmployeeEducation;
use Illuminate\Database\Eloquent\Collection;

class EmployeeEducationService
{
    public function createEducations(array $validated): Collection
    {
        $data = array_map(fn ($education) => [
            'employee_id'  => $validated['employee_id'],
            'school'       => $education['school'],
            'degree'       => $education['degree'],
            'graduated_at' => $education['graduated_at'],
        ], $validated['educations']);

        EmployeeEducation::insert($data);

        return EmployeeEducation::hydrate($data);
    }
}
