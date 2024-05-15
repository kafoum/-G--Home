<?php


function ajouter($nom, $adresse, $ville, $piece, $disponible, $prix, $surface, $image, $description, $additional_images,$additional_images2)
{
    global $access;
    if(require("connexion.php"))
    {
        // Utilisation de la requête préparée avec des paramètres nommés
        $req = $access->prepare("INSERT INTO maison (nom, adresse, ville, piece, disponible, prix, surface, image, description, additional_images,additional_images2) VALUES (:nom, :adresse, :ville, :piece, :disponible, :prix, :surface, :image, :description, :additional_images, :additional_images2)");

        // Liaison des paramètres
        $req->bindParam(':nom', $nom);
        $req->bindParam(':adresse', $adresse);
        $req->bindParam(':ville', $ville);
        $req->bindParam(':piece', $piece);
        $req->bindParam(':disponible', $disponible);
        $req->bindParam(':prix', $prix);
        $req->bindParam(':surface', $surface);
        $req->bindParam(':image', $image);
        $req->bindParam(':description', $description);
        $req->bindParam(':additional_images', $additional_images);
        $req->bindParam(':additional_images2', $additional_images2); 

        // Exécution de la requête
        $req->execute();

        // Fermeture du curseur
        $req->closeCursor(); 
    }
}




function afficher()
{
    global $access;
    if(require("connexion.php"))
    {
        
        $req = $access->prepare("SELECT * FROM maison ORDER BY id DESC");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);

            return $data;
        
            $req->closeCursor();
    }
}

function supprimer($id)
{
    global $access;
    $req = $access->prepare("DELETE FROM maison WHERE id=? ");
    $req->execute(array($id));
}

?>

