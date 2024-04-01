<?php
//if(!file_exists($targetDirectory)){
  //  mkdir($targetDirectory, 0777, true);
//}
//if($_FILES['files']['name'][0]){
 //   $totalFiles = count($_FILES['files']['name']);
  //  for($i = 0; $i < $totalFiles; $i++){
  //      $fileName = $_FILES['files']['name'][$i];
    //    $targetFile = $targetDirectory . $fileName;
      //  if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)){
        //    echo "File $fileName berhasil diunggah.<br>";
        //}else{
          //  echo "Gagal menunggah file $fileName.<br>";
        //}
    //}
//}else{
  //  echo "Tidak ada file yang diunggah.";
//}

$targetDirectory = "uploads/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
  mkdir($targetDirectory, 0777, true);
}

// Mendapatkan total file yang diunggah
$totalFiles = count($_FILES['files']['name']);

// Cek apakah ada file yang diunggah
if ($totalFiles > 0) {

  // Loop melalui semua file yang diunggah
  for ($i = 0; $i < $totalFiles; $i++) {

    // Mendapatkan nama dan nama file sementara
    $fileName = $_FILES['files']['name'][$i];
    $tmpName = $_FILES['files']['tmp_name'][$i];

    // Validasi jenis file (hanya gambar)
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($fileType, $allowedExtensions)) {
      echo "File $fileName tidak valid (hanya gambar yang diizinkan).<br>";
      continue; // Lanjutkan ke file berikutnya
    }

    // Generate nama file unik
    $newFileName = uniqid() . "-" . $fileName;

    // Pindahkan file yang diunggah ke direktori penyimpanan
    if (move_uploaded_file($tmpName, $targetDirectory . $newFileName)) {
      echo "File $fileName berhasil diunggah dengan nama $newFileName.<br>";
    } else {
      echo "Gagal mengunggah file $fileName.<br>";
    }
  }
} else {
  echo "Tidak ada file yang diunggah.";
}
?>