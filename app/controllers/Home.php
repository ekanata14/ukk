<?php

class Home extends Controller{
    public function index(){
        Middleware::auth();
        $data = [
            'users' => $this->model("User_model")->getAllUsers(),
        ];
        $this->view("templates/header");
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}