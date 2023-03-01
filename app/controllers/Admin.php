<?php

class Admin extends Controller{
    protected $fixedData;
    public function setFixedData(){
        $this->fixedData = [
            'totalSiswa' => $this->model("User_model")->countAllSiswa(),
            'totalPetugas' => $this->model("User_model")->countAllPetugas(), 
            'totalKelas' => $this->model("Kelas_model")->countAllKelas()
        ];

        return $this->fixedData;
    }
    public function index(){
        Middleware::auth();
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
        if($this->model("User_model")->tambahPengguna($_POST) > 0){
            $id_pengguna = $this->model("User_model")->getLastInsertedId();
            if($this->model("User_model")->tambahPetugas($_POST, $id_pengguna) > 0){
                Redirect::to("admin/petugas");
            } else{
                Redirect::to("admin/petugas");
            }
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
            if($this->model("User_model")->editPengguna($_POST) > -1){
                Redirect::to("admin/petugas");
            } else{
                Redirect::to("admin/petugas");
            }
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
            'siswa' => $this->model("User_model")->getAllSiswa(),
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
            'kelas' => $this->model("Kelas_model")->getAllKelas(),
            'pembayaran' => $this->model("Pembayaran_model")->getAllPembayaran()
        ];
        $this->view("templates/header");
        $this->view("admin/siswa/add", $data);
        $this->view("templates/footer");
    }

    public function tambahSiswaAct(){
        if($this->model("User_model")->tambahPengguna($_POST) > 0){
            $id_pengguna = $this->model("User_model")->getLastInsertedId();
            if($this->model("User_model")->tambahSiswa($_POST, $id_pengguna) > 0){
                Redirect::to("admin/siswa");
            } else{
                Redirect::to("admin/siswa");
            }
        } else{
            Redirect::to("admin/siswa");
        }
    }
    
    public function editSiswa($id){
        $data = [
            'siswa' => $this->model("User_model")->getSiswaById($id),
            'title' => "Edit Siswa",
            'section' => 'siswa',
            'kelas' => $this->model("Kelas_model")->getAllKelas(),
            'pembayaran' => $this->model("Pembayaran_model")->getAllPembayaran()
        ];
        $this->view("templates/header");
        $this->view("admin/siswa/edit", $data);
        $this->view("templates/footer");
    } 
    
    public function editSiswaAct(){
        if($this->model("User_model")->editSiswa($_POST) > 0){ 
            if($this->model("User_model")->editPengguna($_POST) > 0 || $this->model("User_model")->editPengguna($_POST) > -1){
                Redirect::to("admin/siswa");
                // echo "Seko";
            } else{
                Redirect::to("admin/siswa");
                // echo "gagal";
            }
        } else{
            Redirect::to("admin/siswa");
            // echo "Gagal";
        }
    } 

    public function deleteSiswaAct(){
        if($this->model("User_model")->deletePengguna($_POST) > 0){
            if($this->model("User_model")->deleteSiswa($_POST) > 0){ 
                Redirect::to("admin/siswa");
            } else{
                Redirect::to("admin/siswa");
            }
        } else{
            echo "Gagal";
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
            'komka' => $this->model("Kelas_model")->getAllKomka(),
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
            'kelas' => $this->model("Kelas_model")->getKelasById($id),
            'komka' => $this->model("Kelas_model")->getAllKomka(),
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
        if($this->model("Kelas_model")->deleteKelas($_POST) > 0){ 
            Redirect::to("admin/kelas");
        } else{
            Redirect::to("admin/kelas");
        }
    }

    public function pembayaran(){
        $data = [
            'title' => "Pembayaran",
            'section' => 'pembayaran',
            'pembayaran' => $this->model("Pembayaran_model")->getAllPembayaran(),
        ];

        $this->view("templates/header", $data);
        $this->view("admin/pembayaran/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahPembayaran(){
        $data = [
            'title' => "Pembayaran",
            'section' => 'pembayaran',
        ];

        $this->view("templates/header", $data);
        $this->view("admin/pembayaran/add", $data);
        $this->view("templates/footer");
    }

    public function editPembayaran($id){
        $data = [
            'title' => "Edit Pembayaran",
            'section' => 'pembayaran',
            'pembayaran' => $this->model("Pembayaran_model")->getDataPembayaranById($id),
        ];

        $this->view("templates/header", $data);
        $this->view("admin/pembayaran/edit", $data);
        $this->view("templates/footer");
    }

    public function tambahPembayaranAct(){
        if($this->model("Pembayaran_model")->tambahPembayaran($_POST) > 0){
            Redirect::to("admin/pembayaran");
        } else{
            Redirect::to("admin/pembayaran");            
        }
    }

    public function editPembayaranAct(){
        if($this->model("Pembayaran_model")->editPembayaran($_POST) > 0){
            Redirect::to("admin/pembayaran");
        } else{
            Redirect::to("admin/pembayaran");
        }
    }

    public function deletePembayaranAct(){
        if($this->model("Pembayaran_model")->deletePembayaran($_POST) > 0){
            Redirect::to("admin/pembayaran");
        } else{
            Redirect::to("admin/pembayaran");
        }
    }
}