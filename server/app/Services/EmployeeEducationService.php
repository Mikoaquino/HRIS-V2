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
            'graduated_at' => $education['graduated_at'],
            'created_at'   => now(),
            'updated_at'   => now(),
        ], $validated['educations']);

        return EmployeeEducation::insert($data);
    }

    public function updateEducation(array $validated): int
    {
        $data = array_map(fn ($education) => [
            'id'           => $education['id'] ?? null,
            'employee_id'  => $validated['employee_id'],
            'school'       => $education['school'],
            'degree'       => $education['degree'],
            'graduated_at' => $education['graduated_at'],
        ], $validated['educations']);

        return EmployeeEducation::upsert($data, 'id', [
            'school', 'degree', 'graduated_at',
        ]);
    }
}
