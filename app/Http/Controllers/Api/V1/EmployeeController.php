<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\EmployeeResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct() {}

    public function index()
    {
        //
    }

public function store(Request $request)
{
    // Validate input
    $validator = Validator::make($request->all(), [
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'errors' => $validator->errors(),
        ], 422);
    }

    // Create employee
    $employee = Employee::create([
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'last_name' => $request->last_name,
    ]);

    return response()->json([
        'status' => 'success',
            'message' => 'Employee created successfully!',
            'data' => new EmployeeResource($employee)
        ], 201);
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
}
