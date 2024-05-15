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
        <p> Livraison internationale gratuite de plus de 100 $</p>
        <p> Livraison gratuite en France à partir de 50 $</p>
    </header>
    <!-- end section: annonces barre -->
    <!-- <header> -->
        <Nav>

            <!-- <div class="menu-deroulant-container"> -->
            <!-- begin section: logo -->
            <div class="logo"> <a href="./HOME.html"><img src="./IMG/logos/logo bisque.png" alt="l'opale"></a> </div>
            <!-- <div class="logo"> <a href="../HTML/HOME.html"> L’OPALE</a> </div> -->
            <!-- end section: logo -->
            <!-- brgin section: drop down bar -->
            <!-- ▼ section drope down bottons -->
            <div class="ongles ">
                <!--  ▼ section drop down barre, botton "or" -->
                <div class="menu-deroulant-or"><a href="./or.html"> Catalogues </a>
                    <ul class="sous-menu">
                        <li> <a href="./or.html">Tous</a></li>
                        <li> <a href="./Colies.html"> Collies</a></li>
                        <li> <a href="./Anneaux.html">Anneaux</a></li>
                        <li class="sous-menu-or-boucles-doreilles"> <a href="./Boucles d'oreilles.html"> Boucles d'oreilles</a></li>
                        <li> <a href="./Bracelets.html"> Bracelets</a></li>
                    </ul>
                </div>
                <!--  ▼ section drop down barre, botton "Collections" -->
                <div class="menu-deroulant-collections"><a href="./HOME.html">Collections</a>
                    <ul class="sous-menu">
                        <!-- <li> <a href="#"> A croquer</a></li>  -->
                        <li> <a href="./HOME.html#cameleon"> Caméléon</a></li>
                        <li> <a href="./HOME.html#lettre"> Lettre d'amour</a></li>
                        <li> <a href="./HOME.html#pierre"> La pierre noir</a></li>
                        <li> <a href="./HOME.html#green"> Green </a></li>
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
                <div class="profil"> <a href="./connect.html"> <img src="./IMG/logos/profil.png" alt="profil"> </a> </div>
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
                        <img src="./IMG/La pierre noir/p6b.png" alt="">
                    </div>
                    <div class="">
                        <img src="./IMG/La pierre noir/p6f.png" alt="">
                    </div>
                </div>

                <div class="row-3">
                    <div class="">
                        <img src="./IMG/La pierre noir/p7b.png" alt="">
                    </div>
                    <div class="">
                        <img src="./IMG/La pierre noir/p7c.png" alt="">
                    </div>
                </div>

                <div class="row-2">
                    <div class="">
                        <img src="./IMG/La pierre noir/0000000.png" alt="">
                    </div>
                    <div class="">
                        <img src="#" alt="">
                    </div>
                </div>

            </div>
            <div class="container1">
                <div class="row-right">
                    <div>
                        <div class="nom-bijou">
                            <h1> Élégance Nocturne </h1>
                        </div>
                        <div class="prix-bijou">
                            <p> 350€  </p>
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
                                    <a href="ajouter_panier.php?id=5" class="id_product">
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
                                Un collier délicat en or avec un pendentif rectangulaire orné d'une pierre noire. 
                                Le design épuré et élégant en fait un choix parfait pour une tenue de soirée ou 
                                pour ajouter une touche sophistiquée à une tenue décontractée.
                            </p>             
                            
                        </div>
                        <div id="details" class="tabcontent">


                            <p style="text-align: center; margin-top: 30px; ">
                                Matériau : Plaqué or 18 carats avec pierre de verre noire.<br>
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
            <p>© L’OPALE 2023 Termes et conditions Politique de confidentialite Politique de remboursement </p>
        </div>
    </footer>
    <!-- footer ends -->

    <script src="./JS/article.js"></script>
</body>

</html>