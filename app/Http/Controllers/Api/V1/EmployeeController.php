<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\EmployeeFilter;
use App\Http\Resources\V1\EmployeeCollection;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EmployeeResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EmployeeController extends Controller
{
    public function __construct(protected Employee $employee) {}

    public function index(Request $request): EmployeeCollection
    {
        $filter = new EmployeeFilter;
        $clause = $filter->transform($request);

        $employees = $this->employee->where($clause);

        if ($request->query('includeAccount')) {
            $employees= $employees->with('account');
        }

        return new EmployeeCollection($employees->paginate()->appends($request->query()));
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);
        
        return response()->json([
            'data' => $request,
            'message' => 'naysu'
        ], 201);
    }

    public function show(mixed $id): EmployeeResource|JsonResponse
    {
        try {
            return new EmployeeResource($this->employee->findOrFail($id));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json([
                'message' => $modelNotFoundException->getMessage()
            ], 404);
        }
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
