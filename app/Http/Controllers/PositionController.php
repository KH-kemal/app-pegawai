<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    // Tampilkan semua jabatan
    public function index()
    {
        $title = 'Daftar Jabatan';

        $positions = Position::latest()->paginate(5);
        return view('positions.index', compact('positions', 'title'));
    }

    // Form tambah jabatan
    public function create()
    {
        $title = 'Tambahkan Jabatan';
        return view('positions.create', compact('title'));
    }

    // Simpan data jabatan
    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:100|unique:positions,nama_jabatan',
            'gaji_pokok'   => 'required|numeric|min:0',
        ]);

        Position::create($request->all());
        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil ditambahkan.');
    }

    // Form edit jabatan
    public function edit(Position $position)
    {
        $title = 'Edit Jabatan';

        return view('positions.edit', compact('position', 'title'));
    }

    // Update data jabatan
    public function update(Request $request, Position $position)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:100|unique:positions,nama_jabatan,' . $position->id,
            'gaji_pokok'   => 'required|numeric|min:0',
        ]);

        $position->update($request->all());
        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil diperbarui.');
    }

    // Hapus data jabatan
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil dihapus.');
    }
}
