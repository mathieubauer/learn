<?php


$code_formulaire = $_SESSION['code_formulaire'];
$nom_formulaire = $_SESSION['nom_formulaire'];
$table_resultats = $_SESSION['table_resultats'];


include_once('vue/header.php');



// Vérification : Si l'utilisateur est connecté
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {   
        
    // Alors on va chercher le contenu de la table des résultats pour l'utilisateur (valable pour formulaires et tests)
    $pseudo = $_SESSION['pseudo'];
    include_once('modele/verification_test.php');                                       
        
    // Vérification : Si utilisateur inscrit à la table des résultats
    if (!empty($resultat)) {  
        
        // Alors on l'envoie vers ses résultats
        // A FAIRE
        
    // Sinon l'utilisateur n'est pas inscrit
    } else { 
        
        // Alors on affiche le formulaire à remplir
        include_once('vue/formulaire_cdc.php');
        
    } 
        
   
    
    
    // Aller aux résultats
               // include_once('modele/liste_reponses.php');
              //  include_once('controleur/test_' . $code_test . '_bilan.php');
              //  include_once('vue/test_' . $code_test . '_bilan.php');
       
        

       
} else { echo "Accès interdit"; }
    
include_once('vue/footer.php');            



    




// A FAIRE
// Tester si en cours 
// Démarrer le count de questions
// Mettre le test en variable
// faire varier les pages d'instructions selon le test
// créer une table des tests ? id, nom complet, initiales / code
    
    