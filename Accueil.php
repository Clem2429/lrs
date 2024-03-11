<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"><link rel="icon" href="img/logo_lrs.jpeg"/>
        <script src='js/global.js' async></script>
        <script src='js/countdown.js' async></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/countdown.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>
    <body class="Accueil">
        <header role="banner" id="header">
        <div class="title">Letot Radio Show</div>
        </header>
        <?php include('html/nav.html'); ?>
    <div class="namepage">
        <h1>Accueil</h1>
    </div>
    <main>
<div class="btn">
      <span id="headerup">⇧</span>
    </div>
        <section>       
            <div style="background-image: url('img/landing.jpg'); background-size: cover;" class="countdown">
                <h2 class="timer" style="letter-spacing: 15px; margin-left: 110px;"></h2>
                <span class="j">Jours</span>
                <span class="h">Heures</span>
                <span class="m">Minutes</span>
                <span class="s">Secondes</span>
                <br><br><br><br><br><br><br><br><br><br><br>
            <div class="TxtListEmi"><span class="TxtInfoEmi">À cette occasion, nous vous proposons d'écouter nos émissions sur le D-Day :</span>
                <br>
                <a href="lien"><button style="margin-left: 270px;" class="custom-btn btn-5 BTN1">Résister, S'évader</button></a><a href="lien"><button class="custom-btn btn-5">Le D-Day</button></a>
            </div>
            </div>
            <br>
                    <div class="first_container_accueil">
                        <div class="box_first_container_accueil">
                              <div class="number_presentation_accueil">67</div> 
                              <div class="text_presentation_first_accueil">Membres</div>   
                              <br><br>
                              <a href="notre_equipe.php"><button class="button_presentation_first_accueil">Découvrez notre équipe</button></a>            
                        </div>
                        <div class="box_first_container_accueil">
                              <div class="number_presentation_accueil">15</div> 
                              <div class="text_presentation_first_accueil">Emissions</div>   
                              <br><br>
                              <a href="emissions.php"><button class="button_presentation_first_accueil">Ecoutez nos émissions</button></a>            
                        </div>
                        <div class="box_first_container_accueil">
                              <div class="number_presentation_accueil">3 ans</div> 
                              <div class="text_presentation_first_accueil">de Radio</div>   
                              <br><br>
                              <a href="la_lrs.php"><button class="button_presentation_first_accueil">Apprenez-en plus</button></a>            
                        </div>
                    </div>
                    <h1 class="title_bienvenue">Bienvenue !</h1>
                        <p class="text_bienvenue" >La Letot Radio Show vous souhaite la bienvenue sur son site. <br>
                            N'hésitez pas à découvrir notre site depuis notre menu !</p>
                            <br>
                    <div class="second_container_accueil">
                        <div class="box_second_container_accueil">
                                <div class="text_second_container">N'hésitez pas à découvrir nos actualités !</div>
                                <div class="paratext_second_container">Vous en apprendrez davantage sur ce que fait la LRS...</div>
                                <br><br>
                                <a href="actualites.php"><button disabled style="cursor: no-drop;" class="button_second_container">Découvrir nos actus</button></a>
                        </div>
                        <div class="box_second_container_accueil">
                                <div class="text_second_container">N'hésitez pas à écouter notre Emission Star</div>
                                <div class="paratext_second_container">Nous y parlons sûrement des sujets actuels</div>
                                <br><br>
                                <a href="emission_star.php"><button disabled style="cursor: no-drop;" class="button_second_container">Ecouter notre Emission Star</button></a>
                        </div>
                    </div>

                    <div class="third_container_accueil">
                            <h5 class="text_help_accueil" >Si vous avez une question, ou que vous rencontrez un problème, vous pouvez :</h5>
                        <div class="box_button_third_container">
                            <a href="nous_contacter.php"><button class="button_second_container">Nous contacter</button></a>
                          <span class="ou">ou</span>
                            <a href="page_indispo.php"><button disabled style="cursor: no-drop;" class="button_second_container">Consulter la page d'Aide</button></a>
                        </div>
                    </div>

            <br>
    </main>
	<div class="footer">
    <?php include('html/footer.html'); ?>
    </div>    
       </body>
</html>
