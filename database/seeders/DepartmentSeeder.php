<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::insert([
            ['nama_departemen' => 'IT', 'created_at' => now(), 'updated_at' => now()],
            ['nama_departemen' => 'HR', 'created_at' => now(), 'updated_at' => now()],
            ['nama_departemen' => 'Finance', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
