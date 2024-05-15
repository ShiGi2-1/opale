<!DOCTYPE html>
<html>
    <head>
        <title> Formulaire </title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width"/>
		<style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                width: 80%; /* Vous pouvez ajuster la largeur selon vos besoins */
                overflow: auto; /* Ajout de la barre de défilement */
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }
            form{
                display: flex;
                flex-direction: column;
            }
            body{
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site</title>
    <link rel="stylesheet">\

    <style>
      body, html {
    margin: 0;
    overflow: hidden;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100%;
    margin-top: -10px;
    width: 100%;
}

.container {
    display: flex;
    min-height: 100vh;
}

.sidebar {
    width: 200px;
    background-color: #2c3e50; /* Bleu nuit */
    color: #fff;
}

.sidebar nav ul {
    list-style: none;
    padding: 0;
}

.sidebar nav ul li {
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.sidebar nav ul li a {
    text-decoration: none;
    color: #fff;
    display: block;
    height: 70px;
}

.sidebar nav ul ul {
    display: none;
    background-color: #34495e; /* Bleu gris */
}

.sidebar nav ul li:hover > ul {
    display: block;
}

.sidebar nav ul ul li {
    padding: 10px;
}

.sidebar nav ul ul li a {
    text-decoration: none;
    color: #fff;
    display: block;
}

/* Augmentation de la taille des boutons */
.sidebar nav ul ul li a {
    font-size: 16px;
    padding: 12px 20px; /* Espacement intérieur de 12px en haut/bas et 20px à gauche/droite */
}

.content {
    flex: 1;
    padding: 20px;
    background-color: #ecf0f1; /* Gris clair */
}

@media screen and (max-width: 768px) {
    .container {
        flex-direction: column;
    }
    .sidebar {
        width: 100%;
    }
    .content {
        width: 100%;
    }
}

    header{
      background-color: #2c3e50;
      height: 3vh;
    }


    .container {
                width: 80%; /* Vous pouvez ajuster la largeur selon vos besoins */
                overflow: auto; /* Ajout de la barre de défilement */
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }
            form{
                display: flex;
                flex-direction: column;
            }
            body{
                display: flex;
                flex-direction: column;
            }

    </style>
</head>
<body>
  <header></header>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li>
                        <a href="#">Produits</a>
                        <ul>
                            <li><a href="../add_produit.html">Ajouter</a></li>
                            <li><a href="../gerer_produit.php">Gerer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Catégories</a>
                        <ul>
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Modifier</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Clients</a>
                        <ul>
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Modifier</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Achat</a>
                        <ul>
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Modifier</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Panier</a>
                        <ul>
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Modifier</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Ajout futur</a>
                        <ul>
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Modifier</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="content">
        <form action =""method="POST">
		    <label> Identifiant </label>
            <input type="text" name="idprod">

            <input type="submit" value="Afficher" name="button">			
		</form>
        <div class="container">
            <table>
                <tr>
                    <th>Code</th>
                    <th>Nom du produit</th>
                    <th>Prix</th>
                    <th>discription</th>
                    <th>collection</th>
                </tr>
                <?php
                include_once "connexion_opale.php";
                // Vérification de la connexion à la base de données
                if ($conn) {
                    $req = mysqli_query($conn, "SELECT * FROM produit");

                    // Vérification si la requête s'est exécutée avec succès
                    if ($req) {
                        if(mysqli_num_rows($req) === 0){
                            // S'il n'y a pas de produits
                            echo "<tr><td colspan='5'>Il n'y a pas de produits</td></tr>";
                        } else {
                            // Sinon, affichons les produits
                            while($row = mysqli_fetch_assoc($req)) {
                                echo "<tr>";
                                echo "<td>".$row['id_produit']."</td>";
                                echo "<td>".$row['nom_produit']."</td>";
                                echo "<td>".$row['prix_produit']."</td>";
                                echo "<td>".$row['discription']."</td>";
                                echo "<td>".$row['id_collection']."</td>";
                                echo "<td><a href='modifierproduit.php?id=".$row['id_produit']."'>modifier</a></td>";
                                echo "<td><a href='supprimerproduit.php?id=".$row['id_produit']."'>supprimer</a></td>";
                                echo "<td><a href='supprimerproduit.php?id=".$row['id_produit']."'>Afficher</a></td>";
                                echo "</tr>";
                            }
                        }
                    } else {
                        // Gérer l'erreur de requête
                        echo "<tr><td colspan='5'>Erreur de requête : " . mysqli_error($conn)."</td></tr>";
                    }

                    // Fermer la connexion à la base de données
                    mysqli_close($conn);
                } else {
                    // Gérer l'échec de la connexion à la base de données
                    echo "<tr><td colspan='5'>Échec de la connexion à la base de données</td></tr>";
                }
                ?>
            </table>
        </div>

        </div>
    </div>
</body>
</html>


