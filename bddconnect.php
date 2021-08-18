<!-- Se connecter à MySQL avec PDO -->
<!-- Nous avons besoin de quatre renseignements : le nom de l'hôte, la base, le login et le mot de passe -->
<!-- rajout de  array PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION afin d'activer les erreurs-->

<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet8;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
