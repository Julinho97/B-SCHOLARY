<?php
/*********ETUDIANT*********/
    
    if(isset($_POST['butEtudiant'])){
        //extraction des informations envoyé dans des variables par la methode POST
        extract($_POST);
        
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête pr(éparée
        $req = $con->prepare('INSERT INTO etudiant (etu_nom, etu_prenom, etu_date, etu_phone, etu_email, etu_password, etu_adresse, etu_dossier, sexy)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $req->execute(array($_POST['etu_nom'], $_POST['etu_prenom'],$_POST['etu_date'], $_POST['etu_phone'], $_POST['etu_email'],hash('sha256', $_POST['etu_password']), $_POST['etu_adresse' ],$_POST['etu_dossier'], $_POST['sexy' ]));
        // Redirection du visiteur vers la page du minichat
        header('Location:../admin');
    }
    
    /*********SEARCH*********/

  
/*********CLASSESD*********/
    
    if(isset($_POST['butClass'])){
        //extraction des informations envoyé dans des variables par la methode POST
       extract($_POST);
    
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO classes (nom, level, capacity)
        VALUES(?, ?, ?  )');
        $req->execute(array($_POST['nom'],$_POST['level'], $_POST['capacity']));
        // Redirection du visiteur vers la page du minichat
        header('Location:../admin');
    }
  
  
  
/*********PROFESSEUR*********/
    
    if(isset($_POST['butProf'])){
        //extraction des informations envoyé dans des variables par la methode POST
       extract($_POST);
    
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO proffeseur (nom, prenom, dateProf ,phone, email, adresse, dossier)
        VALUES(?, ?, ?, ?, ?, ?, ? )');
        $req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['dateProf'], $_POST['phone'], $_POST['email'], $_POST['adresse' ],$_POST['dossier']));
        // Redirection du visiteur vers la page du minichat
        header('Location:../admin');
    }
  
  
/*********image*******/
    
    if(isset($_POST['butImg'])){
        //extraction des informations envoyé dans des variables par la methode POST
        extract($_POST);
 
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO images (nom , taille, type, bin)
        VALUES(?, ?, ?, ? )');
        $req->execute(array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES["image"]["type"], file_get_contents( $_FILES["image"]["tmp_name"])));
        // Redirection du visiteur vers la page du minichat
        header('Location:../admin');
    }

    /************M A T I E R E*************/

    if(isset($_POST['but_matere'])){
        //extraction des informations envoyé dans des variables par la methode POST
        
        extract($_POST);
        
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO matiere(nom_mat, coef_mat, code_mat, dosProf )
        VALUES(?, ?, ?, ?)');
        $req->execute(array($_POST['nom_mat'], $_POST['coef_mat'],$_POST['code_mat'], $_POST['idProf'] ));
        // Redirection du visiteur vers la page du 
        header('Location:../admin');
      
    }
    
    /************M A T I E R E*************/

    if(isset($_POST['but_matiere'])){
        //extraction des informations envoyé dans des variables par la methode POST
        
        extract($_POST);
        
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO subjects(nom, coef, idProf )
        VALUES(?, ?,  ?)');
        $req->execute(array($_POST['nom'], $_POST['coef'], $_POST['idProf'] ));
        // Redirection du visiteur vers la page du 
        header('Location:../admin');
      
    }
    
    /************E M P L I O  D U  T E M S*************/

    if(isset($_POST['but_emploi'])){
        //extraction des informations envoyé dans des variables par la methode POST
        
        extract($_POST);
        
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO subjects( id_course, id_class, id_prof )
        VALUES(?, ?,  ?)');
        $req->execute(array($_POST['id_course'], $_POST['id_class'], $_POST['id_prof'] ));
        // Redirection du visiteur vers la page du 
        header('Location:../admin');
      
    }
      /************E V A L E*************/

    if(isset($_POST['butEval'])){ 
        //extraction des informations envoyé dans des variables par la methode POST
       
        extract($_POST);
        require('../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO evaliation (note_eval, id_mat, id_etudiant )
        VALUES(?, ?, ?)');
        $req->execute(array($_POST['note_eval'], $_POST['id_mat'], $_POST['id_etudiant'] ));
        // Redirection du visiteur vers la page du 
        header('Location:../admin');
       
    }
    
    ?>
    
    
    <!------FIN-------- P  H   P---------------------->