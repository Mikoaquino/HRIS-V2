<?php

namespace App\Services;

use App\Models\EmployeeEducation;

class EmployeeEducationService
{
    public function createEducation(array $validated): bool
    {
        $data = array_map(fn ($education) => [
            'employee_id'  => $validated['employee_id'],
            'school'       => $education['school'],
            'degree'       => $education['degree'],
            'from'         => $education['from'],
            'to'           => $education['to'],
            'created_at'   => now(),
            'updated_at'   => now(),
        ], $validated['educations']);

        return EmployeeEducation::insert($data);
    }

    public function updateEducation(array $validated): int
    {
        $data = array_map(fn ($education) => [
            'id'          => $education['id'] ?? null,
            'employee_id' => $validated['employee_id'],
            'school'      => $education['school'],
            'degree'      => $education['degree'],
            'from'        => $education['from'],
            'to'          => $education['to'],
        ], $validated['educations']);

        return EmployeeEducation::upsert($data, 'id', [
            'school', 'degree', 'from', 'to',
        ]);
    }
}
