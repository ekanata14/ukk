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
            'section' => "dashboard",
        ];
        $this->view("templates/header");
        $this->view("admin/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    } 

    // Petugas Controller methods
    public function petugas(){
        $data = [
            'petugas' => $this->model("User_model")->getAllPetugas(),
            'section' => 'petugas',
        ];
        $this->view("templates/header");
        $this->view("admin/petugas/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahPetugas(){
        $data = [
            'title' => "Tambah Petugas",
            'section' => 'petugas',
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
            'section' => 'petugas',
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
        $data = [
            'petugas' => $this->model("User_model")->getAllSiswa(),
            'section' => 'siswa',
        ];
        
        $this->view("templates/header");
        $this->view("admin/siswa/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahSiswa(){
        $data = [
            'title' => "Tambah Siswa",
            'section' => 'siswa',
        ];
        $this->view("templates/header");
        $this->view("admin/siswa/add", $data);
        $this->view("templates/footer");
    }

    public function tambahSiswaAct(){
        // var_dump($_POST);
        if($this->model("User_model")->tambahPetugas($_POST) > 0){
            Redirect::to("admin/petugas");
        } else{
            Redirect::to("admin/petugas");
        }
    }

    public function editSiswa($id){
        $data = [
            'petugas' => $this->model("User_model")->getSiswaById($id),
            'title' => "Edit Siswa",
            'section' => 'siswa',
        ];
        $this->view("templates/header");
        $this->view("admin/siswa/edit", $data);
        $this->view("templates/footer");
    } 

    public function editSiswaAct(){
        if($this->model("User_model")->editSiswa($_POST) > 0){ 
            Redirect::to("admin/siswa");
        } else{
            Redirect::to("admin/siswa");
        }
    }

    public function deleteSiswa(){
        if($this->model("User_model")->deleteSiswa($_POST) > 0){ 
            Redirect::to("admin/petugas");
        } else{
            Redirect::to("admin/petugas");
        }
    }

    // Kelas Controller methods
    public function kelas(){
        $data = [
            'kelas' => $this->model("Kelas_model")->getAllKelas(),
            'section' => 'kelas',
        ];
        
        $this->view("templates/header");
        $this->view("admin/kelas/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahKelas(){
        $data = [
            'title' => "Tambah Kelas",
            'section' => 'kelas',
        ];
        $this->view("templates/header");
        $this->view("admin/kelas/add", $data);
        $this->view("templates/footer");
    }

    public function tambahKelasAct(){
        // var_dump($_POST);
        if($this->model("Kelas_model")->tambahKelas($_POST) > 0){
            Redirect::to("admin/kelas");
        } else{
            Redirect::to("admin/kelas");
        }
    }

    public function editKelas($id){
        $data = [
            'petugas' => $this->model("Kelas_model")->getKelasById($id),
            'title' => "Edit Kelas",
            'section' => 'kelas',
        ];
        $this->view("templates/header");
        $this->view("admin/kelas/edit", $data);
        $this->view("templates/footer");
    } 

    public function editKelasAct(){
        if($this->model("Kelas_model")->editkelas($_POST) > 0){ 
            Redirect::to("admin/kelas");
        } else{
            Redirect::to("admin/kelas");
        }
    }

    public function deleteKelas(){
        if($this->model("Kelas_model")->deletekelas($_POST) > 0){ 
            Redirect::to("admin/kelas");
        } else{
            Redirect::to("admin/kelas");
        }
    }
}