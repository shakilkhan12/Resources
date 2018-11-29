<?php 
function redirect($path) {

    header("location:" . Base_URL . "/" . $path);
}


 ?>