<?php 

class WelcomeController extends Lightweight {

    
    public function __construct(){

        parent::__construct();
        if(!$this->get_session('userId')){
            redirect("accountController/login");
        }

    }
    public function index(){

        $data['layout'] = "parts/welcomeView";
        $data['title']  = "Welcome";
        $this->view("welcome", $data);
    }
}


 ?>