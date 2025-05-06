<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE   = 'active';
    case INACTIVE = 'inactive';

    public function getLabel(): string
    {
        return match ($this) {
            self::ACTIVE   => 'Active',
            self::INACTIVE => 'Inactive',
        };
    }

    public static function getValues(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
