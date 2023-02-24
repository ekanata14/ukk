<?php

class Kelas_model{
    private $kelas = 'kelas';
    private $komka = 'komka';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllKelas(){
        $this->db->query("SELECT * FROM $this->kelas");
        return $this->db->resultAll();
    }

    public function tambahSiswa($data){
        $query = "INSERT INTO $this->kelas VALUES(NULL, :name, :komka)";
        $this->db->query($query);
        $this->db->bind("name", $data['name']);
        $this->db->bind("komka", $data['komka']);
        return $this->db->rowCount();
    }

    public function editSiswa($data){
        $query = "UPDATE $this->kelas SET name = :name, kompetensi_keahlian = :komka WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("name", $data['name']);
        $this->db->bind("komka", $data['komka']);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function deleteSiswa($data){
        $query = "DELETE FROM $this->kelas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
}