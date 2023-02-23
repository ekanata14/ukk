<?php

class Admin extends Controller{
    protected $fixedData;
    public function setFixedData(){
        $this->fixedData = [
            'totalSiswa' => $this->model("User_model")->countAllSiswa(),
            'totalPetugas' => $this->model("User_model")->countAllPetugas(), 
        ];

        return $this->fixedData;
    }
    public function index(){
        $data = [

        ];
        $this->view("templates/header");
        $this->view("admin/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    

    // Petugas Controller methods
    public function petugas(){
        $data = [
            'petugas' => $this->model("User_model")->getAllPetugas(),
                  ];
        $this->view("templates/header");
        $this->view("admin/petugas/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahPetugas(){
        $data = [
            'title' => "Tambah Petugas",
        ];
        $this->view("templates/header");
        $this->view("admin/petugas/add", $data);
        $this->view("templates/footer");
    }

    public function tambahPetugasAct(){
        // var_dump($_POST);
        if($this->model("User_model")->tambahPetugas($_POST) > 0){
            Redirect::to("admin/petugas");
        } else{
            Redirect::to("admin/petugas");
        }
    }

    public function editPetugas($id){
        $data = [
            'petugas' => $this->model("User_model")->getPetugasById($id),
            'title' => "Edit Petugas",
        ];
        $this->view("templates/header");
        $this->view("admin/petugas/edit", $data);
        $this->view("templates/footer");
    } 

    public function editPetugasAct(){
        if($this->model("User_model")->editPetugas($_POST) > 0){ 
            Redirect::to("admin/petugas");
        } else{
            Redirect::to("admin/petugas");
        }
    }

    public function deletePetugas(){
        if($this->model("User_model")->deletePetugas($_POST) > 0){ 
            Redirect::to("admin/petugas");
        } else{
            Redirect::to("admin/petugas");
        }
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