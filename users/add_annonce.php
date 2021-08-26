<?php

require_once('../bddconnect.php');

if ($_POST) {

    if(isset($_POST['titre']) && !empty($_POST['titre'])  
    && isset($_POST['id_users']) && !empty($_POST['id_users'])
    && isset($_POST['id_images']) && !empty($_POST['id_images'])
    && isset($_POST['description']) && !empty($_POST['description'])
    && isset($_POST['categorie']) && !empty($_POST['categorie'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['date']) && !empty($_POST['date'])
    && isset($_POST['lieu']) && !empty($_POST['lieu'])
    && isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        
        $id_users= strip_tags($_POST ['id_users']);
        $id_images= strip_tags($_POST ['id_images']);
        $titre = strip_tags($_POST['titre']);
        $description = strip_tags($_POST['description']);
        $categorie = strip_tags($_POST['categorie']);
        $prix = strip_tags($_POST['prix']);
        $date = strip_tags($_POST['date']);
        $lieu = strip_tags($_POST['lieu']);
        // on vérifie toujours l'extension et le type Mime
        $allowed = [
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "png" => "image/png"
        ];

        $filename = $_FILES['image']['name'];
        $filetype = $_FILES['image']['type'];
        $filesize = $_FILES['image']['size'];
        
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        // on vérifie l'absence de l'extension dans les clés de $allowed ou l'absence du type Mime dans les valeurs
        if(!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)){
            // ici soit l'extention soit le type est incorrect
            die("Erreur: format de fichier incorrect");

        }
        // ici le type est correct on limite à 1Mo
        if($filesize > 1024*1024){
            die("Fichier trop volumineux");
        }
        
        $sql = "INSERT INTO annonces(id_users, id_images, titre, description, categorie, prix, date, lieu) VALUES (:id_users, :id_images, :titre, :description, :categorie, :prix, :date, :lieu)";
        $query = $bdd->prepare($sql);
        
        $query->bindValue(':id_users', $id_users);
        $query->bindValue(':id_images', $id_images);
        $query->bindValue(':titre', $titre);
        $query->bindValue(':description', $description);
        $query->bindValue(':categorie', $categorie);
        $query->bindValue(':prix', $prix);
        $query->bindValue(':date', $date);
        $query->bindValue(':lieu', $lieu);
        
        $query->execute();
        
    }
    
}

?>

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
        
        <form action="" method="POST">
            
            <input type="text" name="id_users" placeholder="id_users" required><br>
    <input type="text" name="id_images" placeholder="id_images" required><br>
    
    <input type="text" name="titre" placeholder="Titre" required><br>
    <textarea type="text" name="description" placeholder="Description" id="describ" required></textarea><br>
    <select name="categorie" id="catform" required>
        <option value=""> -- Catégories -- </option>
        <option value="Ordinateurs">Ordinateurs</option>
        <option value="Smartphone">Smartphone</option>
        <option value="Musique">Musique</option>
        <option value="Gaming">Gaming</option>
    </select><br>
    <input type="number" name="prix" placeholder="Prix" required><br>
    <input type="date" name="date" placeholder="Date" required><br>
    <input type="text" name="lieu" placeholder="Lieu" required><br>
    
        <input type="file" name="file" placeholder="file"><br><br>
        
        <input type="submit" name="submit"value="Ajouter" class="submit">
    
    
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