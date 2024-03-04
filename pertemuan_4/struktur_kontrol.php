<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D <br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 km. <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
if ($nilai < 60) {
    echo "nilai: $nilai (tidak lulus) <br>";
    continue;
}
}
echo "nilai: $nilai (lulus) <br>";

// JAWABAN SOAL 1
// Daftar nilai dari 10 siswa
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai siswa dari terkecil ke terbesar
sort($nilai_siswa);

// Menghitung total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi
$total_nilai = 0;
for ($i = 2; $i < count($nilai_siswa) - 2; $i++) {
    $total_nilai += $nilai_siswa[$i];
}

// Menghitung nilai rata-rata
$jumlah_siswa = count($nilai_siswa) - 4; // dikurangi 2 nilai tertinggi dan 2 nilai terendah
$rata_rata = $total_nilai / $jumlah_siswa;
echo "Daftar nilai siswa: " . implode(", ", $nilai_siswa) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: $total_nilai <br>";
echo "Nilai rata-rata setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: $rata_rata <br>";

//JAWABAN SOAL 2
$harga_produk = 120000;
$diskon_persen = 20;
$batas_diskon = 100000;

// Hitung harga setelah diskon
if ($harga_produk > $batas_diskon) {
    // Hitung diskon
    $diskon = $harga_produk * ($diskon_persen / 100);
    // Harga setelah diskon
    $harga_setelah_diskon = $harga_produk - $diskon;
} else {
    // Jika harga produk tidak melebihi batas, tidak ada diskon
    $harga_setelah_diskon = $harga_produk;
}
echo "Harga produk sebelum diskon: Rp " . number_format($harga_produk, 2, ',', '.') . "<br>";
if ($harga_produk > $batas_diskon) {
    echo "Anda mendapatkan diskon sebesar $diskon_persen% <br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($harga_setelah_diskon, 2, ',', '.') . "<br>";
} else {
    echo "Tidak ada diskon yang diberikan <br>";
    echo "Harga yang harus dibayar: Rp " . number_format($harga_setelah_diskon, 2, ',', '.') . "<br>";
}

//JAWABAN SOAL 3
$skor_pemain = 750; // Misalnya, skor pemain adalah 750
echo "Total skor pemain adalah: $skor_pemain <br>";
if ($skor_pemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>
