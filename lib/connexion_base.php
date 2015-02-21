<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=togoschodischool', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
