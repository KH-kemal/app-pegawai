<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;

class EmployeeController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $title = 'Daftar Pegawai';

        $employees = Employee::latest()->paginate(5);
        Employee::with(['department', 'position'])->latest()->paginate(5);

        return view('employees.index', compact('employees', 'title'));
    }

    // Form tambah pegawai
    public function create()
    {
        $title = 'Tambahkan Pegawai';

        $departments = Department::all();
        $positions   = Position::all();

        return view('employees.create', compact('departments', 'positions', 'title'));
    }

    // Simpan data pegawai
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'   => 'required|string|max:55',
            'email'          => 'required|email|unique:employees,email',
            'nomor_telepon'  => 'nullable|string|max:15',
            'tanggal_lahir'  => 'nullable|date',
            'alamat'         => 'nullable|string',
            'tanggal_masuk'  => 'required|date',
            'departemen_id'  => 'required|exists:departments,id',
            'jabatan_id'     => 'required|exists:positions,id',
            'status'         => 'required|in:aktif,nonaktif',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    // Detail pegawai
    public function show(string $id)
    {
        $title = 'Detail Pegawai';

        $employee = Employee::findOrFail($id);
    return view('employees.show', compact('employee', 'title'));
    }
    // Form edit pegawai
    public function edit(string $id)
    {
        $title = 'Edit Pegawai';

        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        $positions = Position::all();

        return view('employees.edit', compact('employee', 'departments', 'positions', 'title'));
    }
        // Update data pegawai
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap'   => 'required|string|max:55',
            'email'          => 'required|email|unique:employees,email,' . $id,
            'nomor_telepon'  => 'nullable|string|max:15',
            'tanggal_lahir'  => 'nullable|date',
            'alamat'         => 'nullable|string',
            'tanggal_masuk'  => 'required|date',
            'departemen_id'  => 'required|exists:departments,id',
            'jabatan_id'     => 'required|exists:positions,id',
            'status'         => 'required|in:aktif,nonaktif',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil diperbarui.');
    }
    // Hapus data pegawai
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil dihapus.');
    }
}
