<?php

namespace App\Services;

use App\Models\EmployeeLifecycle;

class EmployeeLifecycleService
{
    public function createNewHire(array $validated): EmployeeLifecycle
    {
        return EmployeeLifecycle::create($validated);
    }

    public function updateTenure()
    {
        //
    }
}
