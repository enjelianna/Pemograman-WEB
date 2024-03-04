<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br> Hasil Perbandingan: <br>";
echo "Apakah a sama dengan b? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br> Hasil Operasi Logika: <br>";
echo "Hasil dari a && b: " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil dari a || b: " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil dari !a: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil dari !b: " . ($hasilNotB ? 'True' : 'False') . "<br>";

$a += $b;
echo "Setelah operasi a += b, nilai a menjadi: $a <br>";
$a -= $b;
echo "Setelah operasi a -= b, nilai a menjadi: $a <br>";
$a *= $b;
echo "Setelah operasi a *= b, nilai a menjadi: $a <br>";
$a /= $b;
echo "Setelah operasi a /= b, nilai a menjadi: $a <br>";
$a %= $b;
echo "Setelah operasi a %= b, nilai a menjadi: $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";

// JAWABAN SOAL
// Jumlah total kursi di restoran
$jumlahKursi = 45;

// Jumlah kursi yang sudah ditempati oleh pelanggan
$kursiTerisi = 28;

// Menghitung jumlah kursi yang masih kosong
$kursiKosong = $jumlahKursi - $kursiTerisi;

// Menghitung persentase kursi yang masih kosong
$persentaseKosong = ($kursiKosong / $jumlahKursi) * 100;

// Menampilkan hasil
echo "Jumlah kursi yang masih kosong: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentaseKosong, 2) . "%";
?>


