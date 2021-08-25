<?php
session_start();
if(isset($_POST['nom_users']) && isset($_POST['mot_de_passe']))
{
    try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet8;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


    $nom_users = htmlspecialchars($_POST['nom_users']); 
    $password = htmlspecialchars($_POST['mot_de_passe']);
    $mot_de_passe = hash('sha256', $mot_de_passe);

    if($nom_users !== "" && $password !== "")
    {
        $sql = "SELECT count(*) FROM users where 
              nom_users = '".$nom_users."' and mot_de_passe = '".$password."' ";
       $query = $bdd->prepare($sql);
       $query->execute(); 
       $result = $query->fetchAll(PDO::FETCH_ASSOC); 
        $count = $result['count(*)'];
        if($count=1) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['nom_users'] = $nom_users;
           header('Location: index.php');
        }
        else
        {
           header('Location: connect.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: connect.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($bdd); // fermer la connexion
?>

