<?php

namespace App\Services;

use App\Models\EmployeeWorkExperience;
use Illuminate\Database\Eloquent\Collection;

class EmployeeWorkExperienceService
{
    public function createWorkExperiences(array $validated): Collection
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

        EmployeeWorkExperience::insert($data);

        return EmployeeWorkExperience::hydrate($data);
    }

    public function updateWorkExperiences(array $validated): Collection
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

        EmployeeWorkExperience::upsert($data, 'id', [
            'previous_employer',
            'job_position',
            'from',
            'to',
            'reason_for_leaving',
        ]);

        return EmployeeWorkExperience::hydrate($data);
    }
}
