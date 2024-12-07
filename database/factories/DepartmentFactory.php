<?php

namespace Database\Factories;

use App\Enums\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => Departments::getRandomValue(),
        ];
    }
}
