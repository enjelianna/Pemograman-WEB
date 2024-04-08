<!--Praktikum 2 Bagaian Create-->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Anggota</title> <!-- Judul halaman web -->
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan file CSS untuk styling -->
</head>
<body>

<div class="container">
    <h2>Tambah Data Anggota</h2> <!-- Judul formulir -->

    <!-- Formulir untuk menambah data anggota dengan metode POST -->
    <form action="proses.php" method="post">

        <!-- Bagian input nama -->
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required> 
        <!-- Input teks untuk nama, wajib diisi -->

        <!-- Bagian pilihan jenis kelamin -->
        <div class="radio-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>

            <!-- Opsi Laki-laki -->
            <input type="radio" name="jenis_kelamin" value="L" id="laki-laki" required>
            <label for="laki-laki">Laki-Laki</label>

            <!-- Opsi Perempuan -->
            <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required>
            <label for="perempuan">Perempuan</label>
        </div>

        <!-- Bagian input alamat -->
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required> 
        <!-- Input teks untuk alamat, wajib diisi -->

        <!-- Bagian input nomor telepon -->
        <label for="no_telp">No. Telp:</label>
        <input type="text" name="no_telp" id="no_telp" required> 
        <!-- Input teks untuk nomor telepon, wajib diisi -->

        <!-- Tombol submit untuk mengirim formulir -->
        <button type="submit">Simpan Data</button>

        <!-- Tautan kembali ke halaman utama -->
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>
</body>
</html>