<?php

// A FAIRE
// Créer également des cookies (pseudo + mdp haché)
// Voir systèmes de connexion tiers

// VARIABLES DE SESSION CREES A LA CONNEXION
// id du membre
// pseudo du membre
// id du groupe
// nom du groupe


// récupère le pseudo et hache le mot de passe
$pass_hache = sha1($_POST['mdp']);
$pseudo = $_POST['pseudo'];

// appelle la base pour vérifier les correspondances
// renvoie $resultat (fetch de la requête avec id et id_groupe)
include_once('modele/verification_membre.php');

// autorise l'accès selon le résultat et crée les variables de session
if (!$resultat) {
    header('Location: index.php?info=err_login');
    
} else {
    session_start();
    
    // Variables utilisateur
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    
    // Variables groupe associées à l'utilisateur
    $id_groupe = $resultat['id_groupe'];
    include_once('modele/info_groupe.php');
    $_SESSION['nom_groupe'] = $resultat['nom_groupe'];
    $_SESSION['id_groupe'] = $id_groupe;
    
    // Variables d'accès à l'administration (devrait être nommé permission)
    if ($_SESSION['id_groupe'] == 1) {
        $_SESSION['admin'] = 'admin';
    }
        
    header('Location: index.php');
}

// Avec le nouveau fonctionnement par groupes, et la création d'un groupe admin, on pourra simplifier 
