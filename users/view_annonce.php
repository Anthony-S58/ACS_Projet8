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

    <title>BAD CORNER - Mes Annonces</title>
</head>

<body>

    <header>
        <a href="../index.php"><h1>BAD CORNER</h1></a>
    </header>

    <div class="categories">
        <h2 id="view_titre">TITRE ANNONCE</h2>
    </div>
    <hr>

    <div class="img_view">
        <img src="../IMG/manette.jpg" width="500px" height="300px" alt="">
    </div>
    <div class="prix_view">
        <h2>Prix<br>60 €</h2>
    </div>
    <hr>
    <div class="userfav_view">
        <div class="user_view">
            <img src="../IMG/profil.jpg" width="30px" height="30px" alt="">
            <h3>TIMERS58</h3>
        </div>
        <div class="fav_view">
            <h3>Favoris</h3>
            <img src="../IMG/star.png" width="30px" id="star" height="30px" alt="">
        </div>
    </div>
    <hr>
    <div class="userinfo_view">
        <div class="cat_view">
            <h3>CATEGORIE</h3><br>
            <h4>Gaming</h4>
        </div>
        <div class="date_view">
            <h3>DATE</h3><br>
            <h4>19/08/2021</h4>
        </div> 
        <div class="lieu_view">
            <h3>LIEU</h3><br>
            <h4>Nevers</h4>
        </div>
    </div>
    <hr>
    <div class="description_view">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet obcaecati, eligendi perferendis in adipisci beatae illum illo dignissimos deserunt quam id ea quas repellat architecto quaerat provident sint, ipsa reiciendis.
        Rem in laboriosam minus quaerat laborum reiciendis quia! Quia odio eveniet cupiditate nemo reprehenderit facere ipsa sequi. Laborum velit ut sequi quae quis, soluta exercitationem voluptates delectus ex officia repellendus!
        Veniam voluptates dolore nam ipsa maxime! Rem, quos, modi aperiam dolorem error non hic minus commodi exercitationem culpa nostrum nobis, delectus quia inventore molestiae asperiores accusamus quam aliquam odio tempore!
        Odit ipsam, ipsum cupiditate voluptates tempore totam error adipisci ducimus voluptate? Consequatur totam corporis ipsam quis deserunt velit error, sit unde est rem mollitia nostrum rerum nemo dolor possimus numquam?
        Repellat tempora ad perferendis soluta quia, in dolorem quibusdam! Autem dolores eligendi quibusdam porro natus impedit ut similique, laboriosam doloremque atque sit ab ducimus nobis aperiam repellendus? Est, sed maxime.</p>
    </div>

    <hr>
    <div id="form_contact">
        <form action="">


                
                <input type="text" placeholder="Adresse mail">
                <input type="text" placeholder="Objet">
                <textarea type="text" placeholder="Message" id="describ"></textarea><br>

                <input type="submit" value="Envoyer" id="contact_submit">


            </form>
        </div>

    <a><button id="contacter">Contacter le vendeur</button></a>
<br><br><br><br><br>

   
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


    <script src="../JS/view.js"></script>
    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
</body>
</html>