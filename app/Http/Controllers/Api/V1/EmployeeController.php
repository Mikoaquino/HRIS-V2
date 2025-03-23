<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function __construct(protected Employee $employee) {}

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(mixed $id)
    {
        //
    }

    public function update(Request $request, int $id)
    {
        //
    }

    public function destroy(int $id)
    {
        //
    }

    public function forceDestroy(int $id)
    {
        //
    }
}
