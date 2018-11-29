<?php 

class AjaxController extends Lightweight {

    public function index(){
        $data['layout'] = "parts/fruit";
        $data['title'] = "Add Fruit";
        $this->view("ajaxView", $data);
    }
}


 ?>