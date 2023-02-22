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
}