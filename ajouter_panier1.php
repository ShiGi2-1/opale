<?php
    $host = "localhost";
    $utilisateur = "root";
    $motpasse = "";
    $dataname = "lopale";
    //connexion a la base de donnees
    $connexion = new mysqli ($host, $utilisateur, $motpasse, $dataname);

    if($connexion -> connect_error){
        die("echec de la connexion a la base de donnees: " . $connexion->connect_error);

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numclt = $_POST["id_clt"];
        $codeprod = $_POST["id_produit"];
        $req = $connexion->prepare("INSERT INTO panier (id_panier, 	quantite) VALUES (?, ?)");
        $req->bind_param("is", $numclt, $codeprod);
        

        if($req -> execute()){
            echo "Enregistrement effectuer";
        } else {
            echo "Echec de l'enregistrement: " . $req -> error;
        }
        $connexion -> close();
    }


?>
