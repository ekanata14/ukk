<?php

class User_model{
    private $table = "pengguna";
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultAll();
    }
}