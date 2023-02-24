<?php

class User_model{
    private $pengguna = "pengguna";
    private $petugas = "petugas";
    private $siswa = "siswa";

    private $db;
    public function __construct(){
        $this->db = new Database();
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

    public function tambahPetugas($data){
        $query = "INSERT INTO $this->pengguna VALUES(NULL, :username, :password, '1')";
        $this->db->query($query);
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        return $this->db->rowCount();
    }

    public function editPetugas($data){
        $query = "UPDATE $this->pengguna SET username = :username, pass = :pass, role = '1' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['password']);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function deletePetugas($data){
        $query = "DELETE FROM $this->pengguna WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function tambahSiswa($data){
        $query = "INSERT INTO $this->pengguna VALUES(NULL, :username, :password, '2')";
        $this->db->query($query);
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        return $this->db->rowCount();
    }

    public function editSiswa($data){
        $query = "UPDATE $this->pengguna SET username = :username, pass = :pass, role = '2' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['password']);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function deleteSiswa($data){
        $query = "DELETE FROM $this->pengguna WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
}