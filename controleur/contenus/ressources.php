<?php

// Affiche une page de ressources unique
// Un groupe correspond à un module (vs. parcours)

$id_module = 6;

 // ################ A AUTOMATISER

include_once('modele/fonctions/info_parcours.php');

// Modele - Renvoie les infos du module
$infoModule = getInfosModule($id_module);

// Modele - Renvoie les infos des ressources du module
$infoRessources = getInfosRessources($id_module);


include_once('vue/contenus/ressources.php');