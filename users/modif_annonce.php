<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/connect.css">
    <title>BAD CORNER - Modif Annonce</title>
</head>

<body>

    <header>
        <a href="../index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2>Modifier une annonce</h2>
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

        <input type="submit" value="Modifier" class="submit">


    </form>

    <br>
    <hr>
    
   
    <footer>
    <div class="menu">
            <div class="accueil_footer">
                <a href="../index.php">
                    <i class="fas fa-home"></i>
                    <p>Accueil</p>
                </a>
            </div>
            <div class="annonces_footer">
                <a href="mes_annonces.php">
                    <i class="fas fa-dollar-sign"></i>
                    <p>Vendre</p>
                </a>
            </div>
            <div class="favoris_footer">
                <a href="mes_favoris.php">
                    <i class="far fa-star"></i>
                    <p>Favoris</p>
                </a>
            </div>
            <div class="profil_footer">
                <a href="mon_profil.php">
                    <i class="fas fa-user-alt"></i>
                    <p>Profil</p>
                </a>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
</body>
</html>