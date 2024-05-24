<?php 
session_start();
include_once "con_dbb.php";

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_email'])) {
    // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connect.php");
    exit;
}

// Récupérez l'e-mail de l'utilisateur à partir de la session
$user_email = $_SESSION['user_email'];

// Supprimer les produits
// Si la variable del existe
if (isset($_GET['del'])) {
    $id_del = $_GET['del'];
    // Suppression
    unset($_SESSION['panier'][$id_del]);
}

// Traiter la commande
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['commander'])) {
    $date_achat = date("Y-m-d H:i:s");
    $panier = $_SESSION['panier'];

    // Insérer les informations dans la table commandes
    $query = "INSERT INTO commandes (email_clt, dateachat) VALUES ('$user_email', '$date_achat')";
    if (mysqli_query($con, $query)) {
        // Vider le panier après la commande
        unset($_SESSION['panier']);
        echo "Commande passée avec succès!";
    } else {
        echo "Erreur: " . mysqli_error($con);
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="./CSS/STYLE.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&family=Merienda:wght@300&family=Montserrat:wght@200&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Oooh+Baby&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap" rel="stylesheet">
</head>
<!-- begin section: annonces barre -->
<header>
    <?php
    echo $user_email;
    ?>
    <button class="btn_deco">Déconnecter</button>
</header>
<!-- end section: annonces barre -->
<!-- <header> -->
<Nav>
    <!-- <div class="menu-deroulant-container"> -->
    <!-- begin section: logo -->
    <div class="logo"> <a href="HOME.php"><img src="./IMG/logos/logo bisque.png" alt="l'opale"></a> </div>
    <!-- <div class="logo"> <a href="../HTML/HOME.html"> L’OPALE</a> </div> -->
    <!-- end section: logo -->
    <!-- brgin section: drop down bar -->
    <!-- ▼ section drope down bottons -->
    <div class="ongles ">
        <!--  ▼ section drop down barre, botton "or" -->
        <div class="menu-deroulant-or"><a href="or.php"> Catalogues  </a>
            <ul class="sous-menu">
                <li> <a href="or.php">Tous</a></li>
                <li> <a href="Colies.php"> Collies</a></li>
                <li> <a href="Anneaux.php">Anneaux</a></li>
                <li class="sous-menu-or-boucles-doreilles"> <a href="Boucles d'oreilles.php"> Boucles d'oreilles</a></li>
                <li> <a href="Bracelets.php"> Bracelets</a></li>
            </ul>
        </div>
        <!--  ▼ section drop down barre, botton "Collections" -->
        <div class="menu-deroulant-collections"><a href="HOME.php">Collections</a>
            <ul class="sous-menu">
                <!-- <li> <a href="#"> A croquer</a></li>  -->
                <li> <a href="HOME.php#cameleon"> Caméléon</a></li>
                <li> <a href="HOME.php#lettre"> Lettre d'amour</a></li>
                <li> <a href="HOME.php#pierre"> La pierre noir</a></li>
                <li> <a href="HOME.php#green"> Green </a></li>
            </ul>
        </div>
        <!--  ▼ section drop down barre, botton "A propos" -->
        <div class="menu-deroulant-apropos"><a href="ABOUT.php">A propos</a></div>
    </div>
    <!-- end section: drop down bar -->
    <div class="icones">
        <div class="search">
            <input type="search" placeholder="Rechercher">
        </div>
        <div class="recherche"> <a href="#"> <img src="./IMG/logos/recherche.png" alt="recherche"> </a></div>
        <div class="profil"> <a href="connect.php"> <img src="./IMG/logos/profil.png" alt="profil"> </a> </div>
        <a href="PANIER.php"> <img src="./IMG/logos/panier.png" alt="panier"></a>
    </div>
</Nav>
<body class="panier">
    <a href="or.php" class="link">Boutique</a>
    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th></th>
            </tr>
            <?php 
            $total = 0;
            // Liste des produits
            // Récupérer les clés du tableau session
            $ids = array_keys($_SESSION['panier']);
            // S'il n'y a aucune clé dans le tableau
            if (empty($ids)) {
                echo "Votre panier est vide";
            } else {
                // Si oui
                $products = mysqli_query($con, "SELECT * FROM produit WHERE id_produit IN (".implode(',', $ids).")");

                // Liste des produits avec une boucle foreach
                foreach ($products as $product):
                    // Calculer le total (prix unitaire * quantité)
                    // et additionner chaque résultat à chaque tour de boucle
                    $total = $total + $product['prix_produit'] * $_SESSION['panier'][$product['id_produit']];
                ?>
                <tr>
                    <td><img class="panier-image" src="IMG/image_catalogue/<?=$product['img2']?>"></td>
                    <td><?=$product['nom_produit']?></td>
                    <td><?=$product['prix_produit']?>€</td>
                    <td><?=$_SESSION['panier'][$product['id_produit']] ?></td>
                    <td><a href="panier.php?del=<?=$product['id_produit']?>"><img class="panier-image-delete" src="delete.png"></a></td>
                </tr>
            <?php endforeach; } ?>
            <tr class="total">
                <th>Total : <?=$total?>€</th>
            </tr>
        </table>
        <!-- Formulaire pour le bouton Commander -->
        <form method="post" action="">
            <button type="submit" name="commander">Commander</button>
        </form>
    </section>
    <style>
    /* Styles pour centrer uniquement le contenu de la section principale */
    /* Styles pour aligner les éléments de la table */
    body section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
        margin: 70px;
    }
    .logo{
        height: 72px;
    }
    .sous-menu {
        margin-top: 30px;
    }
    .panier table {
        width: 70%;
        border-collapse: collapse;
    }
    .panier th, .panier td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .panier th {
        background-color: #8DDBC7;
    }
    .panier tr:hover {
        background-color: #F6D2A8;
    }
    .panier-image {
        max-width: 50px; /* Ajustez la taille des images si nécessaire */
        height: auto;
    }
    .panier-image-delete {
        max-width: 30px; /* Ajustez la taille des images si nécessaire */
        height: auto;
    }
    .panier .total {
        width: 50px;
        font-weight: bold;
        font-size: 20px;
        display: flex;
        justify-content: space-between;
    }
    button {
        height: 50px;
        width: 300px;
        background-color: #f6d2a8;
        margin-top: 10px;
    }
    </style>
</body>
<!-- section main end -->
<!-- footer begin -->
<footer>
    <div class="container_footer">
        <div class="footer_left">
            <ul>
                <li>Aider</li>
                <li>A propos de nous</li>
                <li>Expidition & retours</li>
                <li>FAQ</li>
                <li>Materiaux & entretien</li>
                <li>Nous contacter</li>
                <li>Suivre votre commande</li>
            </ul>
        </div>
        <div class="footer_right">
            <div class="a-propos_footer">
                <h1>À propos de nous</h1>
                <p>L'OPALE est une marque de bijoux créée pour les anticonformistes et inspirée par
                    la nostalgie. Notre mission est d'inspirer la confiance et de répandre la joie
                    à travers nos bijoux intemporels et nos créations nostalgiques.
                </p>
            </div>
            <div class="logo_footer">
                <div class="logo-whatsapp">
                    <img src="./IMG/logos/whatsapp.png" alt=""></img>
                </div>
                <div class="logo-Facebook">
                    <img src="./IMG/logos//facebook.png" alt=""></img>
                </div>
                <div class="logo-Twiter">
                    <img src="./IMG/logos/twitter.png" alt=""></img>
                </div>
                <div class="logo-Linkendin">
                    <img src="./IMG/logos/linkedin.png" alt=""></img>
                </div>
                <div class="logo-Telegrame">
                    <img src="./IMG/logos/telegram.png" alt=""></img>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_end">
        <p>© L’OPALE  2023   Termes et conditions   Politique de confidentialite   Politique de remboursement </p>
    </div>
</footer>
<!-- footer ends -->
</html>
