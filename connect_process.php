<?php
session_start();
$host = "localhost";
$utilisateur = "root";
$motpasse = "";
$dataname = "opale";

// Connexion à la base de données
$connexion = new mysqli($host, $utilisateur, $motpasse, $dataname);

if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données: " . $connexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $motdepasse = $_POST['mdp'];

    // Requête SQL pour vérifier les informations d'identification
    $req = $connexion->prepare("SELECT * FROM client WHERE mail_clt = ?");
    
    // Vérification de la préparation de la requête
    if ($req === false) {
        die("Échec de la préparation de la requête: " . $connexion->error);
    }

    // Liaison des paramètres
    $req->bind_param("s", $email);
    
    // Exécution de la requête
    $req->execute();
    
    // Obtenir les résultats
    $result = $req->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Vérification du mot de passe
        if ($motdepasse === $user['passeword']) { // Utilisez password_verify() si les mots de passe sont hachés
            // Connexion réussie
            $_SESSION['user_tel'] = $user['tel_clt'];
            $_SESSION['user_name'] = $user['nom_clt'] . ' ' . $user['prenom_clt'];
            $_SESSION['user_email'] = $email;

            // Redirection vers la page de gestion du panier
            header("Location: or.php");
            exit;
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "E-mail non trouvé";
    }

    // Fermeture de la connexion
    $connexion->close();
}
?>
