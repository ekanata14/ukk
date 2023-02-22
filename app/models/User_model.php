<?php

class User_model{
    private $table = "petugas";
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultAll();
    }
}