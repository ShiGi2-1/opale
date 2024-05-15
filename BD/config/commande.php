<?php
function ajouter($nom, $image, $prix, $disc)
{
    if(require("connexion.php"))
    {
       $req = $access->propare("INSERT INTO produits (image, nom, prix, discription) 
       VALUES ($image, $nom, $prix, $disc)");
       $req->execute(array($nom, $image, $prix, $disc));

       $req->closeCursor();
    }
}


function afficher()
{
    if(require("connexion.php"))
    {
        $req= $access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req-fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}

function supprimer($id_produit)
{
    if(require("connexion.php"))
    {
        $req=$access->propare("DELETE * FROM produits WHERE id_produit=?");

        $req->execute(array($id_produit));
    }
}
?>