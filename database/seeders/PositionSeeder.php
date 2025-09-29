<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        Position::insert([
            ['nama_jabatan' => 'Manager', 'created_at' => now(), 'updated_at' => now()],
            ['nama_jabatan' => 'Staff', 'created_at' => now(), 'updated_at' => now()],
            ['nama_jabatan' => 'Intern', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
