<?php 

$con = new PDO('mysql:host=localhost;dbname=b-scholarly', 'root', '');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(!$con){
    die('Erreur : '.$e->getMessage());
}
?>