<?php 

class accountModel extends Database {


    public function signup($data){

        if($this->Insert("users", $data)){
            return true;
        } else {
            return false;
        }

    }

    public function login($email, $password){

        if($this->Select_Where("users", ['email' => $email])){

            if($this->Count()  > 0 ){
              
              $row = $this->Row();
              $dbPassword = $row->password;
              if(password_verify($password, $dbPassword)){

                return ['status' => 'success', 'data' => $row];

              } else {
                return "PasswordNotMatched";
              }

            } else {
                return "EmailNotFound";
            }
        }


    }

}


 ?>