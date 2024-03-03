<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <script src='js/global.js' async></script>
        <script src='js/timer.js' async></script>
        <title>Accueil</title>
        <link rel="stylesheet" href="css/Accueil.css">
        <link rel="stylesheet" href="css/global.css"><link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/timer.css">
    </head>
    <body class="Accueil">
        <header role="banner" id="header">
        <div class="title">Letot Radio Show</div>
        </header>
        <?php include('nav.html'); ?>
    <div class="namepage">
        <h1>Accueil</h1>
    </div>
    <main>
<div class="btn">
      <span id="headerup">⇧</span>
    </div>
        <section>
            <!-- style="background-image: url('img/Debarquement.jpg'); background-size: cover;" -->
       
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
            <img class="left" 
src="img/breveon390-11f25.jpeg" width="100" height="100" 
alt="Logo LRS : Casque gris sur enceinte bleue avec logo du collège Letot" title="Logo LRS" style="float:left;margin:0 10px 0 20px;" />
        <h2 style='font-family: times new roman'>Bienvenue !</h2>
        <p style="font-size: 1.3em; color: #0080ff;">     
            Bienvenue sur le site de la LRS !
        <br>Ce site est dédié à la Letot Radio Show, la webradio du collège Letot.
        <br>Sur ce site, tu pourras : 
        <ul>
            <li style="font-size: 1.3em; color: #0080ff; text-align: left; margin-left: 55px;">Ecouter toutes nos émissions de l'année en cours et de l'année précédente dans la rubrique
            <a href="Emissions.php" style="font-family: times new roman; color: #005a9c; font-style: italic;">Emissions</a>.</li>
            <li style="font-size: 1.3em; color: #0080ff; text-align: left; margin-left: 55px;">Lire toutes nos newsletter dans la rubrique 
            <a href="#" style="font-family: times new roman; color: #005a9c; font-style: italic;">Newsletter</a>.</p>
            <li style="font-size: 1.3em; color: #0080ff; text-align: left; margin-left: 55px;">Lire toute l'actualité nous concernant dans la rubrique 
            <a href="Actualités.php" style="font-family: times new roman; color: #005a9c; font-style: italic;">Actualités</a>.</p>
            <li style="font-size: 1.3em; color: #0080ff; text-align: left; margin-left: 55px;">Nous contacter grâce à ces pages : 
            <a href="Nous Contacter.php" style="font-family: times new roman; color: #005a9c; font-style: italic;">Nous Contacter</a> et <a href="Notre équipe.php" style="font-family: times new roman; color: #005a9c; font-style: italic;">Notre équipe</a>.</p>
        </ul>
        </p>
        </section>
        <br>
        <br>
        <br>
        <section>
            <h2  style='font-family: times new roman'>La LRS, c'est quoi ?</h2>
            <p>
                La LRS ou Letot Radio Show, c'est la Webradio du collège Charles Letot de Bayeux, elle a été créée en  2021 par <br>
                les membres de l'AS Reporter. Maintenant, c'est une vingtaine de membres qui, chaque mardi, partent à la recherche <br>
                de nouveaux reportages, qui, chaque semaine, réalisent des interviews plus spectaculaires les unes que les autres.
                <br>Après avoir enregistré dans une boîte en carton, nous le faisons maintenant dans... <a href="La LRS.php" style="color: #005a9c">Lire la suite</a>
            </p>
        </section>
        <br> <br> <br>
        <section>
            <h2 style='font-family: times new roman'>Notre équipe</h2>
            <p>À la base, c'est deux profs et un surveillant ainsi que quelques élèves qui animaient la LRS !
            <br> Maintenant, c'est plusieurs profs, ainsi qu'une vingtaine d'élèves qui animent la LRS.
            <br> Alors, qu'attendez-vous ? <a href="Notre équipe.php" style="color: #005a9c">Découvrez notre équipe !</a>
            </p>
            <br> <br> <br>
        </section>
    </main>
	<div class="footer">
    <?php include('footer.html'); ?>  </div>    
       </body>
</html>
