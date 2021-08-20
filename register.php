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

    <form action="">


        <input type="text" placeholder="Pseudo">
        <input type="text" placeholder="Adresse mail">
        <input type="password" placeholder="Mot de passe" id="password">
        <input type="password" placeholder="Confirmez votre mot de passe" id="check-password"><br>
        <span id="message"></span><br>
        <br>
        <input type="submit" value="S'inscrire" class="submit">


    </form>
    
   <script src="JS/register.js"></script>
    <footer>
        <div class="menu">
            <h2>
                <a href="../connect.php">Connexion</a>
                
            </h2>
            <h2>
                <a href="../register.php">Inscription</a>
            </h2>
        </div>
    </footer>
</body>
</html>