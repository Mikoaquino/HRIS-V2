<?php

namespace App\Services;

use App\Models\EmployeeAttachment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class EmployeeAttachmentService
{
    public function handleUploads(array $validated): Collection
    {
        $data = array_map(function ($attachment) use ($validated) {
            $attachment->store('employees');

            return [
                'employee_id' => $validated['employee_id'],
                'client_name' => $attachment->getClientOriginalName(),
                'hashed_name' => $attachment->hashName(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }, $validated['attachments']);

        EmployeeAttachment::insert($data);

        return EmployeeAttachment::hydrate($data);
    }

    public function getAttachment(EmployeeAttachment $attachment): ?string
    {
        return Storage::get(sprintf('%s/%s', 'employees', $attachment->hashed_name));
    }

    public function handleDelete(EmployeeAttachment $attachment)
    {
        if (! $attachment->trashed()) {
            return tap($attachment)->delete();
        }

        Storage::delete(sprintf('%s/%s', 'employees', $attachment->hashed_name));

        return tap($attachment)->forceDelete();
    }
}
