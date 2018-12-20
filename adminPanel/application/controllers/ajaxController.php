<?php 

class AjaxController extends Lightweight {
     
    public $model;
    public function __construct(){

        parent::__construct();
        if(!$this->get_session('userId')){
            redirect("accountController/login");
        }

        $this->model = $this->model('ajaxModel');
    }

    public function index(){
        $data['layout'] = "parts/fruit";
        $data['title'] = "Add Fruit";
        $this->view("ajaxView", $data);
    }

    public function addFruit(){
      
      $fruitName  = ucwords($this->post('fruitName'));
      $fruitPrice = $this->post('fruitPrice');
      $data = [
         
         'name'   => $fruitName,
         'price'  => $fruitPrice,
         'userId' => $this->get_session('userId')

      ];

      if($this->model->insertFruit($data)){
       
       echo json_encode(['status' => 'success']);

      }

    }

    public function fetchFruits(){

      $result = $this->model->getFruits();
      if($result) {
        
        echo json_encode(['status' => 'success', 'data' => $result]);

      } else {
        echo json_encode(['status' => 'noRecords']);
      }

    }

    public function updateFruit(){

      $id    = $this->post('updateId');
      $name  = ucwords($this->post('updateName'));
      $price = $this->post("udpatePrice");

      if($this->model->editFruit($id, $name, $price)){
        echo json_encode(['status' => 'success']);
      }


    }


    public function deleteFruit(){
      
      $id = $this->post("id");
      if($this->model->removeFruit($id)){
       
       echo json_encode(['status' => 'success']);

      }

    }

    

}


 ?>