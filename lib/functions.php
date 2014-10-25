<?php
function flash(){
    if(!empty($_SESSION["Flash"])){
        extract($_SESSION["Flash"]);
        unset($_SESSION["Flash"]);
        echo "<div class=\"alert alert-$type\"><h2 class=\"titre\">$message</h2></div>";
    }
}
function setFlash($message, $type = "success"){
    $_SESSION["Flash"]["message"] = $message;
    $_SESSION["Flash"]["type"] = $type;
}

function setInput($id, $type = "text"){
    $value = isset($_POST[$id]) ? $_POST[$id] : "";
    return "<input type=$type class=form-control id=$id name=$id required value=$value>";
}

function setImageCour($name){
    echo "<img src='/coursenligne/cours/img/$name' />";
}