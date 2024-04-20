<?php
// Memeriksa apakah sesi sudah dimulai, jika tidak, mulai sesi
if (session_status() === PHP_SESSION_NONE)
    session_start();

// Memeriksa apakah variabel $_SESSION['level'] tidak kosong
if (!empty($_SESSION['level'])) {
    // Memasukkan file koneksi database
    require 'config/koneksi.php';
    
    // Memasukkan file fungsi pesan kilat
    require 'fungsi/pesan_kilat.php';
    
    // Memasukkan file header admin
    include 'admin/template/header.php';
    
    // Memeriksa apakah parameter GET 'page' tidak kosong
    if (!empty($_GET['page'])) {
        // Memasukkan file modul yang diminta berdasarkan parameter GET 'page'
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        // Jika parameter GET 'page' kosong, tampilkan halaman utama admin
        include 'admin/template/home.php';
    }
    
    // Memasukkan file footer admin
    include 'admin/template/footer.php';
} else {
    // Jika variabel $_SESSION['level'] kosong, redirect ke halaman login
    header("Location: login.php");
}
?>