<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;

class AttendanceController extends Controller
{
    public function index()
    {
        $title = 'Data Absensi Pegawai';
        $attendances = Attendance::with('employee')->latest()->paginate(10);
        return view('attendances.index', compact('attendances', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Data Absensi Pegawai';

        $employees = Employee::all();
        return view('attendances.create', compact('employees', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'tanggal'     => 'required|date',
            'status'      => 'required|in:hadir,izin,sakit,alpa',
        ]);

        Attendance::create($request->all());

        return redirect()->route('attendances.index')->with('success', 'Data absensi berhasil ditambahkan.');
    }
    // DETAIL absensi
    public function show($id)
    {
        $title = 'Detail Data Absensi Pegawai';
        $attendance = Attendance::with('employee')->findOrFail($id);
        return view('attendances.show', compact('attendance', 'title'   ));
    }

    // FORM EDIT absensi
    public function edit($id)
    {
        $title = 'Edit Data Absensi Pegawai';

        $attendance = Attendance::findOrFail($id);
        $employees = Employee::all();
        return view('attendances.edit', compact('attendance', 'employees', 'title'));
    }

    // UPDATE absensi
    public function update(Request $request, $id)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'tanggal'     => 'required|date',
            'status'      => 'required|in:hadir,izin,alpa',
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());

        return redirect()->route('attendances.index')
            ->with('success', 'Data absensi berhasil diperbarui.');
    }
    public function destroy($id)
    {
        Attendance::findOrFail($id)->delete();
        return back()->with('success', 'Data absensi berhasil dihapus.');
    }
}
