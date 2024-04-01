<?php
$pattern = '/go{1,2}d/'; // Mengubah ? menjadi {1,2}
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
  echo "cocokkan: " . $matches[0];
} else {
  echo "tidak ada yang cocok!";
}
?>
