<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link rel="stylesheet" href="./CSS/STYLE.css">
    <link rel="stylesheet" href="./CSS/HOME.css">
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

        <!-- test -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- test -->
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
                <div class="menu-deroulant-or"><a href="or.php"> Catalogues  </a>
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
                        <li> <a href="#cameleon"> Caméléon</a></li>
                        <li> <a href="#lettre"> Lettre d'amour</a></li>
                        <li> <a href="#pierre"> La pierre noir</a></li>
                        <li> <a href="#green"> Green </a></li>
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
        
        
        <!-- section : Cameleon start -->
        <div id="cameleon">
            <a href="#">
                <img class="photo_top_cameleon" src="./IMG/Cameleon/d1.jpg" alt="x"></a>


            </div>
        <div class="text" >
            <h1>CAMÉLÉON</h1>
            <p>A la recherche d'un bijou qui s'adapte à tous les styles ? Bingo !!!</p>
        </div>
        <section>
            <div class="article">
    
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_cameleon_1.php">
                    <img src="./IMG/Cameleon/collier (1).jpg" alt="Colies-back" class="back">
                    <img src="./IMG/Cameleon/collier (3).webp" alt="Colies-front" class="front">
                    </a>

                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_cameleon_2.php">
                    <img src="./IMG/Cameleon/d0b.png" alt="Anneau-back" class="back">
                    <img src="./IMG/Cameleon/d0f.png" alt="Anneau-front" class="front">
                </a>  
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_cameleon_3.php">
                    <img src="./IMG/Cameleon/d6b.png" alt="Bracelets-back" class="back">
                    <img src="./IMG/Cameleon/d6f.png" alt="Bracelets-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_cameleon_4.php">
                    <img src="./IMG/Cameleon/d16b.png" alt="Boucles-back" class="back">
                    <img src="./IMG/Cameleon/d16f.png" alt="Boucles-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
        </section>
        <!-- section : Cameleon end -->


        
        <!-- section : pierre noir begin -->
        <div id="pierre" class="div_top">
            <a href="#">
                <img class="photo_top_pierrenoir" src="./IMG/La pierre noir/p0.png" alt="x">
            </a>
            <!-- <p class="pierre">PIERRE<span class="noir">NOIR</span> </p> -->
            <p class="pierre">Black<span class="noir">stone</span> </p>
        </div>
        <div class="text">
            <h1>LA PIERRE NOIR</h1>
            <p>A la recherche d'un bijou qui s'adapte à tous les styles ? Bingo !!!</p>
        </div>
        <section>
            <div class="article">
    
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_pierrenoir_1.php">
                    <img src="./IMG/La pierre noir/p6b.png" alt="Colies-back" class="back">
                    <img src="./IMG/La pierre noir/p6f.png" alt="Colies-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_pierrenoir_2.php">
                    <img src="./IMG/La pierre noir/p1b.png" alt="Anneau-back" class="back">
                    <img src="./IMG/La pierre noir/p1f.png" alt="Anneau-front" class="front">
                </a>     
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
    
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_pierrenoir_3.php">
                    <img src="./IMG/La pierre noir/p4b.png" alt="Bracelets-back" class="back">
                    <img src="./IMG/La pierre noir/p4f.png" alt="Bracelets-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_pierrenoir_4.php">
                    <img src="./IMG/La pierre noir/p3b.png" alt="Boucles-back" class="back">
                    <img src="./IMG/La pierre noir/p3f.png" alt="Boucles-front" class="front">
                </a> 
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
    
    
        </section>
        <!-- section : pierre noir end -->

        
        <!-- section : green start -->
        <div id="green">
            <a href="#">
                <img class="photo_top_green" src="./IMG/green/0000.png" alt="x"></a>
            <!-- <p class="a-croquer">À CRO <span class="quer">QUER</span></p> -->

        </div>
        <div class="text">
            <h1>GREEN</h1>
            <p>A la recherche d'un bijou qui s'adapte à tous les styles ? Bingo !!!</p>
        </div>

        <section>
            <div class="article">
    
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_green_1.php">
                    <img src="./IMG/green/350 . 426/collier-b (2).jpg" alt="Colies-back" class="back">
                    <img src="./IMG/green/350 . 426/collier-f (2).jpg" alt="Colies-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_green_2.php">
                    <img src="./IMG/green/350 . 426/bague-b.png" alt="Anneau-back" class="back">
                    <img src="./IMG/green/350 . 426/bague-f.jpg" alt="Anneau-front" class="front">
                </a>        
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
    
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_green_3.php">
                    <img src="./IMG/green/350 . 426/bracelet-b (2).jpg" alt="Bracelets-back" class="back">
                    <img src="./IMG/green/350 . 426/bracelet-f.jpg" alt="Bracelets-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>100$</p></div>
                    <a href="article_green_4.php">
                    <img src="./IMG//green/350 . 426/boucle-b.jpg" alt="Boucles-back" class="back">
                    <img src="./IMG//green/350 . 426/boucle-f.jpg" alt="Boucles-front" class="front">
                </a>     
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
    
    
        </section>

        
        
        <!-- section : Lettre d'amour begin -->
        <div id="lettre" class="div_top">
            <a href="#">
                <img class="photo_top_lettredamour" src="./IMG/Lettre d'amour/model2.png" alt="x">
            </a>
        </div>
        <div class="text">
            <h1>LETTRE D'AMOUR</h1>
            <p>A la recherche d'un bijou qui s'adapte à tous les styles ? Bingo !!!</p>
        </div>
        <section>
            <div class="article">
    
                <div class="image_article">
                    <div class="prix"><p>120€</p></div>
                    <a href="article_lettre_1.php">
                    <img src="./IMG/Lettre d'amour/collier22 (1).webp" alt="Colies-back" class="back">
                    <img src="./IMG/Lettre d'amour/collier11webp (1).webp" alt="Colies-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>80€</p></div>
                    <a href="article_lettre_2.php">
                    <img src="./IMG/Lettre d'amour/bague_b.jpg" alt="Anneau-back" class="back">
                    <img src="./IMG/Lettre d'amour/bague_f.jpg" alt="Anneau-front" class="front">
                </a>          
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
    
                <div class="image_article">
                    <div class="prix"><p>60€</p></div>
                    <a href="article_lettre_3.php">
                    <img src="./IMG/Lettre d'amour/bracelet44 - Copie.jpg" alt="Bracelets-back" class="back">
                    <img src="./IMG/Lettre d'amour/bracelet22 - Copie.jpg" alt="Bracelets-front" class="front">
                </a>
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
                    </div>
    
                </div>
            </div>
            <div class="article">
                <div class="image_article">
                    <div class="prix"><p>80€</p></div>
                    <a href="article_lettre_4.php">
                    <img src="./IMG/Lettre d'amour/55.webp" alt="Boucles-back" class="back">
                    <img src="./IMG/Lettre d'amour/boucle22 (1).webp" alt="Boucles-front" class="front">
                </a>        
                </div>
                <div class="button_article">
                    <div class="button_panier">
                        <button type="submit">Ajouter au Panier</button>
                    </div>
                    <div class="button_favori">
                        <button type="submit"> ♥ </button>
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
    <script src="./JS/style.js"> </script>
</body>


</html>