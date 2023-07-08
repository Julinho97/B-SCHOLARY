<?php
            include("../config/connexion.php");
            $req=$con->prepare("SELECT * FROM images WHERE id=? limit 1");
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute(array($_GET["id"]));
            $tab=$req->fetchAll();
            echo $tab[0]["bin"];



            ?>