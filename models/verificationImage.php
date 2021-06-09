<?php

/* L'image est-elle bien envoyée et y a-t-il des erreurs ? */
/* var_dump($_FILES) afin d'afficher les informations de notre image
envoyée*/
if(isset($_FILES['image']) && $_FILES['image']['error'] === 0){
    /* La taille de l'image est-elle bien inférieure ou égale à 3mo ? */
    if ($_FILES['image']['size'] <= 3000000) {
        /* L'extension de l'image est-elle correcte ? */
        $informationImage = pathinfo($_FILES['image']['name']);
        $extensionImage = $informationImage['extension'];
        $extensionAuthorize = ['png', 'jpg', 'jpeg', 'gif'];

        if(in_array($extensionImage, $extensionAuthorize)){
            /* Envoie de l'image dans le dossier uploads */
            $newImageName = time().rand().rand(). '.' .$extensionImage;
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' .$newImageName);
        /*             echo 'L\'envoi de l\'image a bien été effectué avec succès';*/       }
        /* Création d'une variable pour remplacer l'image par notre image envoyée */
        $send = true;
    }
}