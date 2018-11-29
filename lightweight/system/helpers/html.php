<?php 
function anchor($href, $value, $options = []){
    if(array_key_exists("class", $options)){
        $class = $options['class'];
    } else {
        $class = null;
    }

    if(array_key_exists("id", $options)){
        $id = $options['id'];
    } else {
        $id = null;
    }
    $url = Base_URL . "/" . $href; 
    return '<a href="'. $url .'" class="'. $class .'" id="'. $id .'">'. $value .'</a>';

}

function anchor_void($href, $value, $options = []){
    if(array_key_exists("class", $options)){
        $class = $options['class'];
    } else {
        $class = null;
    }

    if(array_key_exists("id", $options)){
        $id = $options['id'];
    } else {
        $id = null;
    }
    $url = $href; 
    return '<a href="'. $url .'" class="'. $class .'" id="'. $id .'">'. $value .'</a>';

}

 ?>