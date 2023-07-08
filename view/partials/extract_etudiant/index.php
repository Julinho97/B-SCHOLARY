<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="/eel.js"></script>
    <script type="text/javascript" src="js/index_animations.js"></script>
    <link rel="stylesheet" href="css/indexe.css">
    <link rel="icon" href="img/password.png">
    <title>Secret Keys</title>
</head>
<body onload="load_page();">

<?php
       
    require_once('../config/connexion.php');
    if(isset($_POST["login_use"])) {
    if($_POST["etu_email"]=="" or $_POST["etu_password"]=="" ){
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";

  }
  else{
    $email=trim($_POST["etu_email"]);
    $password= strip_tags(trim($_POST["etu_password"]));
    $query= $con->prepare("SELECT * FROM etudiant_igl2 WHERE etu_email=? AND etu_password=?");
    $query->execute(array($email,$password));
    $control=$query->fetch(PDO::FETCH_OBJ);
    if($control>0){
        $id = $_GET['id'] ;        
        header("location:etudiant.php");  

    }
    else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }



 }  
      ?>

<div class="container">
    <div class="background"></div>
        <form action="" method="POST">
            <div class="login_container" name="">
               
               
                <div class="title_login">
                    <a href="etudiant.php?id=1" class="title" style="padding:0;">Bamsasin-School</a>
                   <i class="buttons" style="padding:0; left:53.3vh; position:relative;">
                        <a href="../index.php" style="padding:0; color:aliceblue; left:7vh;top:2vh; position:relative;" >Back</a>
                   </i><!--    
                    <label style="font-size:16px;" class="top_label">New user? <a onclick="new_container_anim('open');">Click here</a></label>
                -->
                </div>
                


                <div class="login_label">
                    <label class="label_login">Student Login</label>
                </div>
                <div class="login_user">
                    <label for="user_login" class="label_input">Email:</label>
                    <input type="text" class="inputs" name="etu_email" id="get_user_login" placeholder="Julinho97"><br>
                </div>
                <div class="login_user" data-aos="fade-down" data-aos-delay="500">
                    <label for="etu_password" class="label_input">Password:</label>
                    <input type="password" class="inputs" name="etu_password" id="get_user_password" placeholder="* * * * * * * * *">
                </div>
                <div class="buttons_container">
                    <label class="top_label" style="margin: 0 20px;">Forgot your password?<a href="#" onclick="recovery_pass('open');">Click here</a></label>
                    <a href="etudiant.php?id=<?=$donnees['id'];?>"><input type="submit" name="login_use" class="buttons" value="Confirm"></a>
                </div>
                <div class="login_user" style="text-align: center;width: 100%;">
                    <label class="label_input" id="login_txt" style="width: 100%;"></label>
                </div>

            </div>

            <div class="new_register_container">
                <div class="title_new"><h2 style="padding:0;">New User</h2></div>
                <div class="register_container">
                    <div class="box">
                        <label for="user_name" class="label_input">Name:</label>
                        <input type="text" name="user_name" class="inputs" id="new_name" placeholder="Bamsasin" >
                    </div>
                

                    <div class="box">
                        <label for="user_phone" class="label_input">Phone:</label>
                        <input type="tel" name="user_phone" class="inputs" id="new_phone" placeholder="766657278" >
                    </div>

                    <div class="box">
                        <label for="user_date" class="label_input">Born:</label>
                        <input type="date" name="user_date" class="inputs" id="new_date" >
                        
                    </div>

                    <div class="box">
                        <label for="user_login" class="label_input">User:</label>
                        <input type="text" name="user_login" class="inputs" id="new_login" placeholder="Julinho97">
                    </div>

                    <div class="box">
                        <label for="user_email" class="label_input">Email:</label>
                        <input type="email" name="user_email" class="inputs" id="new_email"  placeholder="julinhondiaye097@gmail.com">
                    </div>

                    <div class="box">
                        <label for="user_password" class="label_input">Password:</label>
                        <input type="password" name="user_password" class="inputs" id="new_pass" >
                    </div>
                    
                    <div class="user_logo">
                        <img src="img/user.png" alt="user logo" class="user_logo"> 
                    </div>

                    <div class="box"><label class="label_input" id="return_register" style="width: 90%;"></label></div>

                    <div class="box">
                        <input type="submit" class="buttons" name="but" value="SAVEE">
                        <input type="submit" class="buttons" onclick="new_container_anim('close');" value="CLOSS">
                    </div>
                </div>

            </div>

            <div class="recovery_container">
                <div class="title_new"><h2>RECOVER PASSWORD</h2></div>
                <div class="box">
                    <label for="get_email" class="label_input">Email:</label>
                    <input type="email" name="get_email" id="get_email" class="inputs" style="width: 400px; text-align:center;" placeholder="julinhondiay097@gmail.com">
                </div>
                <div class="box" style="margin-top: 30px;">
                    <button class="buttons" style="margin-left:150px;" onclick="reco_pass_js();">Retrieve</button>
                    <button class="buttons" onclick="recovery_pass('close');">Close</button>
                </div>
                <div class="box" style="text-align:center;"><label class="label_input" id="reco_label" style="width: 99%; "></label></div>
        
        
       
        </form>
       
    </div>
</div>


    <script type="text/javascript" >
        // NEW USER REGISTRATION
       /* async function save_register_js(){
            eel.btn_save($('#new_name').val(),$('#new_phone').val(),$('#new_date').val(),$('#new_login').val(),$('#new_pass').val(),$('#new_email').val())
        };
        eel.expose(save_return); // USED TO PASS THE FUNCTION TO BE SEEN AT PYTHON
        function save_return(status){
            if (status == "success"){
                $('#return_register').text('Registration completed successfully!');
                $('#new_name').val('');
                $('#new_phone').val('');
                $('#new_login').val('');
                $('#new_pass').val('');
                $('#new_email').val('');
            }
            if (status == "failed"){
                $('#return_register').text('Error when registering, make sure you have no blank fields.');
            }
        };

        // RECOVER PASSWORD
        async function reco_pass_js(){
            $('#reco_label').text("Checking email, please wait ...")
            eel.btn_recovery($('#get_email').val())
        };
        
        eel.expose(reco_return)
        function reco_return(status){
            if (status == "success"){
                $('#reco_label').text("Password sent to email successfully!")
            }
            if (status == "failed"){
                $('#reco_label').text("We did not find the email you entered")
            }
        };

        // USER LOGIN
        async function login_user(){
            eel.btn_login($('#get_user_login').val(), $('#get_user_password').val())
        };

        eel.expose(login_return)
        function login_return(status){
            if (status == "success"){
                location.href = "menu.html";
            }
            if (status == "failed"){
                $('#login_txt').text("Incorrect User or Password")
            }
        }
*/

    </script>

<?php
/*Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=php', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO registers (user_name, user_phone, user_date, user_new_login, user_new_email, user_new_password)
VALUES(?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['user_name'], $_POST['user_phone'],$_POST['user_date'], $_POST['user_new_login'], $_POST['user_new_email'], $_POST['user_new_password'] ));
// Redirection du visiteur vers la page du minichat
header('Location: index.html');
*/
?>


    
</body>
</html>