<!DOCTYPE html>
<html lang="fr">
    <head>
<script src='js/global.js' async></script>
        <meta charset="utf-8">
        <title>Emissions</title>
        <link rel="stylesheet" href="css/Emissions.css">
        <link rel="stylesheet" href="css/global.css"><link rel="stylesheet" href="css/footer.css">
    </head>
    <body class="Emissions">

        <header role="banner">
        <div class="title">Letot Radio Show</div>
        </header>
<?php include('nav.html'); ?>
    <div class="namepage">
        <h1>Emissions</h1>
    </div>
    <main>
<div class="btn">
      <span id="headerup">⇧</span>
    </div>
        <br> <br> <br>
        <section>
        <table class="ESTABLE">
            <tr>
                <th class="THES"><h2>L'Emission Star</h2></th>
            </tr>
            <tr>
            <td class="TDES">De temps en temps, la LRS vous propose <br> son Emission Star ! <br> Pour écouter celle du moment, <a href="Emission Star.php" style="color: yellow">cliquez ici !</a><br></td>
        </table>
        </section>
        <br> <br> <br>
        <section>
                <table class="TAENV">
                    <caption><h2 style="color: #005a9c
                    
  
                    ">Ecouter nos émissions</h2></caption>
                <br>
                    <tr>
                        <th>Emissions par année</th>
                        <th>Statut</th>
                    </tr>
                    <tr>
                        <td class="TDTEC"><a href="ANA.php" style="color:red" title="Aucun contenu disponible pour le moment - 21/22">Année 2021-2022</a> </td>
                        <td class="TDTEC" style="color: red;">Aucune émission disponible pour le moment...</td>
                    </tr>
                    <tr>
                        <td class="TDTEC"><a href="Année 2022-2023.php" style="color:#005a9c" title="2 émissions disponibles - 22/23">Année 2022-2023</a> </td>
                        <td class="TDTEC" style="color: green;">11 émissions disponibles</td>
                    </tr>
                    <tr>
                        <td class="TDTEC"><a href="Année 2023-2024.php" style="color:#005a9c" title="2 émissions disponibles - 23/24">Année 2023-2024</a> </td>
                        <td class="TDTEC" style="color: green;">2 émissions disponibles</td>
                    </tr>
            </table>
            <br> <br>
        </section>
    </main>
    <div class="footer">
<?php include('footer.html'); ?>   
       </body>
       </html>