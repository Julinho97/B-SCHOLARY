<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="js/etu_animation2.js"></script>
    <script type="text/javascript" src="js/menu_animations2.js"></script>
    <script type="text/javascript" src="../../../public/js/menu_animation.js"></script>
     <link rel="stylesheet" href="css/menu.css">
    <link rel="icon" href="img/password.png">
    <title>UCAB IG L2</title>
</head>
<body onload="update_hours();">

<?php
    
  /**** BOUTON SEARCH**** */
    
/*********ETUDIANT*********/
    
    if(isset($_POST['butEtudiant'])){
        //extraction des informations envoyé dans des variables par la methode POST
       
    if(isset($_REQUEST['etu_nom'], $_REQUEST['etu_prenom'], 
        $_REQUEST['etu_date'], $_REQUEST['etu_phone'], $_REQUEST['etu_email'],
        $_REQUEST['etu_adresse'],$_REQUEST['etu_dossier'],
        $_REQUEST['sexy']/*,$_REQUEST['image'] */ ))
     {
    
    require_once('../../../model/connexion.php');
    $req = $con->prepare('INSERT INTO etudiant_igl2 (etu_nom, etu_prenom, etu_date, etu_phone, etu_email, etu_adresse, etu_dossier, sexy)
    VALUES(?, ?, ?, ?, ?, ?, ?, ? )');
    $req->execute(array($_POST['etu_nom'], $_POST['etu_prenom'],$_POST['etu_date'], $_POST['etu_phone'], $_POST['etu_email'], $_POST['etu_adresse' ],$_POST['etu_dossier'], $_POST['sexy' ]));
    header('Location:menu.php');
    }
    }
   

    
    /*********SEARCH*********/

    
    
  
/*********PROFESSEUR*********/
    
    if(isset($_POST['butProf'])){
        //extraction des informations envoyé dans des variables par la methode POST
       
     
        if(isset($_REQUEST['nom'], $_REQUEST['prenom'], 
        $_REQUEST['dateProf'], $_REQUEST['phone'], $_REQUEST['email'],
        $_REQUEST['adresse'],$_REQUEST['dossier']))
     {
    
        require_once('../../../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO proffeseur_igl2 (nom, prenom, dateProf ,phone, email, adresse, dossier)
        VALUES(?, ?, ?, ?, ?, ?, ? )');
        $req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['dateProf'], $_POST['phone'], $_POST['email'], $_POST['adresse' ],$_POST['dossier']));
        // Redirection du visiteur vers la page du minichat
        header('Location:menu.php');
    }
    }
       
  
/*********PROFESSEUR*********/
    
    if(isset($_POST['butProf'])){
        //extraction des informations envoyé dans des variables par la methode POST
       
     
        if(isset($_REQUEST['nom'], $_REQUEST['prenom'], 
        $_REQUEST['dateProf'], $_REQUEST['phone'], $_REQUEST['email'],
        $_REQUEST['adresse'],$_REQUEST['dossier']))
     {
    
        require_once('../../../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO proffeseur_igl2 (nom, prenom, dateProf ,phone, email, adresse, dossier)
        VALUES(?, ?, ?, ?, ?, ?, ? )');
        $req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['dateProf'], $_POST['phone'], $_POST['email'], $_POST['adresse' ],$_POST['dossier']));
        // Redirection du visiteur vers la page du minichat
        header('Location:menu.php');
    }
    }
       
  
/*********image*********/
    
    if(isset($_POST['butImg'])){
        //extraction des informations envoyé dans des variables par la methode POST
       
     
    
    
        require_once('../../../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO img (nom )
        VALUES(? )');
        $req->execute(array($_FILES["image"]["name"] ));
        // Redirection du visiteur vers la page du minichat
        header('Location:menu.php');
    }
    
   
  
/*********image*
    
    if(isset($_POST['butImg'])){
        //extraction des informations envoyé dans des variables par la methode POST
       
     
    
    
        require_once('../../../model/connexion.php');
        // Insertion du message à l'aide d'une requête préparée
        $req = $con->prepare('INSERT INTO images (nom , taille, type, bin)
        VALUES(?, ?, ?, ? )');
        $req->execute(array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES["image"]["type"], file_get_contents( $_FILES["image"]["tmp_name"])));
        // Redirection du visiteur vers la page du minichat
        header('Location:menu.php');
    }
    
   
********/
    
    /************M A T I E R E*************/

    if(isset($_POST['butiere'])){
        //extraction des informations envoyé dans des variables par la methode POST
       
    if(isset($_REQUEST['nom'], $_REQUEST['coef'], 
        $_REQUEST['code']))
     {
    
    require_once('../../../model/connexion.php');
    // Insertion du message à l'aide d'une requête préparée
    $req = $con->prepare('INSERT INTO subjects (nom, coef, code, idProf )
    VALUES(?, ?, ?, ?)');
    $req->execute(array($_POST['nom'], $_POST['coef'],$_POST['code'], $_POST['idProf'] ));
    // Redirection du visiteur vers la page du 
    header('Location:menu.php');
    }
    }
    
    ?>
    <?php
      /************E V A L E*************/

    if(isset($_POST['butEval'])){ 
        //extraction des informations envoyé dans des variables par la methode POST
       
    if(isset($_REQUEST['note_eval'], $_REQUEST['id'], 
        $_REQUEST['id_etudiant']))
     {
    
    require_once('../../../model/connexion.php');
    // Insertion du message à l'aide d'une requête préparée
    $id = $_GET['id'];
    $req = $con->prepare('INSERT INTO evaliation_igl2 (note_eval, id, id_etudiant )
    VALUES(?, ?, ?)');
    $req->execute(array($_POST['note_eval'], $_POST['id'], $_POST['id_etudiant'] ));
    // Redirection du visiteur vers la page du 
    header('Location:menu.php');
    }
    }
    
    ?>
    
    
    <!------FIN-------- P  H   P---------------------->
    <?php

?>
    <div class="container">

        
    <!---img.php------>

        <div class="container_left">                <img src="img/etudiant.png" class="icon_button" style="position:relative; left:5vh; width: 17vh; border-radius:28vh;  height: 16vh;"alt="" srcset="">

           
          
        
         
             

        <?php 
          require_once('../../../model/connexion.php');
           $id = $_GET['id']  ;
    
        
            $req = $con->query("SELECT * FROM  etudiant WHERE id = $id");
            $req->execute(); // pas besoin d'affecter le résultat à une variable 
            //Rangement dans un tableau des données importées de la DB.
            $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
            $row= $req->rowCount();
            ?>
    
                <?php
                    foreach($donnees as $donnees){
                ?>
        
        
        
            <div class="box_left" onclick="window.open(); return false;">
                <div class="buttons_container" style=" left:-1vh; font-size:3vh;   position: relative; color:bisque;  " ><?php echo $donnees['etu_prenom']," ", $donnees['etu_nom']; ?></div>
            </div>
            <?php
                    }
           ?>
            <div class="box_left" onclick="anim('info_games');">
                <div class="icon_button" style="background-image: url(img/game.png);"></div>
                <div class="buttons_container">Profil</div>
            </div>

            <div class="box_left" onclick="new_reg_controller('open');">
                <div class="icon_button" style="background-image: url(img/list.png);"></div>
                <div class="buttons_container">New Record</div>
            </div>

            <div class="box_left" onclick="anim('info_note');">
                <div class="icon_button" style="background-image: url(img/card.png);"></div>
                <div class="buttons_container">Note Devoir</div>
            </div>

            <div class="box_left" onclick="anim('info_banks');">
                <div class="icon_button" style="background-image: url(img/bank.png);"></div>
                <div class="buttons_container">Note Examen</div>
            </div>

         

            <div class="box_left" onclick="anim('info_social');">
                <div class="icon_button" style="background-image: url(img/social.png);"></div>
                <div class="buttons_container">Matieres</div>
            </div>

            
            <div class="box_left" onclick="anim('info_sites');">
                <div class="icon_button" style="background-image: url(img/site.png);"></div>
                <div class="buttons_container">Evaliations</div>
            </div>

            <div class="box_left" onclick="anim('info_app');">
                <div class="icon_button" style="background-image: url(img/phone.png);"></div>
                <div class="buttons_container">Fliere</div>
            </div>

            <div class="box_left" onclick="anim('info_documents');">
                <div class="icon_button" style="background-image: url(img/document.png);"></div>
                <div class="buttons_container">Documents</div>
            </div>

            <div class="box_left" onclick="anim('info_emails');">
                <div class="icon_button" style="background-image: url(img/email.png);" onclick="anim('info_emails');"></div>
                <div class="buttons_container" onclick="anim('info_emails');">Emails</div>
            </div>

            <div class="box_left" onclick="logout();">
                <div class="icon_button" style="background-image: url(img/logout.png);"></div>
                <div class="buttons_container">Log out</div>
            </div>

        </div>

        <div class="container_top">
            <div class="box_top" style=" margin-left:100px;">
                <img src="img/watch.png" alt="watch" style="width: 32px; height:32px;margin-right:10px; margin-top:2px;">
                <label id="time">00:00:00</label>
            </div>
       
            <?php
                // Insertion du message à l'aide d'une requête préparée

      $id = $_GET['id']  ;

    
        $req = $con->query("SELECT * FROM  etudiant WHERE id = $id");
        $req->execute(); // pas besoin d'affecter le résultat à une variable 
        //Rangement dans un tableau des données importées de la DB.
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		$row= $req->rowCount();
        ?>

            <?php
                foreach($donnees as $donnees){
            ?>
             

            <div class="box_top">
                <img src="img/ucab.png" alt="user icon" style="width: 32px; height:32px; padding-left:20px; margin-top:2px;">
                <label id="user_logged_id" style="font-size: 28px;"> IG L2</label>
            </div>

            
            <div class="box_top" style=" margin-left:100px;">
                <label id="user_logged_id">System developed by JULINHO NDIAYE.</label>
            </div>
            
        </div>
        

        <div class="container_center">
            <div class="register">
                <div class="reg_title"><h2>New Record</h2></div>
                <div class="reg_inputs_container">
                    <div class="reg_select">
                        <label for="category_sel" class="labels">Category</label>
                        <select name="category_sel" id="category_sel" onchange="open_registers(this);">
                            <option value="ajoute">EVALIATION</option>
                            <option value="etudiant">Devoir S1</option>
                            <option value="prof">Exammen S1</option>
                            <option value="Email">Devoir S2</option>
                            <option value="matiere">Examane S2</option>
                            <option value="absanc">NONE</option>
                            <option value="eval"> NONE</option>
                            <option value="filiere"> NONE</option>
                            <option value="Documents">Documents</option>
                        </select>
                    </div>
                    <!-------P R O F------->
                    
                    <form class="reg_prof"  action="" method="POST">
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="nom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Prenom:</label>
                            <input type="text" class="inputs" name="prenom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">Age:</label>
                            <input type="date" class="inputs" name="dateProf" id="card_date">

                        </div>
                        <div class="reg_inputs">
                            <label for="card_name" class="labels">Telephone:</label>
                            <input type="text" class="inputs" name="phone" id="card_name">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_cod" class="labels">Email:</label>
                            <input type="text" class="inputs" name="email" id="card_cod"> <!--unchanged-->
                        </div>
                        <div class="reg_inputs">
                            <label for="card_cod" class="labels">Adresse:</label>
                            <input type="text" class="inputs" name="adresse" id="card_cod"> <!--unchanged-->
                        </div>
                        
                        <div class="reg_inputs">
                            <label for="card_pass" class="labels">N° dossier:</label>
                            <input type="password" class="inputs" name="dossier" id="card_pass">
                        </div> 

                        
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butProf" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>

                      <!-------I M A G E------->
                    
                      <form class="reg_Email" enctype="multipart/form-data" action="" method="POST">
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="file" class="inputs" name="image" id="card_number">
                        </div>
                        
                        
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butImg" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>
                <!------------ E T U D I A N T--------->
                    <form class="reg_etudiant" enctype="multipart/form-data" action="" method="POST">
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="etu_nom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Prenom:</label>
                            <input type="text" class="inputs" name="etu_prenom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">D naissance:</label>
                            <input type="date" class="inputs" name="etu_date" id="card_date">

                        </div>
                        <div class="reg_inputs">
                            <label for="card_name" class="labels">Telephone:</label>
                            <input type="text" class="inputs" name="etu_phone" id="card_name">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_cod" class="labels">Email:</label>
                            <input type="text" class="inputs" name="etu_email" id="card_cod"> <!--unchanged-->
                        </div>
                        <div class="reg_inputs">
                            <label for="card_cod" class="labels">Adresse:</label>
                            <input type="text" class="inputs" name="etu_adresse" id="card_cod"> <!--unchanged-->
                        </div>
                        
                        <div class="reg_inputs">
                            <label for="card_pass" class="labels">N° dossier:</label>
                            <input type="password" class="inputs" name="etu_dossier" id="card_pass">
                        </div> 

                        <div class="reg_inputs">
                            
                            <label for="card_pass" class="labels">Civilite:</label>
                            <l style="color: pink;">M</l><input type="radio" class="inputs" name="sexy" id="card_pass" value="Home">
                            <l style="color: pink; ">F</l><input type="radio" class="inputs" name="sexy" id="card_pass" value="Femme" >
                        </div>
                   <!-- <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="file" class="inputs" name="image" id="card_number">
                        </div>
                    --> 

                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butEtudiant" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>

                      <!------------M A T I E R E -------->

                    <form class="regiere" action="" method="POST">
                    <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="nom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Coef:</label>
                            <input type="text" class="inputs" name="coef" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">Code:</label>
                            <input type="text" class="inputs" name="code" id="card_date">

                        </div>  

                       
                    
                        
                    <?php
                                // Insertion du message à l'aide d'une requête préparée

                        $req = $con->query('SELECT * FROM proffeseur');
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                        
                            <label for="card_validity" class="labels">Prof:</label>

                            <select class="reg_select"  style="color: white; position:relative; border-radius:3vh; bottom:6vh; left:1vh; width:24vh ;background-color: #9400D3;"  >

                                <?php
                                    foreach($donnees as $donnees){
                                ?>
                                <option  style="color:black; width:7vh; background-color:white; border-radius:3vh;"  value="idProf"><?php echo $donnees['id'],"->", $donnees['nom']; ?>  </option>
                                
                                <?php	
                                }
                                ?>
                         
                            </select> 
                              <input type="text" class="inputs" name="dosProf" id="card_date" style="position:relative; border-radius:3vh; bottom:12vh; left:43vh; width:5vh ;"placeholder="ID">

                                   
                      
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butiere" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>



     <!------------absanc -------->

                    <form class="reg_absanc" action="" method="POST">
                            
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="nom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Coef:</label>
                            <input type="text" class="inputs" name="coef" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">Code:</label>
                            <input type="text" class="inputs" name="code" id="card_date">

                        </div>  
       
                      
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="but_abs" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>




                     <!-------E V A L I A T I O N------->
                    
                    <form class="reg_evaliation" action="" method="POST">
                                               
                        <?php
                                // Insertion du message à l'aide d'une requête préparée

                        $req = $con->query('SELECT * FROM subjects');
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                        
                            <label for="card_validity" class="labels">Matiere:</label>

                            <select class="reg_select"  style="color: white; position:relative; border-radius:3vh; bottom:6vh;
                              left:1vh; width:24vh ;background-color: #9400D3;"  >

                            <?php
                                foreach($donnees as $donnees){
                            ?>
                            <option  style="color:black; width:7vh; background-color:white; border-radius:3vh;"  
                               value="dosProf"><?php echo $donnees['id'],"->", $donnees['nom'] ; ?>  </option>                               
                            <?php	
                             }
                            ?>                         
                            </select> 
                            <input type="text" class="inputs" name="id" id="card_date"
                               style="position:relative; border-radius:3vh; bottom:12vh; left:43vh; width:5vh ;"placeholder="ID">
                               
                               

                               <?php
                                // Insertion du message à l'aide d'une requête préparée

                        $req = $con->query('SELECT * FROM  etudiant');
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                               <label for="card_validity" class="labels">Etudiant:</label>

                            <select class="reg_select"  style="color: white; position:relative; border-radius:3vh; bottom:6vh;
                              left:1vh; width:24vh ;background-color: #9400D3;"  >

                            <?php
                                foreach($donnees as $donnees){
                            ?>
                            <option  style="color:black; width:7vh; background-color:white; border-radius:3vh;"  
                               value="idProf"><?php echo $donnees['id'],"->", $donnees['etu_nom'] ; ?>  </option>                               
                            <?php	
                             }
                            ?>                         
                            </select> 
                            <input type="text" class="inputs" name="id_etudiant" id="card_date"
                               style="position:relative; border-radius:3vh; bottom:12vh; left:43vh; width:5vh ;"placeholder="ID">
                        
                             
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">Note:</label>
                            <input type="text" class="inputs" name="note_eval" id="card_date">

                        </div>
                               
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butEval" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    
                    </form>

     <!------------ajoute -------->

                    
                    <form class="ajoute" action="" method="POST">
                        <div class="reg_inputs">
                        
                        </div>
                    </form>
                            


                      <!------------ M I A L--------->
                    <form action=""  method="POST" class="reg_documents">
                    <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="etu_nom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Prenom:</label>
                            <input type="text" class="inputs" name="etu_prenom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">Age:</label>
                            <input type="date" class="inputs" name="etu_date" id="card_date">

                        </div>
                        <div class="reg_inputs">
                            <label for="card_name" class="labels">Telephone:</label>
                            <input type="text" class="inputs" name="etu_phone" id="card_name">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_cod" class="labels">Email:</label>
                            <input type="text" class="inputs" name="etu_email" id="card_cod"> <!--unchanged-->
                        </div>
                        <div class="reg_inputs">
                            <label for="card_cod" class="labels">Adresse:</label>
                            <input type="text" class="inputs" name="etu_adresse" id="card_cod"> <!--unchanged-->
                        </div>
                        
                        <div class="reg_inputs">
                            <label for="card_pass" class="labels">N° dossier:</label>
                            <input type="password" class="inputs" name="etu_dossier" id="card_pass">
                        </div> 

                       

                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butMat" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>
                    
                </div>

            </div>
            
            <div class="pop_up" style="border-radius: 3px;">
                <br>
                <label id="pop_text" style="color:white; font-family:'Segoe UI',sans-serif; font-size:18px; font-weight:bold;"></label>
                <br><br>
                <button class="buttons" style="background-color: white; color:black;" onclick="pop_close();">OK</button>
            </div>

            <div class="edit_register">
                <div class="reg_title"><h2>EDIT OR DELETE REGISTRATION</h2></div>
                <div class="cont_input">
                    <div class="get_inputs">
                    </div>
                </div>
                
                <div class="inputs">
                    <input type="submit" class="buttons" onclick="save_edit($('#1').val());" value="Save">
                    <input type="submit" class="buttons" onclick="delete_reg($('#1').val());" value="Delete">
                    <input type="submit" class="buttons" onclick="close_edit();" value="Close">
                </div>

            </div>


            
            <!-------------Note Devoir--------->


       
            <?php
                // Insertion du message à l'aide d'une requête préparée

      $id = $_GET['id']  ;

    
        $req = $con->query("SELECT * FROM  etudiant WHERE id = $id");
        $req->execute(); // pas besoin d'affecter le résultat à une variable 
        //Rangement dans un tableau des données importées de la DB.
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		$row= $req->rowCount();
        ?>

            <?php
                foreach($donnees as $donnees){
            ?>
             
            
            <div class="info_container " id="info_note">
            <div class="reg_title"><h2> <?php echo $donnees['etu_prenom'],"  ",$donnees['etu_nom']; ?></h2></div>
            <div class="reg_title" ><h3>Note de Devoir </h3></div>

                
                 <form id="" class="info_tables " method="POST">
                 <?php
                                // Insertion du message à l'aide d'une requête préparée

                        $req = $con->query("SELECT * FROM subjects " );
                        $id = $_GET['id']  ;
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                         <?php
                                foreach($donnees as $donnees){
                            ?>
                            <div class="reg_inputs1">
                               <label for="card_validity" class="labels"><?php echo  $donnees['nom']; ?>:</label>
                               <input type="text" class="inputs" name="note_eval" id="card_date">
                                <p style="color: white; position:relative; border-radius:3vh; bottom:2vh;
                              left:1vh; width:10vh ;" >Coef : <?php echo  $donnees['coef']; ?></p>
                            </div> 
                               <?php	
                                   }
                            ?> 

                       <!------------      ajoute -------->
                          

                               <?php
                                // Insertion du message à l'aide d'une requête préparée

                        $req = $con->query('SELECT * FROM  etudiant');
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                             
                            <?php
                                foreach($donnees as $donnees){
                            ?>
                             <?php	
                             }
                            ?>                         
                           
                               
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butEval" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>

                
                
            </div>

     <?php }}?>

                        <!----------P R O F--------->     
      <!-------------Note Devoir--------->

      <?php
                // Insertion du message à l'aide d'une requête préparée

      $id = $_GET['id']  ;

    
        $req = $con->query("SELECT * FROM  etudiant WHERE id = $id");
        $req->execute(); // pas besoin d'affecter le résultat à une variable 
        //Rangement dans un tableau des données importées de la DB.
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		$row= $req->rowCount();
        ?>

            <?php
                foreach($donnees as $donnees){
            ?>
             
            
            <div class="info_container " id="info_banks">
            <div class="reg_title"><h2> <?php echo $donnees['etu_prenom'],"  ",$donnees['etu_nom']; ?></h2></div>
            <div class="reg_title" ><h3>Note d'examen </h3></div>

                
                 <form id="" class="info_tables " method="POST">
                 <?php
                                // Insertion du message à l'aide d'une requête préparée

                        $req = $con->query("SELECT * FROM subjects " );
                        $id = $_GET['id']  ;
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                         <?php
                                foreach($donnees as $donnees){
                            ?>
                            <div class="reg_inputs1">
                               <label for="card_validity" class="labels"><?php echo  $donnees['nom']; ?>:</label>
                               <input type="text" class="inputs" name="note_eval" id="card_date">
                                <p style="color: white; position:relative; border-radius:3vh; bottom:2vh;
                              left:1vh; width:10vh ;" >Coef : <?php echo  $donnees['coef']; ?></p>
                            </div> 
                               <?php	
                                   }
                            ?> 

                       <!------------      ajoute -------->
                          

                               <?php
                                // Insertion du message à l'aide d'une requête préparée

                        $req = $con->query('SELECT * FROM  etudiant');
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                             
                            <?php
                                foreach($donnees as $donnees){
                            ?>
                             <?php	
                             }
                            ?>                         
                           
                               
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butEval" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>

                
                
            </div>

     <?php }?>

            <div class="info_container" id="info_emails">
                <table id="table_emails" class="info_tables">
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Application </th>
                        <th>User</th>
                        <th>Password</th>
                    </tr>
                </table>
            </div>
            <!-------------NOTE DEVOIR---------->
            <div class="info_container" id="info_social">
                <table id="table_social" class="info_tables">
                    <tr>
                        <th> N°</th>
                        <th>Nom </th>
                        <th>Coef </th>   
                    </tr>
                    <?php
                            // Insertion du message à l'aide d'une requête préparée

                    $req = $con->query('SELECT * FROM subjects');
                    $req->execute(); // pas besoin d'affecter le résultat à une variable 
                    //Rangement dans un tableau des données importées de la DB.
                    $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                    $row= $req->rowcount();
                    ?>

                    <?php
                        foreach($donnees as $donnees){
                    ?>
                    <tr>
                        <td ><?php echo $donnees['id']; ?></td>
                        <td ><?php echo $donnees['nom']; ?></td>
                        <td ><?php echo $donnees['coef']; ?></td>   
                    </tr>
                    <?php	
                    }
                    ?>
       
                </table>
            </div>
            <div class="info_container" id="info_games">
               <!-------------E U D I A N T--------->
                <table id="" class="info_tables">
                    <tr>
                        <th> N°</th> 
                        <th>Nom </th>
                        <th>Prenom </th>
                        <th>Date N </th>
                        <th>Telephone</th>
                        <th>Email </th>
                        <th>Adresse </th>
                        <th>N° dossier</th>
                        <th>Sexy</th>
                        <th>modifie</th>
                        
                    </tr>
                    <?php
                // Insertion du message à l'aide d'une requête préparée


       $id = $_GET['id']  ;

    
        $req = $con->query("SELECT * FROM  etudiant WHERE id = $id");
        $req->execute(); // pas besoin d'affecter le résultat à une variable 
        //Rangement dans un tableau des données importées de la DB.
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		$row= $req->rowCount();
        ?>


            <?php
                foreach($donnees as $donnees){
            ?>
                <tr>
                <td ><?php echo $donnees['id']; ?></td>
                <td ><?php echo $donnees['etu_nom']; ?></td>
                <td ><?php echo $donnees['etu_prenom']; ?></td>
                <td ><?php echo $donnees['etu_date']; ?></td>
                <td ><?php echo $donnees['etu_phone']; ?></td>
                <td ><?php echo $donnees['etu_email']; ?></td>
                <td ><?php echo $donnees['etu_adresse']; ?></td>
                <td ><?php echo $donnees['etu_dossier']; ?></td>
                <td ><?php echo $donnees['sexy']; ?></td>
                <td><a href="view/etudiant.php?id=<?=$donnees['id']; ?>"><img style="height: 25px;" src="img/view.png" alt="" srcset=""></td>             
                </tr>
            <?php	
            }
             ?>
        </table>
                
            <p>ETUDIANT EN LICSANCE 2 INFORMATIQUE ET DE GESTION</p>

            </div>


            <!---  E V A L I A T I O N--->
            <div class="info_container" id="info_sites">
                <table id="table_sites" class="info_tables">
                    <tr>
                        <th>N°</th>
                        <th>Matiere </th>
                        <th>Etudiant</th>
                        <th>Notes</th>
                        <th>Mention</th>
                    </tr>
                    <?php
                // Insertion du message à l'aide d'une requête préparée

        $req = $con->query('SELECT * FROM evaliation');
        $req->execute(); // pas besoin d'affecter le résultat à une variable 
        //Rangement dans un tableau des données importées de la DB.
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		$row= $req->rowcount();
        ?>

            <?php
                foreach($donnees as $donnees){
            ?>
                <tr>
                <td ><?php echo $donnees['id_eval']; ?></td>
                <td ><?php echo $donnees['id']; ?></td>
                <td ><?php echo $donnees['id_etudiant']; ?></td>
                <td ><?php echo $donnees['note_eval']; ?></td>

                <td><a href="view/.php?id=$row['id']?>"><img style="height: 25px;" src="img/pen.png" alt="" srcset=""></td>



                    </tr>
                    <?php	
            }
             ?>
                </table>
            <!----- F I L I E R----->
            <div class="info_container" id="info_app">
                <table id="table_app" class="info_tables">
                    <tr>
                        <th>N°</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                </table>
            </div>
            <div class="info_container" id="info_documents">
                <table id="table_documents" class="info_tables">
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Emission </th>
                        <th>Validity </th>
                        <th>Observation </th>
                    </tr>
                </table>
            </div>             
        </div>
    </div>
   
 
   
</body>
</html>