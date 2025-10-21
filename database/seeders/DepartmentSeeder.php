<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = ['HRD', 'Keuangan', 'IT', 'Produksi'];

        foreach ($departments as $dept) {
            Department::create(['nama_departemen' => $dept]);
        }
    }
}
