<?php

namespace App\Services;

use App\Models\EmployeeEducation;
use Illuminate\Database\Eloquent\Collection;

class EmployeeEducationService
{
    public function createEducation(array $validated): Collection
    {
        $data = array_map(fn ($education) => [
            'employee_id'  => $validated['employee_id'],
            'school'       => $education['school'],
            'degree'       => $education['degree'],
            'graduated_at' => $education['graduated_at'],
            'created_at'   => now(),
            'updated_at'   => now(),
        ], $validated['educations']);

        EmployeeEducation::insert($data);

        return EmployeeEducation::hydrate($data);
    }

    public function updateEducation(array $validated): Collection
    {
        $data = array_map(fn ($education) => [
            'id'           => $education['id'] ?? null,
            'employee_id'  => $validated['employee_id'],
            'school'       => $education['school'],
            'degree'       => $education['degree'],
            'graduated_at' => $education['graduated_at'],
        ], $validated['educations']);

        EmployeeEducation::upsert($data, 'id', [
            'school', 'degree', 'graduated_at',
        ]);

        return EmployeeEducation::hydrate($data);
    }
}
