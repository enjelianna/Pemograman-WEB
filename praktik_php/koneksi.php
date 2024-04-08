<?php
// Informasi koneksi ke database
$host = "localhost"; // host database 
$username = "root"; // username database 
$password = ""; // password database 
$database = "prakwebdb"; // nama database yang dibuat
$table = "user";

// Membuat koneksi
$connect = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>