<?php
/* On vérifie si la variable $send existe et si elle est bien égale
à true */
if (isset($send) && $send) {
    /* On affiche notre image que l'on appelle grâce à notre variable
    $newImageName qui stocke le nom de notre image dynamiquement */
    echo '<img src="uploads/' .$newImageName. '" alt="Votre image téléchargée" style="max-width: 75%">';
}
/* Sinon on affiche une image par défaut */
else {
    echo '<i class="fas fa-paper-plane"></i>';
}