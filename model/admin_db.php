<?php
require('connexion.php');
 

// Ajouter
$req = $con->prepare('INSERT INTO etudiant (etu_nom, etu_prenom, etu_date, etu_phone, etu_email, etu_password, etu_adresse, etu_dossier, sexy)
VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)');



// Afficher
$req = $con->query('SELECT * FROM etudiant');
$req->execute(); 
//Rangement dans un tableau des données importées de la DB.
$donnees = $req->fetchAll(PDO::FETCH_ASSOC  );
$row= $req->rowcount();
?>