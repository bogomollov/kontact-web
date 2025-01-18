<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition(): array
    {
        $user = fake()->name();
        $res = explode(" ", $user);

        return [
            'firstName' => $res[0],
            'lastName' => $res[1],
            'middleName' => $res[2],
            'department_id' => Department::inRandomOrder()->first()->id,
            'position_id' => Position::inRandomOrder()->first()->id,
        ];
    }
}
