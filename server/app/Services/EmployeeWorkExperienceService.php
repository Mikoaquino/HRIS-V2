<?php

namespace App\Services;

use App\Models\EmployeeWorkExperience;

class EmployeeWorkExperienceService
{
    public function createWorkExperiences(array $validated): int
    {
        $data = array_map(fn ($workExperience) => [
            'employee_id'        => $validated['employee_id'],
            'previous_employer'  => $workExperience['previous_employer'],
            'job_position'       => $workExperience['job_position'],
            'from'               => $workExperience['from'],
            'to'                 => $workExperience['to'],
            'reason_for_leaving' => $workExperience['reason_for_leaving'],
            'created_at'         => now(),
            'updated_at'         => now(),
        ], $validated['work_experiences']);

        return EmployeeWorkExperience::insert($data);
    }

    public function updateWorkExperiences(array $validated): int
    {
        $data = array_map(fn ($workExperience) => [
            'id'                 => $workExperience['id'] ?? null,
            'employee_id'        => $validated['employee_id'],
            'previous_employer'  => $workExperience['previous_employer'],
            'job_position'       => $workExperience['job_position'],
            'from'               => $workExperience['from'],
            'to'                 => $workExperience['to'],
            'reason_for_leaving' => $workExperience['reason_for_leaving'],
        ], $validated['work_experiences']);

        return EmployeeWorkExperience::upsert($data, 'id', [
            'previous_employer',
            'job_position',
            'from',
            'to',
            'reason_for_leaving',
        ]);
    }
}
