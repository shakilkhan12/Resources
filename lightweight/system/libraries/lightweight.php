<?php 

 class Lightweight {

      use form_validation, files_upload, session;   
      public function __construct(){
        $this->start();
       if(file_exists("../application/config/autoload.php")){
        require_once "../application/config/autoload.php";
        $helpers = $autoload['helpers'];
        $this->helper($helpers);


       }

      }


      /*
          * Load View in the controller
      */ 
      public function view($view_name, $data = []){

      	if(file_exists("../application/views/" . $view_name . ".php")){

      		require_once "../application/views/" . $view_name . ".php";

      	} else {
            die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry View <strong>" . $view_name ."</strong> is not found</div>");
      	}


      }
      

      /*
          * Load model in the controller
      */ 
      public function model( $model_name ){
          
          if(file_exists("../application/models/" . $model_name . ".php")){

          	require_once "../application/models/" . $model_name . ".php";
          	$update_model_name = ucwords($model_name);

          	return new $update_model_name;

          } else {

          	die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Model <strong>" . $model_name ."</strong> is not found</div>");

          }

      }
    
      /*
         * Helpe method check the helpe availability
      */ 
      public function helper( $helper_names ){

        if(!empty($helper_names)){
          foreach($helper_names as $helper_name):

            if(file_exists("../system/helpers/" . $helper_name . ".php")) {
          require_once "../system/helpers/" . $helper_name . ".php";

        } else {
           die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Helper is not found</div>");
        }

          endforeach;
        }

        

      }

      /*
        * Post function
      */ 

      public function post($field_name){

        if($_SERVER['REQUEST_METHOD'] == "post" || $_SERVER['REQUEST_METHOD'] == "POST"){
              
          return strip_tags(trim($_POST[$field_name]));

        } else {
          die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Method is not POST</div>");
        }



      }
     /*
         * GET function
     */ 
      public function get($field_name){

        if($_SERVER['REQUEST_METHOD'] == "get" || $_SERVER['REQUEST_METHOD'] == "GET"){
              
          return strip_tags(trim($_GET[$field_name]));

        } else {
          die("<div style='background-color:#f1f4f4;color:#afaaaa;border: 1px dotted #afaaaa;padding: 10px; border-radius: 4px'>Sorry Method is not GET</div>");
        }



      }

      /*
          * URI Function
      */ 

      public function uri($segment){

        if(isset($_GET['url'])){
       
       $url = $_GET['url'];
       /*
         * rtrim() method remove extra spaces from the right side
       */ 
       $url = rtrim($url);
       /*
          * FILTER_SANITIZE_URL remove all illegal characters from the url
       */ 
       $url = filter_var($url, FILTER_SANITIZE_URL);
       /*
          explode method split string on specific point
       */ 
       $url = explode("/", $url);
       return $url[$segment];

    }
      }

    






 }


 ?>