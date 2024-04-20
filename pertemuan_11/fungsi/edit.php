<?php
// Memulai sesi dan memeriksa apakah pengguna sudah login
session_start();
if (!empty($_SESSION['username'])) {
    // Memuat file konfigurasi database dan fungsi-fungsi bantuan
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah ada permintaan untuk mengubah jabatan
    if (!empty($_GET['jabatan'])) {
        // Menggunakan fungsi antiinjection untuk membersihkan input
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        // Membuat query untuk mengupdate jabatan
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        // Menjalankan query dan mengecek apakah berhasil
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Gagal Mengubah Jabatan Karena: " . mysqli_error($koneksi));
        }
        // Mengalihkan kembali ke halaman jabatan
        header("Location: ../index.php?page=jabatan");
        exit(); // Menghentikan eksekusi skrip lebih lanjut
    }
    // Memeriksa apakah ada permintaan untuk mengubah anggota
    elseif (!empty($_GET['anggota'])) {
        // Menggunakan fungsi antiinjection untuk membersihkan input
        $user_id = antiinjection($koneksi, $_POST['id']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jabatan_id = antiinjection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);
        $username = antiinjection($koneksi, $_POST['username']);
        // Membuat query untuk mengupdate anggota
        $query_anggota = "UPDATE anggota SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$no_telp', jabatan_id = '$jabatan_id' WHERE user_id = '$user_id'";
        // Menjalankan query dan mengecek apakah berhasil
        if (mysqli_query($koneksi, $query_anggota)) {
            // Memeriksa apakah password juga perlu diubah
            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
                // Generate random salt
                $salt = bin2hex(random_bytes(16));
                // Gabungkan salt dengan password
                $combined_password = $salt . $password;
                // Hash password dengan salt
                $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);
                // Membuat query untuk mengupdate user
                $query_user = "UPDATE user SET username = '$username', password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";
                // Menjalankan query dan mengecek apakah berhasil
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else {
                // Jika tidak ada perubahan password, hanya update username
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                // Menjalankan query dan mengecek apakah berhasil
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Gagal Mengubah Anggota Karena: " . mysqli_error($koneksi));
        }
        // Mengalihkan kembali ke halaman anggota
        header("Location: ../index.php?page=anggota");
        exit(); // Menghentikan eksekusi skrip lebih lanjut
    }
}
?>