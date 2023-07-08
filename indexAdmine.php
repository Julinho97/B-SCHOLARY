<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/menu_animation.js"></script>
     <link rel="stylesheet" href="public/css/menu.css">
     <link rel="stylesheet" href="public/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->

    <link rel="icon" href="public/img/password.png">
    <title>UCAB IG L2</title>
</head>
<body onload="update_hours();">


    



    <!------FIN-------- P  H   P---------------------->
   
    <div class="container">

        <div class="container_left">
            <div class="title_left" style="margin-bottom: 60px; height:5vh;">
            <img src="public/img/logo.png" class="icon_button" style="width: 20vh;  height: 7vh;"alt="" srcset="">
                <div class="buttons_container" style="font-family:BungeeInline-Regular; font-size:20px; color:white;height:6vh;">
                    BAMSASIN DESIGN              
                </div>
            </div>


             <form class="buttons_container" action="controller/GeneController.php" method="POST">
                <input placeholder="Recherche" type="search" class="search" name="inputSearch" id="">
                <input type="submit" name="Search" value="Search">
            </form>
            

            <div class="box_left" onclick="window.open('public/img/como_usar.pdf', '_blank', 'fullscreen=yes'); return false;">
                <div class="icon_button" style="background-image: url(public/img/question.png);"> </div>
                <div class="buttons_container">How to use?</div>
            </div>

            <div class="box_left" onclick="new_reg_controller('open');">
                <div class="icon_button" style="background-image: url(public/img/list.png);"></div>
                <div class="buttons_container">New Record</div>
            </div>

            <div class="box_left" onclick="anim('info_cards');">
                <div class="icon_button"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                <div class="buttons_container">Etudiants</div>
            </div>

            <div class="box_left" onclick="anim('info_banks');">
                <div class="icon_button" style="background-image: url(public/img/prof.png);"></div>
                <div class="buttons_container">Professeurs</div>
            </div>

         

            <div class="box_left" onclick="anim('info_social');">
                <div class="icon_button" style="background-image: url(public/img/social.png);"></div>
                <div class="buttons_container">Matieres</div>
            </div>

            <div class="box_left" onclick="anim('info_games');">
                <div class="icon_button" style="background-image: url(public/img/game.png);"></div>
                <div class="buttons_container">Abcences</div>
            </div>

            <div class="box_left" onclick="anim('info_sites');">
                <div class="icon_button" style="background-image: url(public/img/site.png);"></div>
                <div class="buttons_container">Evaliations</div>
            </div>

            <div class="box_left" onclick="anim('info_app');">
                <div class="icon_button" style="background-image: url(public/img/phone.png);"></div>
                <div class="buttons_container">Fliere</div>
            </div>

            <div class="box_left" onclick="anim('info_documents');">
                <div class="icon_button" style="background-image: url(public/img/document.png);"></div>
                <div class="buttons_container">Documents</div>
            </div>

            <div class="box_left" onclick="anim('info_emails');">
                <div class="icon_button" style="background-image: url(public/img/email.png);" onclick="anim('info_emails');"></div>
                <div class="buttons_container" onclick="anim('info_emails');">Emails</div>
            </div>

            <div class="box_left" onclick="logout();">
                <div class="icon_button" style="background-image: url(public/img/logout.png);"></div>
                <div class="buttons_container">Log out</div>
            </div>

            
        </div>

        <div class="container_top">
            <div class="box_top" style=" margin-left:100px;">
                <img src="public/img/watch.png" alt="watch" style="width: 32px; height:32px;margin-right:10px; margin-top:2px;">
                <label id="time">00:00:00</label>
            </div>

            <div class="box_top">
                <img src="public/img/ucab.png" alt="user icon" style="width: 32px; height:32px; padding-left:20px; margin-top:2px;">
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
                            <option value="ajoute">Ajouter</option>
                            <option value="etudiant">New Etudiant</option>
                            <option value="prof">New Professeur</option>
                            <option value="Email">New Image</option>
                            <option value="matiere">New Matiere</option>
                            <option value="absanc">New Absanc</option>
                            <option value="eval">New Evaliation</option>
                            <option value="filiere">New Filiere</option>
                            <option value="Documents">Documents</option>
                        </select>
                    </div>
                    <!-------P R O F------->
                    
                    <form class="reg_prof" action="controller/GeneController.php" method="POST">
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
                    
                      <form class="reg_Email" enctype="multipart/form-data" action="controller/GeneController.php" method="POST">
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
                    <form class="reg_etudiant" enctype="multipart/form-data" action="controller/GeneController.php" method="POST">
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
                            <label for="card_cod" class="labels">Password:</label>
                            <input type="password" class="inputs" name="etu_password" id="card_cod"> <!--unchanged-->
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
                 <!--  <div class="reg_inputs">     
                    <?php  /* 
                        require_once('model/connexion.php');
                        $req = $con->query('SELECT * FROM images');
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                        
                            <label for="card_validity" class="labels">Image:</label>

                            <select class="reg_select"  style="color: white; position:relative; border-radius:3vh; bottom:6vh; left:1vh; width:24vh ;background-color: #9400D3;"  >

                                <?php
                                    foreach($donnees as $donnees){
                                ?>
                                <option  style="color:black; width:7vh; heigth:18vh; background-color:white; border-radius:3vh;"  value="idPr"><?php echo $donnees['id'],"->", $donnees['nom']; ?>  </option>
                                
                                <?php	
                                }*/
                                ?>
                         
                            </select> 

                            <input type="text" class="inputs" name="idImage" id="card_number">
                        </div>
                   
                                
                             -->

                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butEtudiant" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>

                      <!------------M A T I E R E -------->

                    <form class="reg_matiere" action="controller/GeneController.php" method="POST">
                    <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="nom_mat" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Coef:</label>
                            <input type="text" class="inputs" name="coef_mat" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">Code:</label>
                            <input type="text" class="inputs" name="code_mat" id="card_date">

                        </div>  

                       
                    
                        
                    <?php
                        require_once('model/connexion.php');
                        
                        $req = $con->query('SELECT * FROM proffeseur_igl2');
                        $req->execute(); 
                        
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                        
                            <label for="card_validity" class="labels">Prof:</label>

                            <select class="reg_select"  style="color: white; position:relative; border-radius:3vh; bottom:6vh; left:-7vh; width:15vh ;background-color: #9400D3;"  >

                                <?php
                                    foreach($donnees as $donnees){
                                ?>
                                <option  style="color:black; width:7vh; background-color:white; border-radius:3vh;"  value="idProf"><?php echo $donnees['dossier'],"->", $donnees['nom']; ?>  </option>
                                
                                <?php	
                                }
                                ?>
                         
                            </select> 
                            <input type="text" class="inputs" name="dosProf" id="card_date" style="position:relative; border-radius:3vh; bottom:12vh; left:33vh; width:11vh ;"placeholder="N° Dossier">

                                   
                      
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="but_matiere" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>



     <!------------absanc -------->

                    <form class="reg_absanc" action="controller/GeneController.php" method="POST">
                            
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="nom_mat" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Coef:</label>
                            <input type="text" class="inputs" name="coef_mat" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">Code:</label>
                            <input type="text" class="inputs" name="code_mat" id="card_date">

                        </div>  

                       
                    
              

                                   
                      
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="but_abs" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>




                     <!-------E V A L I A T I O N------->
                    
                    <form class="reg_evaliation" action="controller/GeneController.php" method="POST">
                                               
                        <?php
                        require_once('model/connexion.php');
                        $req = $con->query('SELECT * FROM matiere_igl2');
                        $req->execute(); 
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                         <?php
                                foreach($donnees as $donnees){
                            ?>
                            <label for="card_validity" class="labels"><?php echo  $donnees['nom_mat'] ; ?>:</label>

                            <select class="reg_select"  style="color: white; position:relative; border-radius:3vh; bottom:6vh;
                              left:1vh; width:24vh ;background-color: #9400D3;"  >

                           
                            <option  style="color:black; width:7vh; background-color:white; border-radius:3vh;"  
                               value="idProf">  </option>                               
                                           
                            </select>    <?php	
                                   }
                            ?> 

                       <!------------    
                           <    

                               <?php
                        require_once('model/connexion.php');
                        $req = $con->query('SELECT * FROM  etudiant_igl2');
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

    ajoute -------->

                    
                    <form class="ajoute" action="controller/GeneController.php" method="POST">
                        <div class="reg_inputs">
                        
                        </div>
                    </form>
                            


                      <!------------ M I A L--------->
                    <form action="controller/GeneController.php"  method="POST" class="reg_documents">
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



            <!-------------E U D I A N T--------->
            <div class="info_container" id="info_cards">
                <table id="table_cards" class="info_tables">
                    <tr>
                        <th> N°</th>
                        
                        <th>Nom </th>
                        <th>Prenom </th>
                        <th>Date N </th>
                        <th>Adresse </th>
                        <th>Civilite</th>
                        <th>Date A</th>
                        <th>Profil</th>
                        
                    </tr>
                    <?php
        require_once('model/connexion.php');
        $req = $con->query('SELECT * FROM etudiant_igl2');
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
                <td ><?php echo $donnees['etu_prenom']; ?></td>
                <td ><?php echo $donnees['etu_nom']; ?></td>
                <td ><?php echo $donnees['etu_date']; ?></td>
                <td ><?php echo $donnees['etu_adresse']; ?></td>
                <td ><?php echo $donnees['sexy']; ?></td>
                <td ><?php echo $donnees['modifed_at']; ?></td>
                <td><a href="../view/etudiant.php?id=<?=$donnees['id']; ?>"><img style="height: 25px;" src="public/img/view.png" alt="" srcset=""></td>
           
                </tr>
            <?php	
            }
             ?>
                        
                
                </table>
                

            </div>

 
                

                        <!----------P R O F--------->     
            <div class="info_container" id="info_banks">
                <table id="table_bancks" class="info_tables">
                    <tr>
                    <th> N°</th>
                        
                        <th>Nom </th>
                        <th>Prenom </th>
                        <th>Age </th>
                        <th>Telephone</th>
                        <th>Email </th>
                        <th>Adresse </th>
                        <th>N° dossier</th>
                        <th>modifie</th>

                    </tr>
                    <?php
        require_once('model/connexion.php');
        $req = $con->query('SELECT * FROM proffeseur_igl2');
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
                <td ><?php echo $donnees['prenom']; ?></td>
                <td ><?php echo $donnees['dateProf']; ?></td>
                <td ><?php echo $donnees['phone']; ?></td>
                <td ><?php echo $donnees['email']; ?></td>
                <td ><?php echo $donnees['adresse']; ?></td>
                <td ><?php echo $donnees['dossier']; ?></td>
                <td><a href="../view/.php?id=<?=$donnees['id']?>"><img style="height: 25px;" src="public/img/pen.png" alt="" srcset=""></td>



                    </tr>
                    <?php	
            }
             ?>
                </table>


            </div>
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
            <!-------------M A T I E R E---------->
            <div class="info_container" id="info_social">
                <table id="table_social" class="info_tables">
                <tr>
                        <th> N°</th>
                        
                        <th>Cours </th>
                        <th>Coef </th>
                        <th>Code </th>
                        <th>Dossier Prof</th>
                        <th>Modifier</th>
                        
                    </tr>
                    <?php
        require_once('model/connexion.php');
        $req = $con->query('SELECT * FROM matiere_igl2 ');
        $req->execute(); // pas besoin d'affecter le résultaune variable 
        //Rangement dans un tableau des données importées de la DB.
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		$row= $req->rowcount();
        ?>

            <?php
                foreach($donnees as $donnees){
            ?>
                <tr>
                <td ><?php echo $donnees['id']; ?></td>
                <td ><?php echo $donnees['nom_mat']; ?></td>
                <td ><?php echo $donnees['coef_mat']; ?></td>   
                <td ><?php echo $donnees['code_mat']; ?></td>
                <td ><?php echo $donnees['dosProf']; ?></td>
                <td><a href="../view/update.php?id=<?=$row['id']?>"><img style="height: 25px; color:azure;" src="public/img/pen.png" alt="" srcset=""></td>


               
                </tr>
            <?php	
            }
             ?>
                        
                   
                </table>
            </div>
            <div class="info_container" id="info_games">
                <table id="table_games" class="info_tables">
                
                      <tr> 
                        <th> N°</th> 
                        <th>   1 </th>
                        <th>3 </th>
       
                        <th>2</th>
                    </tr>
                   
    
                </table>
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
        require_once('model/connexion.php');
        $req = $con->query('SELECT * FROM evaliation_igl2');
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
                <td ><?php echo $donnees['id_mat']; ?></td>
                <td ><?php echo $donnees['id_etudiant']; ?></td>
                <td ><?php echo $donnees['note_eval']; ?></td>

                <td><a href="../view/.php?id=$row['id']?>"><img style="height: 25px;" src="public/img/pen.png" alt="" srcset=""></td>



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