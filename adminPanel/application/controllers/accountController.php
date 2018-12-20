<?php 

class AccountController extends Lightweight {
     
    public $model;
    public function __construct(){

        parent::__construct();
        $this->model = $this->model("accountModel");
        if($this->get_session("userId")){
            redirect("ajaxController/index");
        }
    }

    public function index(){

        $data['layout'] = "parts/signup";
        $data['title'] = "Create new account";
        $this->view("index", $data);
    }

    public function signupSubmit(){
        $this->validation("fullName", "Full Name", "required|not_int");
        $this->validation("email", "Email", "required|unique|users");
        $this->validation("password", "Password", "required|min_len|5");
        $this->validation("confirmPassword", "Confirm Password", "required|confirm|password");
        if($this->run()){
        
        $fullName = $this->post('fullName');
        $email    = $this->post('email');
        $password = $this->hash($this->post('password'));

        $data = [
        'fullName' => $fullName,
        'email'    => $email,
        'password' => $password,
        'image'    => 'profile.PNG'

        ];

        if($this->model->signup($data)){
             
             $this->set_flash("signupSuccess", "Your account is succesfully created");
             $this->login();

        } else {
            echo 'sorry';
        }
         

        } else {
            $data['layout'] = "parts/signup";
            $data['title'] = "Create new account";
            $this->view("index", $data);
        }
    }

    public function login(){

        $data['layout'] = "parts/login";
        $data['title'] = "User login";
        $this->view("index", $data);
    }

    public function loginSubmit(){

        $this->validation('email', 'Email', "required");
        $this->validation('password', 'Password', 'required');
        if($this->run()){
            
         $email    = $this->post('email');
         $password = $this->post('password');
         $result = $this->model->login($email, $password);
         if($result === "EmailNotFound"){
            $this->set_flash("emailError", "Email is incorrect");
            $this->login();
         } else if($result === "PasswordNotMatched"){
            $this->set_flash("passwordError", "Password is incorrect");
            $this->login();
         } else if($result['status'] === "success"){
            

            $sessionData = [

              'userId' => $result['data']->id,
              'loader' => true,
              'name'   => $result['data']->fullName,
              'image'  => $result['data']->image
 
            ];

            $this->set_session($sessionData);
            redirect("ajaxController/index");


         }

        } else {
            $this->login();
        }

    }

    public function logout(){


        $this->destroy_session();
        $this->login();

    }


    
}

 ?>