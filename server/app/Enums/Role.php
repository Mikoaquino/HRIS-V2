<?php

namespace App\Enums;

enum Role: int
{
    case ADMIN    = 1;
    case HR       = 2;
    case EMPLOYEE = 3;

    public function getLabel(): string
    {
        return match ($this) {
            self::ADMIN    => 'Administrator',
            self::HR       => 'Human Resource',
            self::EMPLOYEE => 'Regular Employee'
        };
    }

    public static function getValues(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
