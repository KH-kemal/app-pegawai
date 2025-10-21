<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Tampilkan semua departemen
    public function index()
    {
        $title = 'Daftar Departemen';

        $departments = Department::latest()->paginate(5);
        return view('departments.index', compact('departments', 'title'));
    }

    // Form tambah departemen
    public function create()
    {
        $title = 'Tambahkan Departemen';

        return view('departments.create', compact('title'));
    }

    // Simpan data departemen
    public function store(Request $request)
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:100|unique:departments,nama_departemen',
        ]);

        Department::create($request->all());
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil ditambahkan.');
    }

    // Form edit departemen
    public function edit(Department $department)
    {
        $title = 'Edit Departemen';
        return view('departments.edit', compact('department', 'title'));
    }

    // Update data departemen   
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:100|unique:departments,nama_departemen,' . $department->id,
        ]);

        $department->update($request->all());
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil diperbarui.');
    }

    // Hapus data departemen
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil dihapus.');
    }
}
