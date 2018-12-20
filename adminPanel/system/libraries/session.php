<?php 
error_reporting(0);
/**
 * Session library
 */
trait Session {

    public function start(){
        /*
           * Start session
        */ 
        session_start();
    }

    public function set_session($name, $value = ''){
        /*
            * Set session data
        */ 
        if(!empty($name)){
            if(is_array($name) && empty($value)){
                foreach($name as $key => $session_name):
                  $_SESSION[$key] = $session_name;
                endforeach;
            } else if(!is_array($name) && !empty($value)){
                $_SESSION[$name] = $value;
            }
        }

    }

    public function get_session($name){
        /*
            * Fetch session data
        */ 
        if(!empty($name)){
            return $_SESSION[$name];
        }

    }

    public function set_flash($name, $message){
        /*
             * Set the flash message
        */ 

        if(!empty($name) && !empty($message)){
            $_SESSION[$name] = $message;
        }
    }

    public function flash($name, $class = ""){
        if(!empty($name) && isset($_SESSION[$name])){
            echo "<div class='". $class ."'>" . $_SESSION[$name] . "</div>";
            unset($_SESSION[$name]);
        }
    }

    public function unset_session($name){

        /*
           * Unset session data
        */ 

        if(!empty($name)){

            if(is_array($name)){
                foreach($name as $key):
                   unset($_SESSION[$key]);
                endforeach;
            } else {
               unset($_SESSION[$name]);
            }
        }


    }

    public function destroy_session(){
       /*
           * Destroy whole session
       */ 
        session_destroy();
    }





}


 ?>