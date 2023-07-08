<?php

    
    /*********ETUDIANT*********/
    
    require_once('../model/admin_db.php');
    if(isset($_POST['butEtudiant'])){
        //extraction des informations
        extract($_POST);
        //$req->execute();
        $req->execute(array($_POST['etu_nom'], $_POST['etu_prenom'],$_POST['etu_date'], $_POST['etu_phone'], $_POST['etu_email'],hash('sha256', $_POST['etu_password']), $_POST['etu_adresse' ],$_POST['etu_dossier'], $_POST['sexy' ]));
        // Redirection du visiteur vers la page du minichat
        header('Location:../admin'); 
  
    }

    