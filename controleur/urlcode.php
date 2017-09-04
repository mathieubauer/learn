<?php

// Espace sans mot de passe

session_start();

// pmolik
if ($_GET['code'] == 'Vivea') {   
    $_SESSION['id'] = 999;
    $_SESSION['pseudo'] = 'Vivea Anonyme';
    $_SESSION['id_groupe'] = 36;
    $_SESSION['nom_groupe'] = 'vivea';
}

if (isset($_GET['code'])) {
    $_SESSION['code_groupe'] = $_GET['code'];
}




if ($_GET['code'] == 'demo') {   
    $_SESSION['id'] = 999;
    $_SESSION['pseudo'] = 'Anonyme';
    $_SESSION['id_groupe'] = 35;
    $_SESSION['nom_groupe'] = 'Démo';
}



header('Location: index.php');
