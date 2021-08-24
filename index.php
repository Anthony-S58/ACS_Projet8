<?php

require_once('bddconnect.php');

// $sql='SELECT * from annonces';
// $query = $bdd->prepare($sql);
// $query->execute(); 
// $result = $query->fetchAll(PDO::FETCH_ASSOC); 

// var_dump($result);
?>



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
<br><br>
    <div class="accueil">
                <form method="GET">
                    <input type="search" name = "s" placeholder="Rechercher..." style="border-radius: 5px;">
                    <button type="submit"><img src="IMG/loupe.png" width="10px" height="10px" alt=""></button>
                </form>
            
            </div>

    <div class="categories">
        <h2>Catégories</h2>
    </div>
    
   <div class="bulles">
   <div class="bulle1"><div class="content">
   
           <div class="text">
           <a href="categories/categ_ordinateurs.php">
           Ordinateurs</a>
           </div>
       </div>
    </div>
       <div class="bulle2"><div class="content">
           <div class="text">
           <a href="categories/categ_smartphone.php">
                Smartphone</a>
           </div>
       </div>
    </div>
       <div class="bulle3"><div class="content">
           <div class="text">
           <a href="categories/categ_musique.php">
                Musique</a>
           </div>
       </div>
    </div>
       <div class="bulle4"><div class="content">
           <div class="text">
           <a href="categories/categ_gaming.php">
                Gaming</a>
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
            <?php
            
            if (isset($_GET['s'])){
                $s= htmlspecialchars($_GET['s']);
                $annonces = $bdd->query('SELECT * FROM annonces Where titre LIKE "%'.$s.'%" ORDER BY id DESC');
            
            
                foreach ($annonces as $projet) {
                    ?>

                <div class="cartes">

                    <div class="photo_annonce"><a href="users/view_annonce.php?id=<?= $projet['id']?>"><img src="IMG/Gaming.jpg" alt=""></a></div>
                    <div class="texte_annonce">
                        <h3><?= $projet['titre']?></h3>
                        <h4><?= $projet['prix']?> €</h4>
                        <h5><?= $projet['lieu']?></h5>
                    </div>

                </div>
                
            
                
                <?php
            }}else {
                $sql='SELECT * from annonces';
                $query = $bdd->prepare($sql);
                $query->execute(); 
                $result = $query->fetchAll(PDO::FETCH_ASSOC); 
                
                foreach ($result as $projet) {
                    ?>
                    <div class="annonces">
                    </div>

            <div class="cartes">

                <div class="photo_annonce"><a href="users/view_annonce.php?id=<?= $projet['id']?>"><img src="IMG/Gaming.jpg" alt=""></a></div>
                <div class="texte_annonce">
                    <h3><?= $projet['titre']?></h3>
                    <h4><?= $projet['prix']?> €</h4>
                    <h5><?= $projet['lieu']?></h5>
                </div>

            </div>


        </div>
        <?php
            }}
            ?>

    <hr>
    <div class="divers">
    <a href="users/modif_annonce.php">modif annonce</a><br>
    <a href="users/add_annonce.php">ajout annonce</a><br>
    <a href="users/mes_annonces.php">mes annonces</a><br>
    <a href="users/mes_favoris.php">mes favoris</a><br>
    <a href="users/mon_profil.php">mon profil</a><br>
    <a href="users/view_annonce.php">view</a>


<br><br><br><br><br>

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