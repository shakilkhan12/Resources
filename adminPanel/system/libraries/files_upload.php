<?php 
/**
 * Files upload library
 */
trait Files_upload{
    

    public $file_errors = [];
    public $data;
    public $file_data;
    public function file($data){
       
       $this->data = $data;
       $this->file_data = [
         
         'file_name'    => $_FILES[$this->data['file_name']]['name'],
         'file_tmp'     => $_FILES[$this->data['file_name']]['tmp_name'],
         'extensions'   => $this->data['allowed_extensions'],
         'upload_path'  => $this->data['upload_path'],
         'label'        => $this->data['label'],
         'field_name'   => $this->data['file_name'],
         'file_ext'     => pathinfo($_FILES[$this->data['file_name']]['name'], PATHINFO_EXTENSION)
 
       ];

       /*
           * Check if the file input field is empty or not
       */ 

       if(empty($this->file_data['file_name'])){
       
        return $this->file_errors[$this->file_data['field_name']] = $this->file_data['label'] . " is required";

       }

       /*
          * Check the image/file extension
       */ 

       $file_extension = strtolower($this->file_data['file_ext']);
       $extensions     = explode("|", $this->file_data['extensions']);
       if(!in_array($file_extension, $extensions)){
           return $this->file_errors[$this->file_data['field_name']] = $file_extension . " is not a valid extension";
       }

       /*
           * Check the upload path
       */ 

       if(!file_exists($this->file_data['upload_path'])){
            $directory = rtrim($this->file_data['upload_path'], "/");
            return $this->file_errors[$this->file_data['field_name']] = $directory . " is not a valid directory";
       }



        
    }

    public function file_run(){

      if(empty($this->file_errors)){
        /*
             * Get the file name without extension
        */ 
        $file_name = pathinfo($this->file_data['file_name'], PATHINFO_FILENAME);
        /*
             * Replace empty spaces on undersocre
        */ 
        $file_name = preg_replace("/\s+/", "_", $file_name);
        /*
             * concatinate file name with time
        */ 
        $file_name = time().$file_name;
        $file_name = $file_name.".".$this->file_data['file_ext'];
        move_uploaded_file($this->file_data['file_tmp'], $this->file_data['upload_path'].$file_name);
        $this->file_data['file_name'] = $file_name;
        return true;
      } else {
        $this->data = null;
        return false;
      }

    }


}


 ?>