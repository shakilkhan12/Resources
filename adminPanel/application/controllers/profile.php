<?php 

class Profile extends Lightweight {

    public function index(){

        $data['layout'] = "parts/changeName";
        $data['title'] = "Change Name";
        $this->view("dashboard", $data);
    }

    public function changePictureView(){
        $data['layout'] = "parts/changePicture";
        $data['title'] = "Change Picture";
        $this->view("dashboard", $data);
    }

    public function changePasswordView(){
        $data['layout'] = "parts/changePassword";
        $data['title'] = "Change Password";
        $this->view("dashboard", $data);

    }
}


 ?>