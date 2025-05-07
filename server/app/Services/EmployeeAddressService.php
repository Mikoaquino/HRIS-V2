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
}
