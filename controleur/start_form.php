<?php

// Efface les données de session relatives aux éventuels formulaires précédents

$_SESSION['code_formulaire'] = '';
$_SESSION['nom_formulaire'] = '';
$_SESSION['table_resultats'] = '';



// Paramètre les données de session relatives au test sélectionné

if (isset($_GET['form']) && !empty($_GET['form'])) {                   // Vérifie l'existance des données du formulaire
    
    if ($_GET['form'] == "cdc") {
        
        $_SESSION['code_formulaire'] = 'cdc';
        $_SESSION['nom_formulaire'] = 'Caisse des Dépôts';
        $_SESSION['table_resultats'] = 'formulaire_cdc';
        
    }
    
header('Location: index.php?section=form');    
    
}
