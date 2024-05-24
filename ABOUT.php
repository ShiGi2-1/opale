<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="./CSS/STYLE.css">
    <link rel="stylesheet" href="./CSS/ABOUT.css">
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
                        <li> <a href="Boucles d'oreilles.php"> Boucles d'oreilles</a></li>
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
                <div class="menu-deroulant-apropos"><a href="./ABOUT.html">A propos</a></div>
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
        <div class="container-main">
            <div>
                <div class="about-text">
                    <h1>-Le Debut-</h1>
                    <p>
                        Notre histoire commence par une volonte de inspirer la confiance <br> et de répandre la joie 
                        à travers nos bijoux intemporels <br> et nos créations nostalgiques
                    </p>
                </div>
                <div>
                    <img src="./IMG/about/le debut.png" alt="le debut">
                </div>            
            </div>
            <div>
                <div class="about-text">
                    <h1>-Le Choix De Nous Materiaux-</h1>
                    <p>
                        Il est indisponsable pour nous de  cueillir les materiaux sur l'arbre avant que ca tombe.<br>
                        Et c’st pour cela qu’on choisi soigneusement nous materiaux<br> qui arrive dirrectement des mines.
                    </p>
                </div>
                <div>
                    <img src="./IMG/about/le choix.png" alt="le choix">
                </div>
            </div>
            <div>
                <div class="about-text">
                    <h1>-La Fabrication-</h1>
                    <p>
                        Une équipe de bijoutiers expérimentés et inspirants.<br>
                        Ils vous envoient des lettres d'amour et de joies sous la forme<br> de magnifique œuvres d'arts
                    </p>
                </div>
                <div>
                    <img src="./IMG/about/fabrication.png" alt="fabrication">
                </div>
            </div>
            <div>
                <div class="about-text">
                    <h1>-La Fin-</h1>
                    <p>
                        Comme toutes les histoires, il y a toujours une fin,<br> heureuse ou malheureuse.<br>
                        La fin de notre histoire n'est que le début.
                    </p>
                </div>
                <!-- <div>
                    <img src="../IMG/about/la fin (1).png" alt="la fin">
                </div> -->
            </div>
    
        </main>
        <!-- section main end -->
        </div>
        

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


</body>


</html>
