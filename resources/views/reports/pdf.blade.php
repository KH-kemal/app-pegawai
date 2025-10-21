<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #333; }
        h2 { text-align: center; margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #555; padding: 6px 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        td:last-child, th:last-child { text-align: right; }
    </style>
</head>
<body>
    <h2>{{ $title }}</h2>

    <table>
        <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Departemen</th>
                <th>Jabatan</th>
                <th>Hadir</th>
                <th>Izin</th>
                <th>Sakit</th>
                <th>Alfa</th>
                <th>Total Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataRekap as $rekap)
            <tr>
                <td>{{ $rekap['nama'] }}</td>
                <td>{{ $rekap['departemen'] }}</td>
                <td>{{ $rekap['jabatan'] }}</td>
                <td style="text-align:center">{{ $rekap['hadir'] }}</td>
                <td style="text-align:center">{{ $rekap['izin'] }}</td>
                <td style="text-align:center">{{ $rekap['sakit'] }}</td>
                <td style="text-align:center">{{ $rekap['alfa'] }}</td>
                <td>Rp {{ number_format($rekap['gaji_terakhir'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
