<?php
// Mendefinisikan fungsi 'antiinjection' dengan dua parameter: $koneksi dan $data
function antiinjection($koneksi, $data)
{
    // Menggunakan fungsi 'mysqli_real_escape_string' untuk menghindari SQL injection
    // Fungsi 'stripslashes' menghapus backslashes
    // Fungsi 'strip_tags' menghapus tag HTML dan PHP dari string
    // Fungsi 'htmlspecialchars' mengonversi karakter khusus menjadi entitas HTML
    // ENT_QUOTES mengonversi kedua kutip tunggal dan ganda
    $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    
    // Mengembalikan string yang telah difilter
    return $filter_sql;
}
?>