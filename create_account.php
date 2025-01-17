<?php
    $host = "localhost";
    $utilisateur = "root";
    $motpasse = "";
    $dataname = "opale";
    // Connexion à la base de données
    $connexion = new mysqli ($host, $utilisateur, $motpasse, $dataname);

    if($connexion -> connect_error){
        die("Échec de la connexion à la base de données: " . $connexion->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['telephone'];
        $email = $_POST['email'];
        $motdepasse = $_POST['mdp'];
        // Préparation de la requête SQL
        $req = $connexion->prepare("INSERT INTO client(nom_clt, prenom_clt, tel_clt, mail_clt, passeword) VALUES (?,?,?,?,?)");
        // Vérification de la préparation de la requête
        if ($req === false) {
            die("Échec de la préparation de la requête: " . $connexion->error);
        }
        // Liaison des paramètres
        $req->bind_param("sssss", $nom, $prenom, $tel, $email, $motdepasse);

        // Exécution de la requête
        if($req->execute()){
            header("Location: connect.php");
        exit;
        } else {
            echo "Échec de l'enregistrement: " . $req->error;
        }
        // Fermeture de la connexion
        $connexion->close();
    }
?>