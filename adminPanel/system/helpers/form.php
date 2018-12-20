<?php 
function form_input($fields){

    if(array_key_exists("name", $fields)){
        $name = $fields['name'];
    } else {
        $name = null;
    }

    if(array_key_exists("id", $fields)){
        $id = $fields['id'];
    } else {
        $id = null;
    }

    if(array_key_exists("class", $fields)){
        $class = $fields['class'];
    } else {
        $class = null;
    }

    if(array_key_exists("placeholder", $fields)){
        $placeholder = $fields['placeholder'];
    } else {
        $placeholder = null;
    }

    if(array_key_exists("value", $fields)){
        $value = $fields['value'];
    } else {
        $value = null;
    }

    if(array_key_exists("type", $fields)){
         
         if($fields['type'] == "text"){
            $type = "text";
         } else if($fields['type'] == "email"){
            $type = "email";
         } else if($fields['type'] == "password"){
            $type = "password";
         } else if($fields['type'] == "file"){
            $type = "file";
         }


    } else {
        $value = null;
    }
     if($type == "file"){
        return '<input type="'. $type .'" name="'. $name .'" id="'. $id .'" class="'. $class .'">';

     } else {
        return '<input type="'. $type .'" name="'. $name .'" id="'. $id .'" class="'. $class .'" placeholder="'.$placeholder.'" value="'. $value .'">';
     }
    


}

/*
    * Submit button
*/ 

function form_submit($fields){

    if(array_key_exists("name", $fields)){
        $name = $fields['name'];
    } else {
        $name = null;
    }

    if(array_key_exists("class", $fields)){
        $class = $fields['class'];
    } else {
        $class = null;
    }

    if(array_key_exists("id", $fields)){
        $id = $fields['id'];
    } else {
        $id = null;
    }

    if(array_key_exists("value", $fields)){
        $value = $fields['value'];
    } else {
        $value = null;
    }

    return '<input type="submit" class="'.$class.'" id="'.$id.'" value="'.$value.'">';




}

/*
     * Button Helper
*/ 

function form_button($fields){
    if(array_key_exists("name", $fields)){
        $name = $fields['name'];
    } else {
        $name = null;
    }

    if(array_key_exists("class", $fields)){
        $class = $fields['class'];
    } else {
        $class = null;
    }

    if(array_key_exists("id", $fields)){
        $id = $fields['id'];
    } else {
        $id = null;
    }

    if(array_key_exists("value", $fields)){
        $value = $fields['value'];
    } else {
        $value = null;
    }

    return '<input type="button" class="'.$class.'" id="'.$id.'" name="'.$name.'" value="'.$value.'">';
}

/*
    * Form opening helper
*/ 

function form_open($action = "", $method = "", $options = []){

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
    $url = Base_URL . "/" . $action;
    return '<form action="'. $url .'" method="'. $method .'" class="'. $class .'" id="'. $id .'">';


}

function form_multipart($action, $method, $options = []){

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
    $url = Base_URL . "/" . $action;
    return '<form action="'. $url .'" method="'. $method .'" class="'. $class .'" id="'. $id .'" enctype="multipart/form-data">';


}

function form_close(){
    return '</form>';
}




 ?>