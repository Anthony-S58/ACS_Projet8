<?php

require_once('../bddconnect.php');

if(isset($_SESSION['admin'])){
    $user = $_SESSION['admin'];
}else{

};

?>
<?php

$id=$_GET['id'];


$sql = "SELECT * FROM annonces WHERE id = $id";
$query = $bdd->prepare($sql);
$query->execute(); 
$result = $query->fetchAll(PDO::FETCH_ASSOC); 

if ($_POST) {

    if(isset($_POST['titre']) && !empty($_POST['titre'])
    && isset($_POST['id_users']) && !empty($_POST['id_users'])
    && isset($_POST['description']) && !empty($_POST['description'])
    && isset($_POST['categorie']) && !empty($_POST['categorie'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['date']) && !empty($_POST['date'])
    && isset($_POST['lieu']) && !empty($_POST['lieu'])
    && isset($_FILES['image']) && !empty($_FILES['image'])) {
        if(isset($_FILES['image'])){
            $tmpName = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name'];

            move_uploaded_file($tmpName, '../uploads/'.$name);
        }

        $id = strip_tags($_GET['id']);
        $id_users= strip_tags($_POST ['id_users']);
        $titre = strip_tags($_POST['titre']);
        $description = strip_tags($_POST['description']);
        $categorie = strip_tags($_POST['categorie']);
        $prix = strip_tags($_POST['prix']);
        $date = strip_tags($_POST['date']);
        $lieu = strip_tags($_POST['lieu']);
        $image = strip_tags($_FILES['image']['name']);


    // update
    $sql = "UPDATE annonces SET id_users=:id_users, titre=:titre, description=:description, categorie=:categorie, prix=:prix, date=:date, lieu=:lieu, image=:image WHERE id=:id";

    $query = $bdd->prepare($sql);

        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':id_users', $id_users);
        $query->bindValue(':titre', $titre);
        $query->bindValue(':description', $description);
        $query->bindValue(':categorie', $categorie);
        $query->bindValue(':prix', $prix);
        $query->bindValue(':date', $date);
        $query->bindValue(':lieu', $lieu);
        $query->bindValue(':image', $image);
        $photo=$image;

        $query->execute();

    header("Location: mes_annonces.php");

}else {
    echo 'Veuillez remplir tous les champs';
}}
// récupération des données du projet
if(isset($_GET['id'])&& !empty($_GET['id'])) {

$id = strip_tags($_GET['id']);  //fonction qui permet d'enlever tous les tags html
// var_dump($id); //verification que l'on récupère bien l'ID

$sql = "SELECT * FROM annonces WHERE id=:id";  //requête préparée
$query = $bdd->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT);
$query->execute();

$projet = $query->fetch();
// on verifie si le projet existe
if(!$projet){
    header("Location: index.php");
}
}else {
header("Location: index.php");
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
    <title>BAD CORNER - Modif Annonce</title>
</head>

<body>

    <header>
        <a href="../index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2>Modifier une annonce</h2>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">

    <div class="photo_annonce"><img src="../uploads/<?=$projet['image']?>" alt=""></div>

        <input type="hidden" name="id_users" placeholder="id_users" value="<?php echo $projet['id_users']?>"><br>
     
        <input type="text" name ="titre" placeholder="Titre" value="<?php echo $projet['titre']?>"><br>
        <select name="categorie" id="catform">
            <option value=""> -- Catégories -- </option>
            <option value="Ordinateurs" <?php if($projet['categorie'] === "Ordinateurs"){echo "selected";}?>>Ordinateurs</option>
            <option value="Smartphone" <?php if($projet['categorie'] === "Smartphone"){echo "selected";}?>>Smartphone</option>
            <option value="Musique" <?php if($projet['categorie'] === "Musique"){echo "selected";}?>>Musique</option>
            <option value="Gaming" <?php if($projet['categorie'] === "Gaming"){echo "selected";}?>>Gaming</option>
        </select><br>
        <input type="date" name ="date" placeholder="Date" value="<?php echo $projet['date']?>"><br>
        <input type="text" name="lieu" placeholder="Lieu" value="<?php echo $projet['lieu']?>"><br>
        <input type="number" name ="prix" placeholder="Prix" value="<?php echo $projet['prix']?>"><br>
        <textarea type="text" name ="description" placeholder="Description" id="describ"><?php echo $projet['description']?></textarea><br>
        <input type="file" name="image" placeholder="file"><br><br>
        <!-- <input type="file" placeholder="Catégorie"><br><br> -->
        <input type="submit" value="Modifier" class="submit" onclick="return confirm('Voulez-vous modifer votre annonce?')">


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