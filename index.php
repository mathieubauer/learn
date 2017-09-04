<?php

require('app/autoload.php'); 

session_start();

if (isset($_GET['deconnexion'])) {
    session_destroy();
    header('Location: .');
    exit();
}

if (isset($_GET['destroy_parcours'])) {
    unset($_SESSION['parcours']);
    header('Location: .');
    exit();
}

require('app/connexion_sql.php'); 

$managerUser = new UserDAO($db);
$managerGroupe = new GroupeDAO($db);
$managerParcours = new ParcoursDAO($db);
$managerModule = new ModuleDAO($db);
$managerRessource = new RessourceDAO($db);

$managerQuestion = new QuestionDAO($db);

$managerSeance = new SeanceDAO($db);
$managerFeedback = new FeedbackDAO($db);

$managerMessage = new MessageDAO($db);

$managerTest = new TestDAO($db);
$managerResultat = new ResultatDAO($db);

if (isset($_GET['action'])) {
    require('controleur/action.php');
}

if (isset($_GET['action_user'])) {
    require('controleur/action_user.php');
}

// if (isset($_GET['code'])) {
//     require('controleur/code.php') 
// }

require('controleur/index.php');










/*

if (isset($_SESSION['pseudo'])) {
    $menu_personnalise = '<li class="nav-item"><a href="#">Bienvenue ' .  $_SESSION['pseudo']  . '</a></li><li class="nav-item"><a href="index.php?section=deconnexion">Se déconnecter</a></li>' ;
}




// Affiche des informations complémentaires ou alertes
if ($_GET['info'] == 'login_ok') {
    $info = "L'utilisateur a été crée avec succès. Vous pouvez maintenant vous connecter.";
}

if ($_GET['info'] == 'todo_ok') {
    $info = "<p>La tâche a été crée avec succès.</p>";
    include_once('controleur/index.php');
}

if ($_GET['info'] == 'raz_score') {
    $info = "Les résultats ont été remis à zéro.";
}

if ($_GET['info'] == 'err_login') {
    $info = "Le login et/ou le mot de passe est erronné.";
}

if ($_GET['info'] == 'err_crea') {
    $info = "<p>Une erreur est survenue, merci de recommencer.</p>";
}

if ($_GET['info'] == 'suppr_user') {
    $info = "L'utilisateur a été supprimé.";
}



// Traite les pages sans méthode GET (dervrait venir en premier ?)
if (!isset($_GET['section']) OR $_GET['section'] == 'index') { // page d'accueil par défaut (voir si OK d'envoyer des vues)
    include_once('controleur/index.php');
}




if ($_GET['section'] == 'inscription') {
    include_once('controleur/inscription.php'); // vers le formulaire d'inscription
}

if ($_GET['section'] == 'nouveau_membre') {
    include_once('controleur/nouveau_membre.php'); // vers la procédure de création qui renvoie à la page d'accueil (voir si nécessaire de repasser ici)
}

if ($_GET['section'] == 'verification_membre') {
    include_once('controleur/verification_membre.php');
}

if ($_GET['section'] == 'deconnexion') {
    include_once('controleur/deconnexion.php');
}


if ($_GET['section'] == 'start_diag') {
    include_once('controleur/start_diag.php');
}

if ($_GET['section'] == 'diag') {
    include_once('controleur/diag.php');
}

if ($_GET['section'] == 'test_raz') {
    include_once('controleur/test_raz.php');
}

if ($_GET['section'] == 'test_suiv') {
    include_once('controleur/test_suiv.php');
}


if ($_GET['section'] == 'start_form') {
    include_once('controleur/start_form.php');
}

if ($_GET['section'] == 'form') {
    include_once('controleur/form.php');
}

if ($_GET['section'] == 'form_add') {
    include_once('controleur/form_add.php');
}


if ($_GET['section'] == 'module') {                     // module de contenu statique
    include_once('controleur/module.php');
}



if ($_GET['section'] == 'urlcode') {   
    include_once('controleur/urlcode.php');
}




// Pages administration ###################################################



if ($_GET['section'] == 'suppression') {
    include_once('controleur/suppression.php');
}

if ($_GET['section'] == 'admin_groupes') {
    include_once('controleur/admin_groupes.php');
}

if ($_GET['section'] == 'admin_ressources') {
    include_once('controleur/admin_ressources.php');
}

if ($_GET['section'] == 'admin_modules') {
    include_once('controleur/admin_modules.php');
}

if ($_GET['section'] == 'edit_groupe') {
    include_once('controleur/edit_groupe.php');
}

if ($_GET['section'] == 'edit_module') {
    include_once('controleur/edit_module.php');
}

if ($_GET['section'] == 'change_groupe') {
    include_once('controleur/change_groupe.php');
}

if ($_GET['section'] == 'nouveau_parcours') {
    include_once('controleur/nouveau_parcours.php');
}

if ($_GET['section'] == 'nouveau_module') {
    include_once('controleur/nouveau_module.php');
}

if ($_GET['section'] == 'nouveau_groupe_crea') {
    include_once('controleur/nouveau_groupe_crea.php');
}

if ($_GET['section'] == 'nouveau_module_crea') {
    include_once('controleur/nouveau_module_crea.php');
}

// TODO

if ($_GET['section'] == 'todo') {
    include_once('controleur/todo.php');
}

if ($_GET['section'] == 'todo_add') {
    include_once('controleur/todo_add.php');
}

if ($_GET['section'] == 'todo_suppr') {
    include_once('controleur/todo_suppr.php');
}

// ###########################################################################





// Erreur 404 gérée ici ? */
