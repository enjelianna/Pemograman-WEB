
<?php
include "koneksi.php";

// Mengambil nilai dari input form dengan nama "username" dan mengenkripsi password menggunakan fungsi md5
$username = $_POST['username'];
$password = md5($_POST['password']);

// Mengeksekusi query SQL untuk mencari data pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

if ($cek) {
    // Jika data ditemukan, tampilkan pesan berhasil login
    echo "Anda berhasil login. Silahkan menuju ";
    ?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php
}else {
    echo "Anda berhasil login. silahkan ";?>
    <a href="homeGuest.html">Login kembali</a>
    <?php
    echo mysqli_error($connect);
}
?>
