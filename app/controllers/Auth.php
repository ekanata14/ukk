<?php

class Auth extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("auth/index");
        $this->view("templates/footer");
    }

    public function register(){
        $this->view("templates/header");
        $this->view("auth/register");
        $this->view("templates/footer");
    }

    public function login(){
        $user = $this->model("User_model")->getUserByUsername($_POST);
        if($this->model("User_model")->authByUsername($_POST) > 0){ 
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'status' => 'login',
            ];
           if($user['role'] == '0' || $user['role'] == '1'){
            Redirect::to("admin");
           } else{
            Redirect::to("home");
           }
        } else{
            Redirect::to("auth");
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        Redirect::to("auth");
    }
}