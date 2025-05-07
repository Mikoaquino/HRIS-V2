<?php

namespace App\Enums;

enum CivilStatus: string
{
    case SINGLE   = 'single';
    case MARRIED  = 'married';
    case DIVORCED = 'divorced';
    case WIDOWED  = 'widowed';

    public function getCivilStatus(): string
    {
        return match ($this) {

            self::SINGLE   => 'single',
            self::MARRIED  => 'married',
            self::DIVORCED => 'divorced',
            self::WIDOWED  => 'widowed',
        };
    }

    public static function getValues(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
