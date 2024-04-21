<?php
// Mendefinisikan kelas Database untuk mengelola koneksi ke database MySQL.
class Database {
    // Properti privat untuk menyimpan host database.
    private $host = "localhost";
    // Properti privat untuk menyimpan nama pengguna database.
    private $username = "root";
    // Properti privat untuk menyimpan kata sandi database.
    private $password = "";
    // Properti privat untuk menyimpan nama database.
    private $database = "webprograming2023";
    // Properti publik untuk menyimpan objek koneksi database.
    public $conn;

    // Konstruktor kelas yang dipanggil saat objek Database dibuat.
    public function __construct()
    {
        // Menciptakan objek mysqli dan menyimpannya ke dalam properti $conn.
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah koneksi database gagal.
        if ($this->conn->connect_error) {
            // Jika ya, hentikan eksekusi dan tampilkan pesan kesalahan.
            die("connection failed: " . $this->conn->connect_error);
        }
    }
}
?>