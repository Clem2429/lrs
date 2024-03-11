<!DOCTYPE html>
<html lang="fr">
    <head>
<script src='js/global.js' async></script>
        <meta charset="utf-8"><link rel="icon" href="img/logo_lrs.jpeg"/>
        <title>Emissions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/Emissions.css">
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/Accueil.css">
    </head>
    <body class="Emissions">

        <header role="banner">
        <div class="title">Letot Radio Show</div>
        </header>
<?php include('html/nav.html'); ?>
    <div class="namepage">
        <h1>Emissions</h1>
    </div>
    <main>
<div class="btn">
      <span id="headerup">⇧</span>
    </div>
        <section>

            <div class="box_emission_star">
                <h3 class="title_box_emission_star">La Letot Radio Show vous propose d'écouter son Emission Star</h3>
                <p class="text_info_emission_star">**.** Minutes <strong class="b_sepa_elmts">|</strong> **/**/2024 <strong class="b_sepa_elmts">|</strong> Français</p>
                <a href="emission_star.php"><button class="button_listen_emission_star">Résister, S'évader</button></a>
            </div>

            <!-- Pour faire apparaitre le module "Nouveau", copier/coller ce code :
                <span style="display: yes;" class="text_new">Nouveau</span>
            entre <div class="box_new"> &ensp;</div>
            Pensez à vérifier que la mention "display" soit égale à "yes" et non à "no" et supprimez le "&ensp;".
             -->
            <!-- Box 2023-2024  -->

            <div class="container_emissions_presentation">
                <div class="box_presentation">
                    <div class="box_new"><span style="display: yes;" class="text_new">Nouveau</span></div>
                    <div class="section_logo section_2324"><img class="logo_lrs" src="img/logo_lrs.jpeg" alt="logo LRS"></div>
                    <p class="list_details_pages">
                        ↪ <strong>4</strong> Emissions disponibles <br>
                        ↪ <strong>00h 49m 27s</strong> d'émissions
                    </p>
                    <a href="annee_23-24.php"><button class="button_box_present_emission button_2324">Année 2023-2024</button></a>
                </div>

            <!-- Box 2022-2023 -->

            <div class="box_presentation">
                    <div class="box_new">&ensp;</div>
                    <div class="section_logo"><img class="logo_lrs" src="img/logo_lrs.jpeg" alt="logo LRS"></div>
                    <p class="list_details_pages list_2223">
                        ↪ <strong>11</strong> Emissions disponibles <br>
                        ↪ <strong>01h 30m 39s</strong> d'émissions
                    </p>
                    <a href="annee_22-23.php"><button class="button_box_present_emission button_2223">Année 2022-2023</button></a>
                </div>
                
            <!-- Box 2021-2022 -->
                
                <div class="box_presentation">
                <div class="box_new">&ensp;</div>
                    <div class="section_logo"><img class="logo_lrs" src="img/logo_lrs.jpeg" alt="logo LRS"></div>
                    <p class="list_details_pages list_2122">
                        ↪ <strong>0</strong> Emissions disponibles<sup class="case_info" title="Aucune émission n'est disponible pour le moment">?</sup> <br>
                        ↪ <strong>00h 00m 00s</strong> d'émissions
                    </p>
                    <a href="annee_21-22.php"><button disabled title="Aucune émission n'est actuellement disponible" class="button_box_present_emission button_2122">Année 2021-2022</button></a>
                </div>
            </div>



<br><br>


        </section>
    </main>
    <div class="footer">
<?php include('html/footer.html'); ?>   
       </body>
       </html>