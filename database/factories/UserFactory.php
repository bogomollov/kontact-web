<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Departments;
use App\Enums\Positions;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'department' => Departments::getRandomValue(),
            'position' => Positions::getRandomValue(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
