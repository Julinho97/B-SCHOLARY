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

            <div class="box_left" onclick="anim('info_class');">
                <div class="icon_button"><i class="fa fa-classe" aria-hidden="true"></i></div>
                <div class="buttons_container">Classes</div>
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

            <div class="box_left" onclick="anim('info_emploi');">
                <div class="icon_button" style="background-image: url(public/img/social.png);"></div>
                <div class="buttons_container">Enploi du Temps</div>
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