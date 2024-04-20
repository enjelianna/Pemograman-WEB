<?php
// Memulai sesi dan memeriksa apakah pengguna sudah login
session_start();
if (!empty($_SESSION['username'])) {
    // Memuat file konfigurasi database dan fungsi-fungsi bantuan
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah ada permintaan untuk menghapus jabatan
    if (!empty($_GET['jabatan'])) {
        // Menggunakan fungsi antiinjection untuk membersihkan input
        $id = antiinjection($koneksi, $_GET['id']);
        // Membuat query untuk menghapus jabatan
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        // Menjalankan query dan mengecek apakah berhasil
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
            // Mengalihkan kembali ke halaman jabatan
            header("Location: ../index.php?page=jabatan");
            exit(); // Menghentikan eksekusi skrip lebih lanjut
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
    }
    // Memeriksa apakah ada permintaan untuk menghapus anggota
    elseif (!empty($_GET['anggota'])) {
        // Menggunakan fungsi antiinjection untuk membersihkan input
        $id = antiinjection($koneksi, $_GET['id']);
        // Membuat query untuk menghapus user
        $query = "DELETE FROM user WHERE id = '$id'";
        // Menjalankan query dan mengecek apakah berhasil
        if (mysqli_query($koneksi, $query)) {
            // Membuat query untuk menghapus anggota
            $query2 = "DELETE FROM anggota WHERE user_id = '$id'";
            // Menjalankan query dan mengecek apakah berhasil
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('warning', "Data Login Terhapus Tetapi Data Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
            }
            // Mengalihkan kembali ke halaman anggota
            header("Location: ../index.php?page=anggota");
            exit(); // Menghentikan eksekusi skrip lebih lanjut
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
    }
}
?>