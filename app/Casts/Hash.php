<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

class Hash implements CastsInboundAttributes
{
    public function __construct(protected $algorithm = null) {}

    public function set($model, string $key, $value, array $attributes)
    {
        return ! $this->algorithm ? bcrypt($value) : hash($this->algorithm, $value);
    }
}
