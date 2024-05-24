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




<?php
//inclure la page de connexion
include_once "con_dbb.php";

// Vérifier si une session existe, sinon démarrer une nouvelle session
if(!isset($_SESSION)) {
    session_start();
}

// Créer la session panier s'il n'existe pas encore
if(!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

// Récupération de l'id dans le lien
if(isset($_GET['id'])) {
    // Convertir l'ID en entier
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Vérifier si l'ID est valide
    if($id <= 0) {
        die("ID de produit invalide");
    }

    // Vérifier si le produit existe dans la base de données
    $produit = mysqli_query($con, "SELECT * FROM produit WHERE id_produit = $id");
    
    // Vérifier si le produit existe
    if(mysqli_num_rows($produit) == 0) {
        // Si le produit n'existe pas, afficher un message d'erreur
        die("Ce produit n'existe pas");
    }

    // Ajouter le produit dans le panier
    if(isset($_SESSION['panier'][$id])) {
        // Si le produit est déjà dans le panier, augmenter la quantité
        $_SESSION['panier'][$id]++;
    } else {
        // Sinon, ajouter le produit au panier avec une quantité de 1
        $_SESSION['panier'][$id] = 1;
    }

    // Rediriger vers la page index.php
    header("Location: or.php");
}

?>