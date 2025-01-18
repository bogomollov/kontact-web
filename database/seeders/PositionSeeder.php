<?php

namespace Database\Seeders;

use App\Enums\Positions;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Positions::getValues() as $position) {
            Position::create([
                'name' => $position,
            ]);
        }
    }
}
