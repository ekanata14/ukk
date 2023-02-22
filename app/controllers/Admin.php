<?php

class Admin extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("admin/index");
        $this->view("templates/footer");
    }

    // Petugas Controller methods
    public function petugas(){
        $data = [
            'users' => $this->model("User_model")->getAllUsers(),
        ];
        $this->view("templates/header");
        $this->view("admin/petugas/petugas", $data);
        $this->view("templates/footer");
    }

    public function tambahPetugas(){
        $this->view("templates/header");
        $this->view("admin/petugas/index");
        $this->view("templates/footer");
        
    }

    public function editPetugas(){
        //
    } 

    // Siswa Controller methods
    public function siswa(){
        $this->view("templates/header");
        $this->view("admin/siswa/index");
        $this->view("templates/footer");
    }

    public function tambahSiswa(){
        //
    }

    public function editSiswa(){
        //
    }
}