<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            ['nama_jabatan' => 'Staff HRD', 'gaji_pokok' => 4500000],
            ['nama_jabatan' => 'Programmer', 'gaji_pokok' => 6000000],
            ['nama_jabatan' => 'Akuntan', 'gaji_pokok' => 5500000],
            ['nama_jabatan' => 'Operator', 'gaji_pokok' => 4000000],
        ];

        foreach ($positions as $pos) {
            Position::create($pos);
        }
    }
}
