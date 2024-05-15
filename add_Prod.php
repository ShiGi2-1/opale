<?php
    $host = "localhost";
    $utilisateur = "root";
    $motpasse = "";
    $dataname = "opale";
    //connexion a la base de donnees
    $connexion = new mysqli ($host, $utilisateur, $motpasse, $dataname);

    if($connexion -> connect_error){
        die("echec de la connexion a la base de donnees: " . $connexion->connect_error);

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomprod = $_POST["nom_produit"];
        $prix= $_POST["prix_produit"];
        $discrip = $_POST["discription"];
		$numcollec = $_POST["id_collection"];
        $req = $connexion->prepare("INSERT INTO produit (nom_produit, prix_produit, discription, id_collection) VALUES (?, ?, ?, ?)");
        $req->bind_param("ssss", $nomprod, $prix, $discrip, $numcollec);
        

        if($req -> execute()){
            echo "Enregistrement effectuer";
        } else {
            echo "Echec de l'enregistrement: " . $req -> error;
        }
        $connexion -> close();
    }


?>