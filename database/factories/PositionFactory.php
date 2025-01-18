<?php

namespace Database\Factories;

use App\Enums\Positions;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(Positions::asArray()),
        ];
    }
}
