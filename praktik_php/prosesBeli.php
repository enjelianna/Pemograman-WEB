<?php
// Mengecek apakah form telah disubmit
if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
  // Menyimpan nilai dari form ke dalam cookie
  setcookie("beliNovel", $_POST["beliNovel"]);
  setcookie("beliBuku", $_POST["beliBuku"]);

  // Mengarahkan ke halaman keranjang belanja
  header("location:keranjangBelanja.php");
}

// Mendapatkan nilai cookie
$beliNovel = isset($_COOKIE['beliNovel']) ? $_COOKIE['beliNovel'] : 0;
$beliBuku = isset($_COOKIE['beliBuku']) ? $_COOKIE['beliBuku'] : 0;

// Menampilkan jumlah novel dan buku
echo "Jumlah Novel: " . $beliNovel . "<br>";
echo "Jumlah Buku: " . $beliBuku;
?>
