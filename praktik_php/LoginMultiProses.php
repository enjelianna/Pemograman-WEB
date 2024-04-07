<?php
include "koneksi.php";

// Mengambil nilai dari input form dengan nama "username" dan mengenkripsi password menggunakan fungsi md5
$username = $_POST['username'];
$password = md5($_POST['password']);

// Mengeksekusi query SQL untuk mencari data pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);

// Mengambil hasil query dalam bentuk array asosiatif
$row = mysqli_fetch_assoc($result);
if ($row) {
    // Jika data ditemukan, cek level pengguna
    if ($row['level'] == 1) {
        // Jika level adalah 1 (admin), tampilkan pesan berhasil login dan berikan link ke halaman admin
        echo "Anda berhasil login sebagai admin. Silahkan menuju <a href='homeAdmin.html'>Halaman HOME</a>";
    } else if ($row['level'] == 2) {
        // Jika level adalah 2 (guest), tampilkan pesan berhasil login dan berikan link ke halaman guest
        echo "Anda berhasil login sebagai guest. Silahkan menuju <a href='homeGuest.html'>Halaman HOME</a>";
    }
} else {
    // Jika login gagal, tampilkan pesan dan berikan link untuk mencoba login kembali
    echo "Anda gagal login. Silahkan <a href='loginForm.html'>Login kembali</a>";
}

// Menutup koneksi ke database
mysqli_close($connect);
?>