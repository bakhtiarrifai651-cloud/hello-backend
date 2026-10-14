<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Mahasiswa</h1>
    <form action="/mahasiswa" method="POST">
        @csrf
        <label for="nim">NIM: </label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama: </label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="jurusan">Jurusan: </label><br>
        <input type="text" id="jurusan" name="jurusan" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>