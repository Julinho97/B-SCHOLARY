<?php
/**
* Page : rendez_vous.php
*/

//--------------------------------------------------------//
//Affichage des erreurs PHP : A mettre AU DEBUT de tes pages !
//--------------------------------------------------------//
 
//--------------------------------------------------------//
// Connexion à la BDD
//--------------------------------------------------------//
require_once("../config/connexion.php");


//--------------------------------------------------------//
//récupération "porpre" des variables
//--------------------------------------------------------//
   $id_rdv = isset($_POST["id_rdv"]) ? $_POST["id_rdv"] : "";
$Objet_rdv = isset($_POST["Objet_rdv"]) ? $_POST["Objet_rdv"] : "";
 $Lieu_rdv = isset($_POST["Lieu_rdv"]) ? $_POST["Lieu_rdv"] : "";
$Debut_rdv = isset($_POST["Debut_rdv"]) ? $_POST["Debut_rdv"] : "";
  $Fin_rdv = isset($_POST["Fin_rdv"]) ? $_POST["Fin_rdv"] : "";

//--------------------------------------------------------//
//traitement du Submit
//--------------------------------------------------------//
if(isset($_POST['Modifier'])){
 if($id_rdv){
  $sql = "UPDATE rendez_vous 
       SET Objet_rdv=:Objet_rdv,
         Lieu_rdv=:Lieu_rdv,
         Debut_rdv=:Debut_rdv,
         Fin_rdv=:Fin_rdv  
      WHERE id_rdv = :id_rdv";
  
  try{
   $stmt = $con->prepare($sql);
   $stmt->bindparam(':id_rdv',$id_rdv);
   $stmt->bindparam(':Objet_rdv',$Objet_rdv);
   $stmt->bindparam(':Lieu_rdv',$Lieu_rdv);
   $stmt->bindparam(':Debut_rdv',$Debut_rdv);
   $stmt->bindparam(':Fin_rdv',$Fin_rdv);
   
  $retour = $stmt->execute();
  }catch(Exception $e){
   echo "Erreur ! " .$e->getMessage();
  }
 }
}


//--------------------------------------------------------//
//Récupération des infromations du RDV si elles existent
//--------------------------------------------------------//
if($id_rdv){
 $sql = "SELECT *
     FROM rendez_vous
     WHERE id_rdv = :id_rdv ";

 $a_datas = ":id_rdv"==$id_rdv;   
 try{ 
   $stmt = $con->prepare($sql);
   $retour = $stmt->execute();
   $result = $stmt->fetchAll() ;//on stocke les resultats dans un array
  $array_result = $result[0];
   
 }catch(Exception $e){
  echo "Erreur ! " .$e->getMessage();
 } 
}
 ?>

<html>
<head>
 <link rel="stylesheet" media="screen" type="text/css" href="monstyle.css">
 <title>modifier Rdv</title>
</head>
<body>

 <form id="form1" name="form1" method="POST" action="">

 <FIELDSET>
  <LEGEND align='top'><h1><fieldset>MODIFIER UN RENDEZ-VOUS </fieldset></h1></LEGEND>
   <table width="420" border="0">
    
    <tr>
     <td>Numero</td>
     <td><label>
      <input name="id_rdv" type="text" id="id_rdv"  value="<?php echo $id_rdv;?>"/>
     </label></td>
    </tr>
    <tr>
     <td>Objet</td>
     <td><label>
      <input name="Objet_rdv" type="text" id="Objet_rdv" value="<?php echo isset($array_result['Objet_rdv']) ? $array_result['Objet_rdv'] : '';?>"/>
     </label></td>
    </tr>
    <tr>
   <td>Lieu</td>
     <td><label>
      <input name="Lieu_rdv" type="text" id="Lieu_rdv" value="<?php echo isset($array_result['Lieu_rdv']) ? $array_result['Lieu_rdv'] : '';?>" />
     </label></td>
    </tr>
    <tr>
   
     <td>Debut</td>
     <td><input name="Debut_rdv" type="text" id="Debut_rdv" /></td>
     </tr>
     <tr>
     <td>Fin</td>
     <td><input name="Fin_rdv" type="text" id="Fin_rdv" /></td>
    </tr>
    <tr>
     <td>
      <div class=monBouton>
       <input name="Modifier" type="submit" class="ajouter" value="Modifier" />
       <input name="Annuler" type="reset" class="Annuler" value="Annuler" onclick='document.form1.action="annuler.php?fichier=0";document.form1.submit();'/>
      </div>  
     </td>
    </tr>
   </table>
  </FIELDSET>
  
 </form>
</body>
<html>
