<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;

class SalaryController extends Controller
{
    // Tampilkan semua data gaji
    public function index()
    {
        $title = 'Data Gaji Pegawai';
        $salaries = Salary::with('employee')->latest()->paginate(10);

        return view('salaries.index', compact('salaries', 'title'));
    }

    // Form tambah data gaji
    public function create()
    {
        $title = 'Tambah Data Gaji Pegawai';
        $employees = \App\Models\Employee::all();

        return view('salaries.create', compact('employees', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'gaji_pokok'  => 'required|numeric|min:0',
            'tunjangan'   => 'nullable|numeric|min:0',
            'potongan'    => 'nullable|numeric|min:0',
        ]);

        $bulan = now()->translatedFormat('F Y'); 

        $gaji_pokok = $request->gaji_pokok ?? 0;
        $tunjangan  = $request->tunjangan ?? 0;
        $potongan   = $request->potongan ?? 0;

        $total = $gaji_pokok + $tunjangan - $potongan;

        Salary::create([
            'karyawan_id' => $request->karyawan_id,
            'bulan'       => $bulan,
            'gaji_pokok'  => $gaji_pokok,
            'tunjangan'   => $tunjangan,
            'potongan'    => $potongan,
            'total_gaji'  => $total,
        ]);

        return redirect()->route('salaries.index')
            ->with('success', 'Data gaji berhasil ditambahkan.');
    }
    public function edit($id)
{
    $salary = Salary::findOrFail($id);
    $employees = \App\Models\Employee::all();
    $title = 'Edit Data Gaji Pegawai';

    return view('salaries.edit', compact('salary', 'employees', 'title'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'karyawan_id' => 'required|exists:employees,id',
        'gaji_pokok'  => 'required|numeric|min:0',
        'tunjangan'   => 'nullable|numeric|min:0',
        'potongan'    => 'nullable|numeric|min:0',
    ]);

    $salary = Salary::findOrFail($id);
    $total = $request->gaji_pokok + $request->tunjangan - $request->potongan;

    $salary->update([
        'karyawan_id' => $request->karyawan_id,
        'gaji_pokok'  => $request->gaji_pokok,
        'tunjangan'   => $request->tunjangan,
        'potongan'    => $request->potongan,
        'total_gaji'  => $total,
    ]);

    return redirect()->route('salaries.index')->with('success', 'Data gaji berhasil diperbarui.');
}

    // Hapus data gaji
    public function destroy($id)
    {
        Salary::findOrFail($id)->delete();
        return back()->with('success', 'Data gaji berhasil dihapus.');
    }
    
}
