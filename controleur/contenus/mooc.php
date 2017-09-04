<?php

// Affiche une page de ressources unique
// Un groupe correspond à un parcours (vs. module)

if ($_SESSION['nom_groupe'] == 'vivea') { 
    $id_parcours = 1;
} else {
    // $id_parcours = 22;
    $id_parcours = 24;
}

 // ################ A AUTOMATISER

if (isset($_GET['module'])) {
    $id_module = $_GET['module'];
} else {
    $id_module = 1;
}

// Modele - Renvoie les infos d'un parcours
include_once('modele/fonctions/info_parcours.php');
$infoParcours = getInfosParcours($id_parcours);

// Modele - Renvoie les infos des modules du parcours
$infoAllModules = getInfosAllModules($id_parcours);
$infoModule = getInfosModule($id_module);

// Modele - Renvoie les infos des ressources du module
$infoRessources = getInfosRessources($id_module);

$nom_groupe = 'Vivea';
include_once('modele/liste_chat.php');
include_once('vue/contenus/mooc.php');