<div class="container_center">
            <div class="register">
                <div class="reg_title"><h2>New Record</h2></div>
                <div class="reg_inputs_container">
                    <div class="reg_select">
                        <label for="category_sel" class="labels">Category</label>
                        <select name="category_sel" id="category_sel" onchange="open_registers(this);">
                            <option value="ajoute">Ajouter</option>
                            <option value="classes">New Classe</option>
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
                    <!-------C L A S S E S------->
                    
                    <form class="reg_class" action="controller/GeneController.php" method="POST">
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Nom:</label>
                            <input type="text" class="inputs" name="nom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">level:</label>
                            <input type="text" class="inputs" name="level" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_validity" class="labels">capacity:</label>
                            <input type="text" class="inputs" name="capacity" id="card_number">

                        </div>
                      

                        
                        <div class="reg_inputs">
                            <input type="submit" class="buttons" name="butClass" style="margin-left: 60px;" value="Save">
                            <input type="submit" class="buttons"  name="button" onclick="new_reg_controller('close');" value="Close">
                     
                        </div>
                    </form>
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
                            <input type="text" class="inputs" name="nom" id="card_number">
                        </div>
                        <div class="reg_inputs">
                            <label for="card_number" class="labels">Coef:</label>
                            <input type="text" class="inputs" name="coef" id="card_number">
                        </div>
                       

                       
                    
                        
                    <?php
                        require_once('model/connexion.php');
                        
                        $req = $con->query('SELECT * FROM proffeseur');
                        $req->execute(); 
                        
                        // pas besoin d'affecter le résultat à une variable 
                        //Rangement dans un tableau des données importées de la DB.
                        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                        $row= $req->rowcount();
                        ?>
                        
                            <label for="card_validity" class="labels">Prof:</label>

                            <select class="reg_select" name="idProf"  style="color: white; position:relative; border-radius:3vh; bottom:6vh; left:-7vh; width:15vh ;background-color: #9400D3;"  >
                                <option class="inputs" value="">Prof</option>
                                <?php
                                    foreach ($donnees as $donnees) {
                                    
                                //echo "<option  value='".$value[0]."'>$value[0]  </option>" ;
                                    
                                ?>
                                <option value="<?php echo $donnees['id']?>"><?php echo $donnees['nom']?></option>
                                
                                <?php	
                                }
                                ?>
                         
                            </select> 

                                   
                      
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
                        $req = $con->query('SELECT * FROM matiere');
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
                             
            <?php
            include('contentAff.php');
            ?>


            <!---co--->         
        </div>
    </div>

   
</body>
</html>