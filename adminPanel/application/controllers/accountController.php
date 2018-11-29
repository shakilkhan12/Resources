<?php 

class AccountController extends Lightweight {

    public function index(){

        $data['layout'] = "parts/signup";
        $data['title'] = "Create new account";
        $this->view("index", $data);
    }

    public function login(){

        $data['layout'] = "parts/login";
        $data['title'] = "User login";
        $this->view("index", $data);
    }

    
}

 ?>