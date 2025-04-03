<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Enums\UserStatus;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = fake()->randomElement(UserStatus::cases());
        $deleted = $status === UserStatus::INACTIVE ? now() : null;

        return [
            'email' => fake()->unique()->safeEmail(),
            'employee_id' => Employee::factory(),
            'password' => 'password',
            'status' => $status,
            'remember_token' => Str::random(10),
            'deleted_at' => $deleted,
        ];
    }
}
