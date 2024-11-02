<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Departments;
use App\Models\Role;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'surname' => fake()->name(),
            'department_id' => Departments::getRandomValue(),
            'position_id' => Role::factory(),
        ];
    }
}
