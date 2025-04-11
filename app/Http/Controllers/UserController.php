<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Enums\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     */
    public function index()
    {
        $users = User::with(['employee'])
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        $employees = Employee::whereDoesntHave('user')->get();
        $statuses = UserStatus::cases();
        
        return view('users.create', compact('employees', 'statuses'));
    }

    /**
     * Store a newly created user.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'employee_id' => ['required', 'exists:employees,id', 'unique:users,employee_id'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'status' => ['required', new Rules\Enum(UserStatus::class)],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $userData = [
            'email' => $request->email,
            'employee_id' => $request->employee_id,
            'password' => $request->password, // Hash is handled by the cast
            'status' => $request->status,
        ];

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/users');
            $userData['photo'] = str_replace('public/', '', $path);
        }

        User::create($userData);

        return redirect()->route('users.index')
                         ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        $statuses = UserStatus::cases();
        return view('users.edit', compact('user', 'statuses'));
    }

    /**
     * Update the specified user.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'status' => ['required', new Rules\Enum(UserStatus::class)],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $updateData = [
            'email' => $request->email,
            'status' => $request->status,
        ];

        if ($request->password) {
            $updateData['password'] = $request->password; // Hash is handled by the cast
        }

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($user->photo) {
                Storage::delete('public/'.$user->photo);
            }
            
            $path = $request->file('photo')->store('public/users');
            $updateData['photo'] = str_replace('public/', '', $path);
        }

        $user->update($updateData);

        return redirect()->route('users.index')
                         ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified user.
     */
    public function destroy(User $user)
    {
        // Delete photo if exists
        if ($user->photo) {
            Storage::delete('public/'.$user->photo);
        }

        $user->delete();

        return redirect()->route('users.index')
                         ->with('success', 'User deleted successfully.');
    }

    /**
     * Verify a user's email.
     */
    public function verify(User $user)
    {
        $user->update([
            'email_verified_at' => now(),
        ]);

        return back()->with('success', 'User verified successfully.');
    }

    /**
     * Bulk delete users.
     */
    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'ids' => ['required', 'array'],
            'ids.*' => ['exists:users,id'],
        ]);

        $users = User::whereIn('id', $request->ids)->get();
        
        foreach ($users as $user) {
            if ($user->photo) {
                Storage::delete('public/'.$user->photo);
            }
            $user->delete();
        }

        return response()->json(['message' => 'Selected users deleted successfully.']);
    }

    /**
     * Get employee details for AJAX request
     */
    public function getEmployeeDetails(Employee $employee)
    {
        return response()->json([
            'name' => $employee->name,
            'email' => $employee->email,
            // Add other fields you need
        ]);
    }
}