<?php

namespace Database\Seeders;

use App\Enums\Departments;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Departments::getValues() as $department) {
            Department::create([
                'name' => $department,
            ]);
        }
    }
}
