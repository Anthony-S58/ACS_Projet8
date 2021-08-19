<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <title>BAD CORNER - Accueil</title>
</head>
<body>
    <header>
        <a href="index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2>Catégories</h2>
    </div>
    
   <div class="bulles">
       <div class="bulle1"><div class="content">
           <div class="text">
               Ordinateurs
           </div>
       </div>
    </div>
       <div class="bulle2"><div class="content">
           <div class="text">
                Smartphone
           </div>
       </div>
    </div>
       <div class="bulle3"><div class="content">
           <div class="text">
                Musique
           </div>
       </div>
    </div>
       <div class="bulle4"><div class="content">
           <div class="text">
                Gaming
           </div>
       </div>
    </div>
   </div>
   <hr>

   <!-- Annonces -->

   <div class="titre_annonces">      
        <h2>Dernières Annonces</h2>
    </div>

    <div class="annonces">
        <div class="cartes">

            <div class="photo_annonce"><img src="IMG/Gaming.jpg" alt=""></div>
            <div class="texte_annonce">
                <h3>Manette Xbox</h3>
                <h4>60€</h4>
                <h5>Nevers</h5>
            </div>

        </div>
        
    
    </div>
    <hr>
    <div class="divers">
    <a href="users/modif_annonce.php">modif annonce</a><br>
    <a href="users/add_annonce.php">ajout annonce</a><br>
    <a href="users/mes_annonces.php">mes annonces</a>

    </div>

   <hr>
    <footer>
        <div class="menu">
            <h2>
                <a href="connect.php">Connexion</a>
                
            </h2>
            <h2>
                <a href="register.php">Inscription</a>
            </h2>
        </div>
        <hr>
    </footer>
</body>
</html>