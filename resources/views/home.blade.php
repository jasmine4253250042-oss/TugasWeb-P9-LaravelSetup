<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Halaman Home</h1>

    <p>Selamat datang di website Laravel saya.</p>

    <h2>Data Mahasiswa</h2>

    <ul>
        <li>Nama: {{ $data['nama'] }}</li>
        <li>Jurusan: {{ $data['jurusan'] }}</li>
        <li>Semester: {{ $data['semester'] }}</li>
    </ul>
</body>
</html>