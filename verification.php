<?php
session_start();
if(isset($_POST['submit'])){
 if(isset($_POST['nom_users']) and !empty($_POST['nom_users'])){
  
   if(isset($_POST['mot_de_passe']) and !empty($_POST['mot_de_passe'])){

        require "bddconnect.php";

        $mot_de_passe =hash('sha256',$_POST['mot_de_passe']);

        $getdata = $bdd->prepare("SELECT id_users, nom_users FROM users WHERE nom_users=? and mot_de_passe = ?");
        $getdata->execute(array($_POST['nom_users'], $mot_de_passe));

        $rows = $getdata->rowCount();
        $row = $getdata->fetch(PDO::FETCH_ASSOC);
 
        if($rows==true){

            $_SESSION['admin']=$row['id_users'];
            
            header("Location:index.php");

        }else{
            $erreur = "Pseudo ou mot de passe inconnus";
        }

        }else{
            $erreur = "Veuillez saisir votre mot de passe";
        }

        }else{
            $erreur = "Veuillez saisir un pseudo valide";
        }    
}
