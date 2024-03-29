<?php

$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
$email = $_POST['email'];

// Validate email format using filter_var
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<p>Input yang Anda masukkan: " . $input . "</p>";
  echo "<p>Email yang Anda masukkan: " . $email . "</p>";
} else {
  echo "<p>Email yang dimasukkan tidak valid.</p>";
}

?>
