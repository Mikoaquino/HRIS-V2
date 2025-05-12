<?php

namespace App\Services;

use App\Models\EmployeePermanentAddress;
use App\Models\EmployeePresentAddress;

class EmployeeAddressService
{
    public function createPresentAddress(array $validated): EmployeePresentAddress
    {
        return EmployeePresentAddress::create($validated);
    }

    public function createPermanentAddress(array $validated): EmployeePermanentAddress
    {
        return EmployeePermanentAddress::create($validated);
    }

    public function updatePresentAddress(array $validated, EmployeePresentAddress $presentAddress): EmployeePresentAddress
    {
        return tap($presentAddress)->update($validated);
    }

    public function updatePermanentAddress(array $validated, EmployeePermanentAddress $permanentAddress): EmployeePermanentAddress
    {
        return tap($permanentAddress)->update($validated);
    }
}
