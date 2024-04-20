<?php
// Fungsi untuk menetapkan pesan sementara (flash message) dalam sesi.
function set_flashdata($key = "", $value = "")
{
    // Memeriksa apakah kunci dan nilai tidak kosong.
    if (!empty($key) && !empty($value)) {
        // Menetapkan nilai ke dalam array 'flashdata' pada sesi dengan kunci yang ditentukan.
        $_SESSION['flashdata'][$key] = $value;
        // Mengembalikan nilai true jika berhasil.
        return true;
    }
    // Mengembalikan nilai false jika kunci atau nilai kosong.
    return false;
}

// Fungsi untuk mendapatkan pesan sementara (flash message) dari sesi.
function get_flashdata($key = "")
{
    // Memeriksa apakah kunci tidak kosong dan pesan sementara dengan kunci tersebut ada.
    if (!empty($key) && isset($_SESSION['flashdata'][$key])) {
        // Mengambil data pesan sementara.
        $data = $_SESSION['flashdata'][$key];
        // Menghapus pesan sementara dari sesi setelah diambil.
        unset($_SESSION['flashdata'][$key]);
        // Mengembalikan data pesan.
        return $data;
    } else {
        // Menampilkan alert JavaScript jika kunci pesan sementara tidak ditemukan.
        echo "<script>alert('Flash Message: {$key} is not defined.');</script>";
    }
}

// Fungsi untuk menetapkan pesan sementara berdasarkan jenis pesan.
function pesan($key = "", $pesan = "")
{
    // Menetapkan pesan sukses dengan alert bootstrap jika kunci adalah 'sukses'.
    if ($key == "sukses") {
        set_flashdata('sukses', "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
            <strong>Berhasil! </strong> {$pesan}
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>");
    // Menetapkan pesan gagal dengan alert bootstrap jika kunci adalah 'gagal'.
    } elseif ($key == "gagal") {
        set_flashdata('danger', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Gagal! </strong> {$pesan}
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>");
    // Menetapkan pesan peringatan dengan alert bootstrap jika kunci adalah 'peringatan'.
    } elseif ($key == "peringatan") {
        set_flashdata('warning', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Peringatan! </strong> {$pesan}
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>");
    }
}
?>