<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="./CSS/STYLE.css">
    <link rel="stylesheet" href="./CSS/article.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&family=Merienda:wght@300&family=Montserrat:wght@200&display=swap"
        >
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

<body>
    <!-- begin section: annonces barre -->
    <header>
        <?php
            session_start();
                // Vérifiez si l'utilisateur est connecté
                if (!isset($_SESSION['user_email'])) {
                // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
                header("Location: connect.php");
                exit;
            }
            // Récupérez l'e-mail de l'utilisateur à partir de la session
            $user_email = $_SESSION['user_email'];
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
                <div class="menu-deroulant-or"><a href="or.php"> Catalogues </a>
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
        <!-- section nav end -->
    <!-- section main start -->
    <main>
        <div class="clearfix"></div>
        <section class="container">
            <div class="row-left">
                <div class="row-1">
                    <div class="">
                        <img src="./IMG/green/collier-b (2).png" alt="">
                    </div>
                    <div class="">
                        <img src="./IMG/green/collier-f (2).jpg" alt="">
                    </div>
                </div>
                <div class="row-2">
                    <div class="">
                        <img src="./IMG/green/collier-b.png" alt="">
                    </div>
                    <div class="">
                        <img src="./IMG/green/collier-f.jpg" alt="">
                    </div>
                </div>
                <div class="row-3">
                    <div class="">
                        <img src="./IMG/green/pierre-roulee-malachite-01-500x500.jpg" alt="">
                    </div>
                    <div class="">
                    </div>
                </div>
            </div>
            <div class="container1">
                <div class="row-right">
                    <div>
                        <div class="nom-bijou">
                            <h1> Émeraude Élégance </h1>
                        </div>
                        <div class="prix-bijou">
                            <p> 300€ </p>
                        </div>
                        <div class="check-box">
                            <label>
                                <input type="checkbox" name="case_a_cocher">&nbsp;Cadeau 
                            </label>                          
                        </div>
                        <div>
                            <div class="buttom-nombre">
                                <div><label for="nombre"></label>
                                    <select class="nombre" id="nombre" name="nombre">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10+">10+</option>
                                    </select>  
                                </div>
                                <div class="button">
                                    <a href="ajouter_panier.php?id=9" class="id_product">
                                    <button type="button">Ajouter au Panier</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="onglets">
                        <div class="tab">
                            <button class="tablinks" onmouseover="openCity(event, 'discription')"> Discription</button>
                            <button class="tablinks" onmouseover="openCity(event, 'details')"> Details</button>
                            <button class="tablinks" onmouseover="openCity(event, 'soins')"> Soins</button>
                        </div>
                        <div id="discription" class="tabcontent">
                            <p style="text-align: center; margin-top: 30px; ">
                                Celui que vous ne saviez pas que vous cherchiez.
                                Ce collier a été créé dans un souci de polyvalence,
                                avec un mélange de deux chaînes lui donnant une touche contemporaine.
                            </p>             
                        </div>
                        <div id="details" class="tabcontent">
                            <p style="text-align: center; margin-top: 30px; ">
                                Matériau : plaqué or 18 carats avec pierre de verre émeraude.
                                Longueur : 480 mm - 560 mm réglable.
                            </p>
                        </div>
                        <div id="soins" class="tabcontent">
                            <p style="text-align: center; margin-top: 30px; ">
                                Tous nos bijoux plaqués or ou argent 18 carats doivent être conservés dans un endroit frais,
                                endroit sec et nettoyé soigneusement avec un chiffon doux non abrasif pour entretenir
                                briller.
                               Nos pièces contiennent également de véritables pierres de verre, de zircone cubique ou d'eau douce.
                                perles dont la couleur et les marques peuvent légèrement varier par rapport à la pierre présentée
                                dans l'image. Veuillez faire très attention pour éviter de tomber ou de heurter
                                quoi que ce soit, car il pourrait se briser. A conserver dans sa pochette ou sa boîte pour le conserver protégé.
                               Veuillez lire notre page Matériaux et entretien pour savoir comment en prendre soin au mieux de vos bijoux 33mm.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

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
            <p>© L’OPALE 2023 Termes et conditions Politique de confidentialite Politique de remboursement </p>
        </div>
    </footer>
    <!-- footer ends -->

    <script src="./JS/article.js"></script>
</body>

</html>