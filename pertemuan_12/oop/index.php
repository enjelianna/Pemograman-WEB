<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Mengatur viewport untuk responsivitas pada perangkat mobile. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jabatan</title>
    <!-- Menghubungkan Bootstrap CSS untuk styling halaman. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Tombol untuk membuka modal form tambah data jabatan. -->
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambahModal">Tambah</button>
        
        <!-- Tabel untuk menampilkan data jabatan. -->
        <table class="table">
            <thead>
                <!-- Header tabel dengan judul kolom. -->
                <tr>
                    <th>ID</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP script untuk menampilkan data jabatan dalam tabel. -->
                <?php
                foreach ($tampil as $show) {
                    echo "<tr>";
                    echo "<td>" . $show['id'] . "</td>";
                    echo "<td>" . $show['jabatan'] . "</td>";
                    echo "<td>" . $show['keterangan'] . "</td>";
                    echo "<td>";
                    // Link untuk mengedit data jabatan.
                    echo "<a href='Edit.php?id=". $show['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                    // Link untuk menghapus data jabatan.
                    echo "<a href='index.php?action=delete&id=" . $show['id'] . "' class='btn btn-danger btn-sm'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal untuk form tambah data jabatan. -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role=document>
            <div class="modal-content">
                <div class="modal-header">
                    <!-- Judul modal. -->
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jabatan</h5>
                    <!-- Tombol untuk menutup modal. -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk menambah data jabatan. -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Jabatan:</label>
                            <!-- Input untuk nama jabatan. -->
                            <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Keterangan:</label>
                            <!-- Textarea untuk keterangan jabatan. -->
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <!-- Tombol untuk submit form. -->
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Menghubungkan jQuery dan Bootstrap JS untuk fungsionalitas modal dan lainnya. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>