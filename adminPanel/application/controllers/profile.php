<?php 

class Profile extends Lightweight {
     
    public $model;
    public function __construct(){

        parent::__construct();
        if(!$this->get_session('userId')){
            redirect("accountController/login");
        }

        $this->model = $this->model("profileModel");


    }

    public function index(){

        $data['layout'] = "parts/changeName";
        $data['title'] = "Change Name";
        $this->view("dashboard", $data);
    }

    public function updateName(){

        $this->validation("fullName" ,"Full Name" , "required|not_int");
        if($this->run()){
           $fullName = $this->post('fullName');
           if($this->model->changeName($fullName)){
            $this->set_flash("nameChanged", "Your name has been changed successfully");
            $this->set_session('name', $fullName);
            redirect("welcomeController/index");

           }
        } else {
             $this->index();
        }
    }

    public function changePictureView(){
        $data['layout'] = "parts/changePicture";
        $data['title'] = "Change Picture";
        $this->view("dashboard", $data);
    }

    public function updatePicture(){

        $data = [

         'file_name'          => 'changePicture',
         'allowed_extensions' => 'jpg|png',
         'upload_path'        => 'assets/images/',
         'label'              => 'Picture'

        ];

        $this->file($data);
        if($this->file_run()){
            $PictureName = $this->file_data['file_name'];
            if($this->model->updateProfilePicture($PictureName)){
               
               $this->set_session("image", $PictureName);
               $this->set_flash("profilePicture", "Your profile picture has been updated successfully");
               redirect("welcomeController/index");

            } else {
                echo "Sorry";
            }
        } else {
           
           $this->changePictureView();

        }
    }

    public function changePasswordView(){
        $data['layout'] = "parts/changePassword";
        $data['title'] = "Change Password";
        $this->view("dashboard", $data);

    }
    
    public function changePassword(){

        $this->validation("password", "Password", "required");
        $this->validation("newPassword", "New Password", "required|min_len|5");
        $this->validation("confirmPassword", "Confirm Password", "required|confirm|newPassword");
        if($this->run()){
            
            $currentPassword = $this->post('password');
            $newPassword     = $this->hash($this->post('newPassword'));
            $result = $this->model->updatePassword($currentPassword, $newPassword);
            if($result === "currentPassworWrong"){
                $this->set_flash("currentPasswordWrong", "Sorry current password is wrong");
                $this->changePasswordView();
            } else if($result === "success"){
                $this->set_flash("passwordChanged", "Your password has been changed successfully");
                redirect("welcomeController/index");
            }

        } else {
            $this->changePasswordView();
        }

    }

}


 ?>