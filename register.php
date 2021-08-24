<?php

require_once('bddconnect.php');



if ($_POST) {
    $nom_users = strip_tags($_POST['nom_users']);      
    $mail= strip_tags($_POST ['mail']);
    $mot_de_passe= strip_tags($_POST ['mot_de_passe']);

    $check = $bdd->prepare('SELECT mail FROM users WHERE mail = ?');
    $check->execute(array($mail));
    $data = $check->fetch();
    $row = $check->rowCount();
    if($row == 0){

        if(isset($_POST['nom_users']) && !empty($_POST['nom_users'])
        && isset($_POST['mail']) && !empty($_POST['mail'])
        && isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe'])
        && ($_POST['mot_de_passe'] === $_POST['check-password'])){
        
        $mot_de_passe = hash('sha256', $mot_de_passe);
        
        $sql = "INSERT INTO users(nom_users, mail, mot_de_passe) VALUES  (:nom_users,:mail, :mot_de_passe)";
        $query = $bdd->prepare($sql);

        $query->bindValue(':nom_users', $nom_users);
        $query->bindValue(':mail', $mail);
        $query->bindValue(':mot_de_passe', $mot_de_passe);

        $query->execute();

    }}else {header('location:register.php');
    }
 }

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="CSS/connect.css">
    <title>BAD CORNER - Inscription</title>
</head>

<body>

    <header>
        <a href="index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2>Inscription</h2>
    </div>

    <form action="" method="POST">


        <input type="text" name="nom_users" placeholder="Pseudo">
        <input type="text" name="mail" placeholder="Adresse mail">
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" id="password">
        <input type="password" name="check-password" placeholder="Confirmez votre mot de passe" id="check-password"><br>
        <span id="message"></span><br>
        <br>
        <input type="submit" value="S'inscrire" class="submit">


    </form>
    
   <script src="JS/register.js"></script>
    <footer>
        <div class="menu">
            <h2>
                <a href="connect.php">Connexion</a>
                
            </h2>
            <h2>
                <a href="register.php">Inscription</a>
            </h2>
        </div>
    </footer>
</body>
</html>