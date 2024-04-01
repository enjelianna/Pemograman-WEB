<?php
// Mendapatkan method request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mendapatkan data dari form
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Array untuk menyimpan pesan error
  $errors = array();

  // Validasi nama
  if (empty($nama)) {
    $errors[] = "Nama harus diisi.";
  }

  // Validasi email
  if (empty($email)) {
    $errors[] = "Email harus diisi.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
  }

  // Validasi password
  if (strlen($password) < 8) {
    $errors[] = "Password minimal harus 8 karakter.";
  }

  // Mengecek jika terdapat error
  if (!empty($errors)) {
    // Menampilkan pesan error
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
  } else {
    // Melakukan proses selanjutnya jika tidak ada error
    // Contoh: Menyimpan data ke database, mengirim email
    echo "Data berhasil dikirim: Nama = $nama, Email = $email, Password = $password";

    // Implementasikan proses database atau email di sini
  }
}
?>
