<?php

if (isset($info)) {
    include_once('vue/alerte.php');
}

include_once('vue/header.php');

    if ($_SESSION['nom_groupe'] == 'administrateur' AND isset($_SESSION['id']) AND isset($_SESSION['pseudo']) ) {        // Vérifie admin pour affichage

        include_once('vue/formulaire_todo.php');

        include_once('modele/liste_todo.php');
        include_once('vue/liste_todo.php');
        
    } else {
        header('Location: index.php');
    }

include_once('vue/footer.php');



/*


if (!empty($_POST['nom']) && !empty($_POST['description'])) {                                   // Vérifie données
    
    $nom = $_POST['nom'];                                                         // Passe les données du formulaire en variables
            $description = $_POST['description'];

               // Vérifie l'existance des données du formulaire
    
    
    include_once('modele/todo_add.php');                                          // Inclut les données dans la base
    header('Location: index.php?info=todo_ok');                                      // Renvoie vers le controleur global
    
} else {
    include_once('vue/header.php');                                                     // Sinon renvoie le formulaire avec une page d'erreur
    echo "Au moins un des champs est vide. Merci de recommencer.";
    include_once('vue/todo_formulaire.php');
    include_once('vue/footer.php');
}


