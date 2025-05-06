<?php

namespace App\Services;

use App\Http\Resources\EmployeeAttachmentCollection;
use App\Models\EmployeeAttachment;
use Illuminate\Support\Facades\Storage;

class EmployeeAttachmentService
{
    public function __construct(protected EmployeeAttachment $attachment) {}

    public function handleUploads(array $validatedData): EmployeeAttachmentCollection
    {
        $validatedData = (object) $validatedData;

        $data = array_map(function ($attachment) use ($validatedData) {
            $attachment->store('employees');

            return [
                'employee_id' => $validatedData->employee_id,
                'client_name' => $attachment->getClientOriginalName(),
                'hashed_name' => $attachment->hashName(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }, $validatedData->attachments);

        $this->attachment->insert($data);

        return EmployeeAttachmentCollection::make($this->attachment->hydrate($data));
    }

    public function getAttachment(EmployeeAttachment $attachment): ?string
    {
        return Storage::get(sprintf('%s/%s', 'employees', $attachment->hashed_name));
    }
}
