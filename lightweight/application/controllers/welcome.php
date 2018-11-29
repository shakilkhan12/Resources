<?php 

class Welcome extends Lightweight {

	// public function __construct(){
	// 	echo 'Welcome Controller';
	// }

	public function index(){
		$data =  "Let's build fast websites with lightweight";
        $this->view("app", $data);
	}
}



 ?>