<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/connect.css">
    <link rel="stylesheet" href="../CSS/users.css">

    <title>BAD CORNER - Mes Favoris</title>
</head>

<body>

    <header>
        <a href="../index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2>Mes Favoris</h2>
    </div>

    <hr>

    <div class="annonces">
        <div class="photo_annonce"><img src="../IMG/Gaming.jpg" alt=""></div>
        <div class="descript">
            <h2>Manette Xbox</h2><br>
            <h2>60€</h2><br>
            <h2>Nevers</h2><br>
        </div>
        <div class="fav">
            <img src="../IMG/star.png" height="50px" width="50px" id="star" value ="0" alt="">
        </div>

    </div>

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

    <script src="../JS/fav.js"></script>
    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
</body>
</html>