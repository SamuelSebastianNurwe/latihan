<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Fakultas - Telkom University</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #ff0000ff; padding: 4px 12px; }
        th { background: #757575ff; }
    </style>
</head>
<body>
    <h3>Daftar Fakultas - Brainrot</h3>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Fakultas Tung tung tung</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultas as $f)
            <tr>
                <td>{{ $f['kode'] }}</td>
                <td>{{ $f['nama_fakultas'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
