<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/connect.css">
    <title>BAD CORNER - Ajout Annonce</title>
</head>

<body>

    <header>
        <a href="../index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2>Ajouter une annonce</h2>
    </div>

    <form action="">


        <input type="text" placeholder="Titre"><br>
        <select name="categories" id="catform">
            <option value=""> -- Catégories -- </option>
            <option value="Ordinateurs">Ordinateurs</option>
            <option value="Smartphone">Smartphone</option>
            <option value="Musique">Musique</option>
            <option value="Gaming">Gaming</option>
        </select><br>
        <input type="date" placeholder="Date"><br>
        <input type="text" placeholder="Lieu"><br>
        <input type="number" placeholder="Prix"><br>
        <textarea type="text" placeholder="Description" id="describ"></textarea><br>
        <input type="file" placeholder="Catégorie"><br><br>

        <input type="submit" value="Ajouter" class="submit">


    </form>

    <br>
    <hr>
    
   
    <footer>
        <div class="menu">
            <h2>
                <a href="register.php">Inscription</a>
            </h2>
            <h2>
            <a href="connect.php">Connexion</a>

            </h2>
        </div>
    </footer>
</body>
</html>