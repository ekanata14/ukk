<?php

class User_model{
    private $pengguna = "pengguna";
    private $petugas = "petugas";
    private $siswa = "siswa";

    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getLastInsertedId(){
        return $this->db->getLastInsertedId();
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM $this->petugas");
        return $this->db->resultAll();
    }

    public function getAllPetugas(){
        $this->db->query("SELECT * FROM $this->petugas");
        return $this->db->resultAll();
    }

    public function getAllSiswa(){
        $this->db->query("SELECT * FROM $this->siswa");
        return $this->db->resultAll();
    }

    public function countAllSiswa(){
        $this->db->query("SELECT * FROM $this->siswa");
        return $this->db->rowCount();
    }

    public function countAllPetugas(){
        $this->db->query("SELECT * FROM $this->petugas");
        return $this->db->rowCount();
    }

    public function authByUsername($data){
        $this->db->query("SELECT * FROM $this->pengguna WHERE username = :username AND pass = :pass");
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['pass']);
        return $this->db->rowCount();
    }

    public function getUserByUsername($data){
        $this->db->query("SELECT * FROM $this->pengguna WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->result();
    }

    public function getPetugasById($id){
        $this->db->query("SELECT * FROM $this->petugas WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->result();
    }

    public function getSiswaById($id){
        $this->db->query("SELECT * FROM $this->siswa INNER JOIN $this->pengguna ON $this->siswa.pengguna_id = $this->pengguna.id WHERE $this->siswa.id_siswa = :id");
        $this->db->bind("id", $id);
        return $this->db->result();
    }

    public function getAllSiswaByKelasId($kelas_id){
        $this->db->query("SELECT * FROM $this->siswa WHERE kelas_id = :kelas_id");
        $this->db->bind("kelas_id", $kelas_id);
        return $this->db->resultAll();
    }

    public function tambahPengguna($data){
        $this->db->query("INSERT INTO $this->pengguna VALUES(NULL, :username, :pass, :role)");
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['pass']);
        $this->db->bind("role", $data['role']);
        return $this->db->rowCount();
    }

    public function editPengguna($data){
        $this->db->query("UPDATE pengguna SET username = :username, pass = :pass WHERE id = :pengguna_id");
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['pass']);
        $this->db->bind("pengguna_id", $data['pengguna_id']);
        return $this->db->rowCount(); 
    }

    public function deletePengguna($data){
        $this->db->query("DELETE FROM $this->pengguna WHERE id = :pengguna_id");
        $this->db->bind("pengguna_id", $data['pengguna_id']);
        return $this->db->rowCount();
    }

    public function tambahPetugas($data, $id_pengguna){
        $query = "INSERT INTO $this->petugas VALUES(NULL, :username, :pass, :pengguna_id)";
        $this->db->query($query);
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['pass']);
        $this->db->bind("pengguna_id", $id_pengguna);
        return $this->db->rowCount();
    }

    public function editPetugas($data){
        $query = "UPDATE $this->petugas SET nama = :nama, pass = :pass WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("nama", $data['username']);
        $this->db->bind("pass", $data['pass']);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function deletePetugas($data){
        $query = "DELETE FROM $this->pengguna WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function tambahSiswa($data, $id_pengguna){
        $query = "INSERT INTO $this->siswa VALUES(NULL, :nisn, :nis, :nama, :alamat, :telepon, :kelas, :id_pengguna, :pembayaran)";
        $this->db->query($query);
        $this->db->bind("nisn", $data['nisn']);
        $this->db->bind("nis", $data['username']);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("alamat", $data['alamat']);
        $this->db->bind("telepon", $data['telepon']);
        $this->db->bind("kelas", $data['kelas']);
        $this->db->bind("id_pengguna", $id_pengguna);
        $this->db->bind("pembayaran", $data['pembayaran']);
        return $this->db->rowCount();
    }

    public function editSiswa($data){
        $query = "UPDATE $this->siswa SET nisn = :nisn, nis = :nis, nama = :nama, alamat = :alamat, telepon = :telepon, kelas_id = :kelas, pembayaran_id = :pembayaran WHERE id_siswa = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        $this->db->bind("nisn", $data['nisn']);
        $this->db->bind("nis", $data['username']);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("alamat", $data['alamat']);
        $this->db->bind("telepon", $data['telepon']);
        $this->db->bind("kelas", $data['kelas']);
        $this->db->bind("pembayaran", $data['pembayaran']);
        return $this->db->rowCount();
    }

    public function deleteSiswa($data){
        $query = "DELETE FROM $this->siswa WHERE id_siswa = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
}