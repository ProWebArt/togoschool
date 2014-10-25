<?php
session_start();
if(!isset($auth)){
    if(!isset($_SESSION['Admin']['id'])){
        header('Location:' .ROOT. 'login.php');
    }elseif(!isset($_SESSION['Auth']['id'])){
        header('Location:' .ROOT. 'login.php');
    }
}