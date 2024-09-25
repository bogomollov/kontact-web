<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'display_name' => function (array $attributes) {
                return strstr(User::find($attributes['user_id'])->fullname, ' ');
            },
            'login' => fake()->userName(),
            'password' => static::$password ??= Hash::make('password'),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'is_online' => fake()->boolean(),
            'remember_token' => Str::random(10),
        ];
    }
}
