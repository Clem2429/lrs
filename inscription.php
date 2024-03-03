<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'root', 'root');
    if(isset($_POST['envoi'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $mdp = sha1($_POST['mdp']);
                $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
                $insertUser->execute(array($pseudo, $mdp));

                $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
                $recuperUser->execute(array($pseudo, $mdp));
                if($recupUser->rowCount() > 0){

                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recupUser->fetch()['id'];

                }

                echo $_SESSION['id'];
        }else {
            echo "Veuillez compléter tous les champs";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form method="POST" action="" align="center">

            <input type="text" name="pseudo" >
            <br>
            <input type="password" name="mdp" autocomplete="off">
            <br>
            <br>
            <input type="submit" name="envoi" autocomplete="off">

        </form>

    </body>
</html>