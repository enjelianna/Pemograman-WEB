<?php
// Memasukkan file 'Database.php' yang berisi kelas Database untuk koneksi database.
require_once 'Database.php';

// Mendefinisikan kelas Crud untuk operasi CRUD pada tabel 'jabatan'.
class Crud
{
    // Properti untuk menyimpan instance dari kelas Database.
    private $db;

    // Konstruktor yang dipanggil saat membuat objek Crud.
    public function __construct()
    {
        // Membuat dan menyimpan objek Database ke properti $db.
        $this->db = new Database();
    }

    // Fungsi untuk menambahkan data baru ke tabel 'jabatan'.
    public function create($jabatan, $keterangan) {
        // Menyiapkan query SQL untuk memasukkan data.
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        // Menjalankan query dan menyimpan hasilnya.
        $result = $this->db->conn->query($query);
        // Mengembalikan hasil eksekusi query.
        return $result;
    }

    // Fungsi untuk mengambil semua data dari tabel 'jabatan'.
    public function read() {
        // Menyiapkan query SQL untuk membaca semua data.
        $query = "SELECT * FROM jabatan";
        // Menjalankan query dan menyimpan hasilnya.
        $result = $this->db->conn->query($query);

        // Array untuk menyimpan data yang diambil.
        $data = [];
        // Jika ada data yang dihasilkan, masukkan ke dalam array $data.
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        // Mengembalikan array data.
        return $data;
    }
    
    // Fungsi untuk memperbarui data berdasarkan ID.
    public function update($id, $jabatan, $keterangan) {
        // Menyiapkan query SQL dengan placeholder untuk parameter.
        $query = "UPDATE jabatan SET jabatan = ?, keterangan = ? WHERE id = ?";
        // Menyiapkan prepared statement.
        $stmt = $this->db->conn->prepare($query);
        // Mengikat parameter ke placeholder query.
        $stmt->bind_param("ssi", $jabatan, $keterangan, $id);
        // Menjalankan prepared statement.
        $stmt->execute();

        // Mengembalikan jumlah baris yang terpengaruh.
        return $stmt->affected_rows;
    }

    // Fungsi untuk menghapus data berdasarkan ID.
    public function delete($id) {
        // Menyiapkan query SQL dengan placeholder untuk ID.
        $query = "DELETE FROM jabatan WHERE id = ?";
        // Menyiapkan prepared statement.
        $stmt = $this->db->conn->prepare($query);
        // Mengikat ID ke placeholder query.
        $stmt->bind_param("i", $id);
        // Menjalankan prepared statement.
        $stmt->execute();

        // Mengembalikan jumlah baris yang terpengaruh.
        return $stmt->affected_rows;
    }

    // Fungsi untuk membaca data berdasarkan ID.
    public function readById($id) {
        // Menyiapkan query SQL dengan placeholder untuk ID.
        $query = "SELECT * FROM jabatan WHERE id = ?";
        // Menyiapkan prepared statement.
        $stmt = $this->db->conn->prepare($query);
        // Mengikat ID ke placeholder query.
        $stmt->bind_param("i", $id);
        // Menjalankan prepared statement.
        $stmt->execute();
        // Mendapatkan hasil dari prepared statement.
        $result = $stmt->get_result();
    
        // Jika ada satu baris data yang dihasilkan, kembalikan data tersebut.
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            // Jika tidak ada data, kembalikan null.
            return null;
        }
    }
}
?>