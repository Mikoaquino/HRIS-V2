<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Enums\UserStatus;

class Userlist extends Component
{
    use WithPagination;

    // Search and filter properties
    public $search = '';
    public $statusFilter = '';
    public $roleFilter = '';
    public $perPage = 10;
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $selectedUsers = [];
    public $showVerifyModal = false;
    public $showDeleteModal = false;
    public $userIdBeingManaged = null;

    // Define query string parameters
    protected $queryString = [
        'search' => ['except' => ''],
        'statusFilter' => ['except' => ''],
        'roleFilter' => ['except' => ''],
        'perPage',
        'sortField',
        'sortDirection'
    ];

    public function render()
    {
        // Query users with related employee data
        $users = User::with(['employee'])
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('email', 'like', '%'.$this->search.'%')
                      ->orWhereHas('employee', function ($q) {
                          $q->where('first_name', 'like', '%'.$this->search.'%')
                            ->orWhere('last_name', 'like', '%'.$this->search.'%')
                            ->orWhere('middle_name', 'like', '%'.$this->search.'%');
                      });
                });
            })
            ->when($this->statusFilter, function ($query) {
                $query->where('status', $this->statusFilter);
            })
            ->when($this->roleFilter, function ($query) {
                $query->where('role', $this->roleFilter);
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        // Get enums and roles for dropdowns
        $statuses = UserStatus::cases();
        
        // BACKEND: Replace with actual roles from database if using a roles table
        $roles = ['Administrator', 'Manager', 'Employee', 'HR', 'Finance'];

        return view('livewire.userlist', [
            'users' => $users,
            'statuses' => $statuses,
            'roles' => $roles
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        
        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmUserDeletion($userId)
    {
        $this->userIdBeingManaged = $userId;
        $this->showDeleteModal = true;
    }

    public function confirmUserVerification($userId)
    {
        $this->userIdBeingManaged = $userId;
        $this->showVerifyModal = true;
    }

    public function deleteUser()
    {
        // BACKEND INTEGRATION POINT: 
        // Call your actual delete method here
        try {
            User::find($this->userIdBeingManaged)->delete();
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'User deleted successfully!'
            ]);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => 'Error deleting user: '.$e->getMessage()
            ]);
        }

        $this->showDeleteModal = false;
        $this->userIdBeingManaged = null;
    }

    public function verifyUser()
    {
        // BACKEND INTEGRATION POINT:
        // Implement your verification logic
        try {
            $user = User::find($this->userIdBeingManaged);
            $user->update([
                'email_verified_at' => now(),
                'status' => UserStatus::Active // Assuming you have an Active status
            ]);
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'User verified successfully!'
            ]);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => 'Error verifying user: '.$e->getMessage()
            ]);
        }

        $this->showVerifyModal = false;
        $this->userIdBeingManaged = null;
    }

    public function bulkDelete()
    {
        if (empty($this->selectedUsers)) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => 'No users selected!'
            ]);
            return;
        }

        // BACKEND INTEGRATION POINT:
        // Implement bulk delete logic
        try {
            User::whereIn('id', $this->selectedUsers)->delete();
            $this->selectedUsers = [];
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'Selected users deleted successfully!'
            ]);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => 'Error deleting users: '.$e->getMessage()
            ]);
        }
    }

    public function exportUserData()
    {
        // BACKEND INTEGRATION POINT:
        // Implement export functionality
        $this->dispatchBrowserEvent('notify', [
            'type' => 'info',
            'message' => 'Export functionality will be implemented on the backend'
        ]);
    }
}