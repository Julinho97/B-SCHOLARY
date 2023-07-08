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