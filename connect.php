<?php
require_once 'bddconnect.php';
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
    <title>BAD CORNER - Connexion</title>
</head>

<body>

    <header>
        <a href="index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2>Connexion</h2>
    </div>

        <form action="verification.php" method="POST">


            
            <input type="text" name="nom_users" placeholder="Pseudo">
            <input type="password" name="mot_de_passe" placeholder="Mot de passe"><br>
            <input type="submit" value="Se connecter" class="submit">

            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>
    
  
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