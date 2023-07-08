<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="..//eel.js"></script>
    <script type="text/javascript" src="../js/menu_animations.js"></script>
     <link rel="stylesheet" href="../css/modife.css">
    <link rel="icon" href="../img/password.png">
    <title>UCAB IG L2</title>
</head>
<body onload="update_hours();">

    
  



           
    <div class="container">
         
<?php
        require_once('../config/connexion.php');
    

    
        $req = $con->query("SELECT * FROM  images WHERE id = 2");
        $req->execute(); // pas besoin d'affecter le résultat à une variable 
        //Rangement dans un tableau des données importées de la DB.
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		$row= $req->rowCount();
        ?>

            <?php
                foreach($donnees as $donnees){
            ?>
             

        <div class="container_left">


       <!---img.php------>
            <img src="img.php?id=<?=$donnees['id']?>" class="icon_button" style="position:relative; left:5vh; width: 17vh; border-radius:28vh;  height: 16vh;"alt="" srcset="">
                <div class="buttons_container" style="font-family:BungeeInline-Regular; font-size:20px; color:white;height:6vh;">
                              
            </div>

  <div class="box_left" onclick="anim('info_cards');">
                <div class="icon_button" style="background-image: url(../img/social.png); "></div>
                <div class="buttons_container"><?php echo $donnees['etu_email']; ?></div>
            </div>
         

            <div class="box_left"  >
                <div class="icon_button" style="background-image: url(../img/social.png);"> </div>
                <div class="buttons_container"><?php echo $donnees['etu_nom']; ?></div>
            </div>

            <div class="box_left" onclick="new_reg_controller('open');">
                <div class="icon_button" style="background-image: url(../img/social.png);"></div>
                <div class="buttons_container"><?php echo $donnees['etu_prenom']; ?></div>
            </div>

          
           

            <div class="box_left" onclick="anim('info_banks');">
                <div class="icon_button" style="background-image: url(../img/social.png);"></div>
                <div class="buttons_container"><?php echo $donnees['etu_adresse']; ?></div>
            </div>

           

            <div class="box_left" onclick="anim('info_social');">
                <div class="icon_button" style="background-image: url(../img/social.png);"></div>
                <div class="buttons_container"><?php echo $donnees['etu_phone']; ?></div>
            </div>

            <div class="box_left" onclick="anim('info_games');">
                <div class="icon_button" style="background-image: url(../img/social.png);"></div>
                <div class="buttons_container">Abcences</div>
            </div>

            <div class="box_left" onclick="anim('info_sites');">
                <div class="icon_button" style="background-image: url(../img/social.png);"></div>
                <div class="buttons_container">Evaliations</div>
            </div>

            <div class="box_left" onclick="anim('info_app');">
                <div class="icon_button" style="background-image: url(../img/social.png);"></div>
                <div class="buttons_container">cupe</div>
            </div>

            <div class="box_left" onclick="anim('info_documents');">
                <div class="icon_button" style="background-image: url(../img/social.png);"></div>
                <div class="buttons_container">Documents</div>
            </div>

            <div class="box_left" onclick="anim('info_emails');">
                <div class="icon_button" style="background-image: url(../img/social.png);" onclick="anim('info_emails');"></div>
                <div class="buttons_container" onclick="anim('info_emails');">Emails</div>
            </div>

            <div class="box_left" onclick="logout();">
                <div class="icon_button" style="background-image: url(../img/logout.png);"></div>
                <div class="buttons_container">Log out</div>
            </div>
        
            
        </div>
        <?php	
            }
             ?>
        <div class="container_top">
            <div class="box_top" style=" margin-left:100px;">
                <img src="../img/watch.png" alt="watch" style="width: 32px; height:32px;margin-right:10px; margin-top:2px;">
                <label id="time">00:00:00</label>
            </div>

            <div class="box_top">
                <img src="../img/ucab.png" alt="user icon" style="width: 32px; height:32px; padding-left:20px; margin-top:2px;">
                <label id="user_logged_id" style="font-size: 28px;"> IG L2</label>
            </div>

            
            <div class="box_top" style=" margin-left:100px;">
                <label id="user_logged_id">System developed by JULINHO NDIAYE.</label>
            </div>
            
        </div>

        
  </div>
    </div>

</body>
</html>