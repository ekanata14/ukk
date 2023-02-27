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

    public function getAllKomka(){
        $this->db->query("SELECT * FROM $this->komka");
        return $this->db->resultAll();
    }
    
    public function getKelasById($id){
        $this->db->query("SELECT * FROM $this->kelas WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->result();
    }

    public function tambahKelas($data){
        $query = "INSERT INTO $this->kelas VALUES(NULL, :nama_kelas, :komka)";
        $this->db->query($query);
        $this->db->bind("nama_kelas", $data['nama_kelas']);
        $this->db->bind("komka", $data['komka']);
        return $this->db->rowCount();
    }

    public function editKelas($data){
        $query = "UPDATE $this->kelas SET name = :nama_kelas, kompetensi_keahlian = :komka WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("nama_kelas", $data['nama_kelas']);
        $this->db->bind("komka", $data['komka']);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function deleteKelas($data){
        $query = "DELETE FROM $this->kelas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
}