<?php

namespace App\Enums;

enum Gender: string
{
    case MALE   = 'male';
    case FEMALE = 'female';

    public function getGender(): string
    {
        return match ($this) {
            self::MALE   => 'male',
            self::FEMALE => 'female',
        };
    }

    public static function getValues(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
