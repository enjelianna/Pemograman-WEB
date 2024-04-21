<?php
// Memasukkan file 'Crud.php' yang berisi kelas Crud untuk operasi CRUD.
require_once 'Crud.php';

// Membuat objek dari kelas Crud.
$crud = new Crud();

// Mengambil nilai 'id' dari query string URL.
$id = $_GET['id'];

// Memanggil fungsi readById untuk mendapatkan data jabatan berdasarkan 'id'.
$tampil = $crud->readById($id);

// Memeriksa apakah form telah disubmit melalui metode POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai 'jabatan' dan 'keterangan' dari form.
    $jabatan = $_POST['jabatan'];
    $keterangan = $_POST['keterangan'];

    // Memperbarui data jabatan dengan fungsi update.
    $crud->update($id, $jabatan, $keterangan);

    // Mengarahkan kembali ke halaman 'index.php'.
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan</title>
    <!-- Menghubungkan Bootstrap CSS untuk styling. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Jabatan</h2>
        <!-- Form untuk mengedit data jabatan. -->
        <form action="" method="post">
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <!-- Input untuk 'jabatan', diisi dengan data saat ini. -->
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $tampil['jabatan'];?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <!-- Textarea untuk 'keterangan', diisi dengan data saat ini. -->
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required><?php echo $tampil['keterangan'];?></textarea>
            </div>
            <!-- Input tersembunyi untuk menyimpan 'id' dari data yang akan diperbarui. -->
            <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
            <!-- Tombol untuk submit form. -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- Menghubungkan jQuery dan Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>