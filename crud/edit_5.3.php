<!--Praktikum 3. CRUD Bagian Update & Praktikum 5. Tampilan CRUD dengan Bootstrap-->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota</title>
    <!-- Mengimpor stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    // Mengimpor file koneksi.php
    include ('koneksi.php');
    // Mengambil nilai id dari URL dan mengonversinya menjadi integer
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    // Membuat query untuk mengambil data anggota berdasarkan id
    $query = "SELECT * FROM anggota WHERE id = $id";
    // Menjalankan query
    $result = mysqli_query($koneksi, $query);
    // Mengambil satu baris hasil query sebagai asosiatif array
    $row = mysqli_fetch_assoc($result);
    // Menutup koneksi ke database
    mysqli_close($koneksi);
    ?>
    <!-- Konten utama -->
    <div class="container mt-4">
        <!-- Judul halaman -->
        <h2>Edit Data Anggota</h2>
        <!-- Form untuk mengubah data anggota -->
        <form action="proses.php?aksi=ubah" method="post">
            <!-- Input hidden untuk menyimpan id anggota -->
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <!-- Label dan input untuk nama -->
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <!-- Label dan input untuk jenis kelamin -->
                <label>Jenis Kelamin:</label>
                <!-- Radio button untuk jenis kelamin laki-laki -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if (!empty($row['jenis_kelamin']) && $row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <!-- Radio button untuk jenis kelamin perempuan -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if (!empty($row['jenis_kelamin']) && $row['jenis_kelamin'] === 'P') echo 'checked'; ?> required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <!-- Label dan input untuk alamat -->
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>
            <div class="form-group">
                <!-- Label dan input untuk nomor telepon -->
                <label for="no_telp">No. Telp:</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
            </div>
            <!-- Tombol untuk menyimpan perubahan -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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