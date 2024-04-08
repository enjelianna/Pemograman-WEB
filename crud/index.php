<!--Praktikum 1-Bagian Read-->
<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Anggota</h2>
    <a href="create.php" class="btn-tambah">Tambah Anggota</a>
    <?php
    
    // Sertakan file koneksi ke database
    include('koneksi.php');
    // Query untuk mengambil data dari tabel 'anggota', diurutkan berdasarkan ID secara menurun
    $query = "SELECT * FROM anggota ORDER BY id DESC";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $no = 1;
        echo "<table>";
        echo "<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th><th>Alamat</th><th>No. Telp</th><th>Aksi</th></tr>";

        // Loop melalui setiap baris data
        while ($row = mysqli_fetch_array($result)) {
            // Tentukan jenis kelamin berdasarkan nilai pada kolom 'jenis_kelamin'
            $kelamin = ($row["jenis_kelamin"] === 'L') ? 'Laki-Laki' : 'Perempuan';
            echo "<tr>
            <td>" . $no++ . "</td>
            <td>" . $row["nama"] . "</td>
            <td>" . $kelamin . "</td>
            <td>" . $row["alamat"] . "</td>
            <td>" . $row["no_telp"] . "</td>
            <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
            <a href='#' onclick='konfirmasiHapus(".$row["id"].", \"". $row["nama"] ."\")'>Hapus</a></td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data.";
    }
    mysqli_close($koneksi);
    ?>
</div>
<script>
function konfirmasiHapus(id, nama) {
    var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama " + nama + "?");
    if (konfirmasi) {
        window.location.href = "proses.php?aksi=hapus&id=" + id;
    }
}
</script>
</body>
</html>