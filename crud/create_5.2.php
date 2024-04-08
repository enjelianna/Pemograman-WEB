<!--Praktikum 2. CRUD Bagian Create & Praktikum 5. Tampilan CRUD dengan Bootstrap-->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Anggota</title>
    <!-- Mengimpor stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <!-- Judul halaman -->
        <h2>Tambah Data Anggota</h2>
        <!-- Form untuk menambah data anggota -->
        <form action="index_5.1.php" method="post">
            <div class="form-group">
                <!-- Label dan input untuk nama -->
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <!-- Label dan input untuk jenis kelamin -->
                <label>Jenis Kelamin:</label>
                <!-- Radio button untuk jenis kelamin laki-laki -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <!-- Radio button untuk jenis kelamin perempuan -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="p" id="perempuan" required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <!-- Label dan input untuk alamat -->
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <!-- Label dan input untuk nomor telepon -->
                <label for="no_telp">No. Telp:</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" required>
            </div>
            <!-- Tombol untuk menyimpan data -->
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
        <!-- Tombol untuk kembali ke halaman utama -->
        <a class="btn btn-secondary mt-2" href="index.php">Kembali</a>
    </div>
    <!-- Mengimpor jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Mengimpor Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Mengimpor JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>