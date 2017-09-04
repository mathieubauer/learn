<?php

// O. Vérifier qu'on est administrateur (faire le test et ajouter la fonctionnalité s'il y a lieu)

// 1. Vérifier l'existence des données du formulaire
// 2. Passer les données en variables
// 3. Inclure les données dans la base
// 4. Renvoyer vers le contrôleur global


if (!empty($_POST['nom']) && !empty($_POST['description'])) {
    
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    
    include_once('modele/todo_add.php');
    header('Location: index.php?section=todo'); 
    
} else {                                                                        // Sinon renvoie le formulaire avec une page d'erreur
    
    $info = "<p>Au moins un des champs est vide. Merci de recommencer.</p>";
    include_once('vue/alerte.php');
    
    include_once('vue/header.php');                                                 
    include_once('vue/formulaire_todo.php');
    include_once('vue/footer.php');
}







