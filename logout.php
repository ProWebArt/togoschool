<?php
$auth = 0;
include dirname(__FILE__).'/lib/includes.php';
$_SESSION = array();
setFlash("AUREVOIR ET ON ESPERE VOUS REVOIR TRES BIENTOT...", "warning");
header('Location:' .ROOT. 'index.php');
die();