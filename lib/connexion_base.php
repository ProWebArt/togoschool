<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=mescours', 'root', 'mot2passe', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}