<!--Praktikum 5. Tampilan CRUD dengan Bootstrap-->
<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <!-- Mengimpor stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <!-- Judul halaman -->
        <h2>Data Anggota</h2>
        <!-- Tombol untuk menuju halaman tambah data -->
        <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
        <br><br>
        <?php
        // Mengimpor file koneksi.php
        include('koneksi.php');
        // Membuat query untuk mengambil data anggota dari database
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        // Menjalankan query
        $result = mysqli_query($koneksi, $query);
        ?>
        <!-- Tabel untuk menampilkan data anggota -->
        <table class="table">
            <!-- Header tabel -->
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inisialisasi nomor urut
                $no = 1;
                // Mengulangi hasil query untuk setiap baris data
                while ($row = mysqli_fetch_assoc($result)) {
                    // Menentukan jenis kelamin berdasarkan nilai dalam database
                    $kelamin = ($row["jenis_kelamin"] == "L") ? 'Laki-Laki' : 'Perempuan';
                ?>
                <tr>
                    <!-- Menampilkan nomor urut -->
                    <td><?= $no++ ?></td>
                    <!-- Menampilkan nama anggota -->
                    <td><?= $row["nama"] ?></td>
                    <!-- Menampilkan jenis kelamin anggota -->
                    <td><?= $kelamin ?></td>
                    <!-- Menampilkan alamat anggota -->
                    <td><?= $row["alamat"] ?></td>
                    <!-- Menampilkan nomor telepon anggota -->
                    <td><?= $row["no_telp"] ?></td>
                    <!-- Kolom untuk aksi (edit dan hapus) -->
                    <td>
                        <!-- Tombol untuk menuju halaman edit data -->
                        <a class="btn btn-primary" href="edit.php?id=<?= $row["id"] ?>">Edit</a>
                        <!-- Tombol untuk menghapus data dengan modal konfirmasi -->
                        <button class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $row["id"] ?>">Hapus</button>
                    </td>
                </tr>
                <!-- Modal konfirmasi hapus data -->
                <div class="modal fade" id="hapusModal<?= $row["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- Judul modal -->
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                <!-- Tombol close modal -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Isi pesan konfirmasi hapus -->
                                Apakah Anda yakin ingin menghapus data dengan nama <?= $row["nama"] ?>?
                            </div>
                            <div class="modal-footer">
                                <!-- Tombol untuk menghapus data -->
                                <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
                                <!-- Tombol untuk menutup modal -->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Mengimpor jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Mengimpor Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Mengimpor JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>