  <!-------------Classes--------->
            <div class="info_container" id="info_class">
                <table id="table_class" class="info_tables">
                    <tr>
                        <th> N°</th>
                        
                        <th>Nom </th>
                        <th>Level </th>
                        <th>Capacity </th>
                      
                        
                    </tr>
                    <?php
                  
                    require_once('model/connexion.php');
                    $req = $con->query('SELECT * FROM classes');
                    $req->execute(); // pas besoin d'affecter le résultat à une variable 
                    //Rangement dans un tableau des données importées de la DB.
                    $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                    $row= $req->rowcount();
                

                    foreach($donnees as $donnees){
                    ?>
                    <tr>
                        <td ><?php echo $donnees['id']; ?></td>
                        
                        <td ><?php echo $donnees['nom']; ?></td>
                        <td ><?php echo $donnees['level']; ?></td>
                        <td ><?php echo $donnees['capacity']; ?></td>
                       
                        <td><a href="../view/etudiant.php?id=<?=$donnees['id']; ?>"><img style="height: 25px;" src="public/img/view.png" alt="" srcset=""></td>
                
                    </tr>
                    <?php	
                    }
                    ?>                
                </table>           
            </div>

                <!---------FIN Etudiant---------> 
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
                    $req = $con->query('SELECT * FROM etudiant');
                    $req->execute(); // pas besoin d'affecter le résultat à une variable 
                    //Rangement dans un tableau des données importées de la DB.
                    $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
                    $row= $req->rowcount();
                    
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
                        <td><a href="etudiant?id=<?=$donnees['id']; ?>"><img style="height: 25px;" src="public/img/view.png" alt="" srcset=""></td>
                
                    </tr>
                    <?php	
                    }
                    ?>                
                </table>           
            </div>

                <!---------FIN Etudiant---------> 

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
                    $req = $con->query('SELECT * FROM proffeseur');
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
                        <th> Prof</th>
                        <th>Modifier</th>
                        
                    </tr>
                    <?php
        require_once('model/connexion.php');
        $req = $con->query('SELECT subjects.id,subjects.nom AS nom_mat,subjects.coef, proffeseur.nom FROM subjects
                            JOIN proffeseur ON subjects.idProf =proffeseur.id ');
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
                <td ><?php echo $donnees['coef']; ?></td>   
                <td ><?php echo $donnees['nom']; ?></td>
                <td><a href="../view/update.php?id=<?=$donnees['id']?>"><img style="height: 25px; color:azure;" src="public/img/pen.png" alt="" srcset=""></td>


               
                </tr>
            <?php	
            }
             ?>
                        
                   
                </table>
            </div>


 <!-------------ZM¨LOI DU TEMPS---------->
            <div class="info_container" id="info_emploi">
                <table id="table_emploi" class="info_tables">
                <tr>
                        <th> N°</th>
                        <th>Cours </th>
                        <th>class </th>
                        <th> Prof</th>
                        <th>Modifier</th>
                        
                    </tr>
                    <?php
        require_once('model/connexion.php');
        $req = $con->query('SELECT emploi_du_temps.id,subjects.nom AS nom_mat,classes.nom AS nom_class, proffeseur.nom FROM emploi_du_temps
                            JOIN subjects ON emploi_du_temps.id_course =subjects.id
                            JOIN classes ON emploi_du_temps.id_class =classes.id
                            JOIN proffeseur ON emploi_du_temps.id_prof =proffeseur.id
                             ');
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
                <td ><?php echo $donnees['nom_class']; ?></td>   
                <td ><?php echo $donnees['nom']; ?></td>
                <td><a href="../view/update.php?id=<?=$donnees['id']?>"><img style="height: 25px; color:azure;" src="public/img/pen.png" alt="" srcset=""></td>


               
                </tr>
            <?php	
            }
             ?>
                        
                   
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
        $req = $con->query('SELECT * FROM matiere ');
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
                <td><a href="../view/update.php?id=<?=$donnees['id']?>"><img style="height: 25px; color:azure;" src="public/img/pen.png" alt="" srcset=""></td>


               
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