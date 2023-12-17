<?php
class Mahasiswa {
    public $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function read1($id) {
        $mahasiswa = mysqli_query($this->conn," SELECT * FROM mahasiswa WHERE id = '$id'");
        $data = mysqli_fetch_array($mahasiswa);
        
        return $data;
    }
    public function read() {
        $mahasiswa = mysqli_query($this->conn,"SELECT * FROM mahasiswa ORDER BY id ASC");
        return $mahasiswa;
    }
}
