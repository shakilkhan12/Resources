<?php 

class ajaxModel extends Database {

    public function insertFruit($data){

        if($this->Insert("fruit", $data)){
            return true;
        } else {
            return false;
        }


    }

    public function getFruits(){
          $userId = $this->get_session("userId");
        if($this->Select_Where("fruit", ['userId' => $userId])){
            if($this->Count() > 0 ){
                return $this->AllRecords();
            } else {
                return false;
            }
        }

    }

    public function editFruit($id, $name, $price){

        if($this->Update("fruit", ['name' => $name, 'price' => $price], ['id' => $id])) {
             return true;
        } else {
            return false;
        }

    }

    public function removeFruit($id){

        if($this->Delete("fruit", ['id' => $id])){
            return true;
        } else {
            return false;
        }

    }

}

 ?>