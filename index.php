<?php
session_start();
require_once('bddconnect.php');
if(isset($_SESSION['admin'])){
    $user = $_SESSION['admin'];
}else{

};

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
            <input type="search" name = "s" placeholder="Rechercher..." style="border-radius: 5px; background-color: #46237a; color:white;">
            <button type="submit" style="border-radius: 5px; background-color: #46237a;"><img src="IMG/loupe.png" width="20px" height="20px" alt=""></button>
        </form>
            
    </div>

    <div class="categories">
        <h2>Catégories</h2>
    </div>
    
    <div class="bulles">
        <div class="bulle1"><div class="content">
            <div class="text">
                <a href="categ_ordinateurs.php">
                Ordinateurs</a>
            </div>
        </div>
        </div>

        <div class="bulle2"><div class="content">
            <div class="text">
                <a href="categ_smartphone.php">
                Smartphone</a>
            </div>
        </div>
        </div>

        <div class="bulle3"><div class="content">
            <div class="text">
                <a href="categ_musique.php">
                Musique</a>
            </div>
        </div>
        </div>

        <div class="bulle4"><div class="content">
            <div class="text">
                <a href="categ_gaming.php">
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

                    <div class="photo_annonce"><a href="view_annonce.php?id=<?= $projet['id']?>"><img src="uploads/<?=$projet['image']?>" width="auto" height="auto" alt=""></a></div>
                    <div class="texte_annonce">
                        <h3><?= $projet['titre']?></h3>
                        <h4><?= $projet['prix']?> €</h4>
                        <h5><?= $projet['lieu']?></h5>
                    </div>

                </div>
                
            
                
                <?php
            }}else{
                $sql='SELECT * from annonces';
                $query = $bdd->prepare($sql);
                $query->execute(); 
                $result = $query->fetchAll(PDO::FETCH_ASSOC); 
                
                foreach ($result as $projet) {
                ?>
                
            <div class="cartes">

                <div class="photo_annonce"><a href="view_annonce.php?id=<?= $projet['id']?>"><img src="uploads/<?=$projet['image']?>" width="auto" height="auto" alt=""></a></div>
                <div class="texte_annonce">
                    <h3><?= $projet['titre']?></h3>
                    <h4><?= $projet['prix']?> €</h4>
                    <h5><?= $projet['lieu']?></h5>
                </div>

            </div>


            <?php
            }}
            ?>
            </div>

   <br><br><br><br>

   <hr>
  
   <?php
   if(isset($_SESSION['admin'])){
      include 'footer2.php';
      
       
    }else {
      include 'footer1.php';
    }

    ?>
       
</body>
</html>