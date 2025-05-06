<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Exceptions\ThrottleRequestsException;

class ThrottleUnauthorizedRequest extends Request
{
    protected $key;

    public const MAX_ATTEMPTS = 60;

    public function __construct()
    {
        parent::__construct();

        $this->key = $this->ip();
    }

    public function increment(): void
    {
        if (RateLimiter::tooManyAttempts($this->key, self::MAX_ATTEMPTS)) {
            $cooldown = RateLimiter::availableIn($this->key);

            throw new ThrottleRequestsException(
                message: __('auth.throttle', ['seconds' => $cooldown]), 
                headers: [
                    'X-RateLimit-Limit' => self::MAX_ATTEMPTS,
                    'X-RateLimit-Remaining' => $this->getRemainingAttempts(),
                    'Retry-After' => $cooldown,
                    'X-RateLimit-Reset' => time() + $cooldown,
            ]);
        }

        RateLimiter::increment($this->key);
    }

    public function getRemainingAttempts(): int
    {
        return RateLimiter::remaining($this->key, self::MAX_ATTEMPTS);
    }
};
