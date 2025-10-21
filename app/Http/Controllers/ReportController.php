<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Salary;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ReportController extends Controller
{
    public function index()
    {
        $title = 'Laporan Rekap Pegawai';

        // Ambil semua pegawai dengan relasi ke departemen & jabatan
        $employees = Employee::with(['department', 'position'])->get();

        // Buat koleksi hasil rekap
        $dataRekap = $employees->map(function ($employee) {
            // Ambil total status kehadiran
            $hadir = Attendance::where('karyawan_id', $employee->id)
                ->where('status', 'hadir')
                ->count();

            $izin = Attendance::where('karyawan_id', $employee->id)
                ->where('status', 'izin')
                ->count();

            $sakit = Attendance::where('karyawan_id', $employee->id)
                ->where('status', 'sakit')
                ->count();

            $alfa = Attendance::where('karyawan_id', $employee->id)
                ->whereIn('status', ['alfa', 'alpa']) // mencari kedua kemungkinan ejaan
                ->count();

            // Ambil gaji terakhir dari tabel salaries
            $gaji_terakhir = Salary::where('karyawan_id', $employee->id)
                ->latest('created_at')
                ->value('total_gaji');

            // Kembalikan data dalam array
            return [
                'nama' => $employee->nama_lengkap,
                'departemen' => optional($employee->department)->nama_departemen ?? '-',
                'jabatan' => optional($employee->position)->nama_jabatan ?? '-',
                'hadir' => $hadir,
                'izin' => $izin,
                'sakit' => $sakit,
                'alfa' => $alfa,
                'gaji_terakhir' => $gaji_terakhir ?? 0,
            ];
        });

        return view('reports.index', compact('title', 'dataRekap'));
    }
    public function exportPdf()
    {
        $title = 'Laporan Rekap Pegawai';

        $employees = \App\Models\Employee::with(['department', 'position'])->get();

        $dataRekap = $employees->map(function ($employee) {
            $hadir = \App\Models\Attendance::where('karyawan_id', $employee->id)->where('status', 'hadir')->count();
            $izin = \App\Models\Attendance::where('karyawan_id', $employee->id)->where('status', 'izin')->count();
            $sakit = \App\Models\Attendance::where('karyawan_id', $employee->id)->where('status', 'sakit')->count();
            $alfa = \App\Models\Attendance::where('karyawan_id', $employee->id)->whereIn('status', ['alfa', 'alpa']) // mencari kedua kemungkinan ejaan
                ->count();
            $gaji_terakhir = \App\Models\Salary::where('karyawan_id', $employee->id)->latest('created_at')->value('total_gaji');

            return [
                'nama' => $employee->nama_lengkap,
                'departemen' => optional($employee->department)->nama_departemen ?? '-',
                'jabatan' => optional($employee->position)->nama_jabatan ?? '-',
                'hadir' => $hadir,
                'izin' => $izin,
                'sakit' => $sakit,
                'alfa' => $alfa,
                'gaji_terakhir' => $gaji_terakhir ?? 0,
            ];
        });

        // buat PDF dari view
        $pdf = Pdf::loadView('reports.pdf', compact('title', 'dataRekap'))
            ->setPaper('a4', 'landscape');

        // tampilkan PDF di browser (tidak langsung download)
        return $pdf->stream('laporan_rekap_pegawai.pdf');
    }
}
