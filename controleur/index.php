<?php

$views = [];


// ###################
// SESSION OUVERTE
// ###################

if (isset($_SESSION['user'])) {
    
    $user = $_SESSION['user'];
    
    
    // ###################
    // ADMINISTRATEUR
    // ###################
        
    if ($user->getIdGroupe() == 1) {
        
        if (!isset($_SESSION['parcours']) && !isset($_GET['parcours'])) {
            
            $views[] = 'views/nav_admin.php'; 
            
        }
        
        if(isset($_GET['section'])) {
            
            if ($_GET['section'] == 'admin_users') {
                
                // A faire : Permettre d'appartenir à plusieurs groupes
            
                $groupes = $managerGroupe->getList();
                $views[] = 'views/form_add_user.php';
                $users = $managerUser->getList();        
                $views[] = 'views/liste_users.php';

            } elseif ($_GET['section'] == 'admin_groupes') {

                // A faire : Attacher des membres à un groupe
                // A faire : Attacher des parcours à un groupe
                
                $groupes = $managerGroupe->getList();
                $views[] = 'views/liste_groupes.php'; 

            } elseif ($_GET['section'] == 'admin_parcours') {

                // A faire : Attacher des (un ?) groupes à un parcours
                // A faire : Attacher des modules à un parcours
                
                $views[] = 'views/form_add_parcours.php';
                $parcours = $managerParcours->getList();
                $views[] = 'views/liste_parcours.php'; 

            } elseif ($_GET['section'] == 'admin_modules') {
                
                $views[] = 'views/form_add_module.php';
                $modules = $managerModule->getList();
                $views[] = 'views/liste_modules.php';
                
                // A faire : Attacher des (un ?) parcours à un module ?

            } elseif ($_GET['section'] == 'admin_ressources') {

                $views[] = 'views/form_add_ressource.php';
                $ressources = $managerRessource->getList();
                $views[] = 'views/liste_ressources.php';  
                
                // A améliorer (pour l'instant, seulement insertion de code)

            } elseif ($_GET['section'] == 'admin_messages') {

                $messages = $managerMessage->getList();
                $views[] = 'views/liste_messages.php';  
                
            } elseif ($_GET['section'] == 'admin_seances') {

                $seances = $managerSeance->getList();
                $views[] = 'views/liste_seances.php';
                
            } elseif ($_GET['section'] == 'admin_questions') {

                $questions = $managerQuestion->getList();
                $views[] = 'views/liste_questions.php';  
                
            }
            
        } elseif (isset($_GET['ressource'])) {
            
            $ressource = $managerRessource->get((int) $_GET['ressource']);
            $views[] = 'views/info_ressource.php';
            
        } elseif (isset($_GET['module_modif'])) {
            
            $module = $managerModule->get((int) $_GET['module_modif']);
            $ressources = $managerRessource->getList();
            $ressourcesByModule = $managerModule->getRessourcesByModule((int) $_GET['module_modif']);
            $views[] = 'views/info_module.php';
            
        } elseif (isset($_GET['parcours_modif'])) {
            
            $parcours = $managerParcours->get((int) $_GET['parcours_modif']);
            $modules = $managerModule->getList();
            $modulesByParcours = $managerParcours->getModulesByParcours((int) $_GET['parcours_modif']);
            $views[] = 'views/info_parcours.php';
            
         } elseif (isset($_GET['groupe_modif'])) {
            
            $groupe = $managerGroupe->get((int) $_GET['groupe_modif']);
            $parcours = $managerParcours->getList();
            $parcoursByGroupe = $managerGroupe->getParcoursByGroupe((int) $_GET['groupe_modif']);
            $views[] = 'views/info_groupe.php';
            
         } elseif (isset($_GET['seance'])) {
            
            $seance = $managerSeance->get((int) $_GET['seance']);
            $feedbacksBySeance = $managerSeance->getFeedbacksBySeance($_GET['seance']);
            $views[] = 'views/info_seance.php';

        } else {
            
            if (isset($_SESSION['parcours'])) {
                
                $idParcours = $_SESSION['parcours'];
                
            } elseif (isset($_GET['parcours'])) {   
                
                $idParcours = $_GET['parcours'];
                $_SESSION['parcours'] = $idParcours;
                
            } else {
                
                $parcours = $managerParcours->getList();
                $views[] = 'views/contenu_admin.php';
                
            }    
            
        }
        
    // ###################
    // USER
    // ###################
        
    } else {
                
        $idGroupe = $user->getIdGroupe();
        $nbParcours = $managerGroupe->countParcoursByGroupe($idGroupe);
                
        if ($nbParcours == 0) {
            
            $alerte = 'Pas de parcours attribué à ce groupe d\'utilisateurs';
            
        } elseif ($nbParcours == 1) {
            
            $parcours = $managerGroupe->getParcoursUniqueByGroupe((int) $idGroupe);
            $idParcours = $parcours->getId();
            
        } else {
            
            if (isset($_SESSION['parcours'])) {
                
                $idParcours = $_SESSION['parcours'];
                
            } elseif (isset($_GET['parcours'])) {   
                
                $idParcours = $_GET['parcours'];
                $_SESSION['parcours'] = $idParcours;
                
            } else {
                
                $parcoursByGroupe = $managerGroupe->getParcoursByGroupe($idGroupe);
                $views[] = 'views/parcours_multipleParcours.php';
                
            }
                           
        }    
                
    }
    
    // AFFICHAGE PARCOURS
    
    if (isset($idParcours)) {
            
        $parcours = $managerParcours->get((int) $idParcours);
        $modulesByParcours = $managerParcours->getModulesByParcours((int) $parcours->getId());

        $nbModules = $managerParcours->countModulesByParcours($idParcours);

        if ($nbModules == 0) {

            $alerte = 'Pas de module attaché à ce parcours';

        } elseif ($nbModules == 1) {

            $module = $managerParcours->getModuleUniqueByParcours((int) $idParcours);
            $ressourcesByModule = $managerModule->getRessourcesByModule((int) $module->getId());
            $messagesByModule = $managerMessage->getMessagesByModule((int) $module->getId());
            $views[] = 'views/parcours_singleModule.php';

        } else {

            if (!isset($_GET['module'])) {

                $module = $managerParcours->getFirstModuleByParcours((int) $idParcours);
                $ressourcesByModule = $managerModule->getRessourcesByModule((int) $module->getId());

            } else {

                $module = $managerModule->get((int) $_GET['module']);
                $ressourcesByModule = $managerModule->getRessourcesByModule((int) $_GET['module']);
                
            }

            $messagesByModule = $managerMessage->getMessagesByModule((int) $module->getId());
            $views[] = 'views/parcours_multipleModules.php';

        }
        
        // Tests
        // Cas particulier, efface les autres affichages si défini

        if (isset($_GET['test'])) {
            
            $views = [];

            $test = $managerTest->get((int)$_GET['test']);
            $idUser = $user->getId();
            $idTest = $test->getId();
            $codeTest = $test->getCode();
            $noQuestion = $managerResultat->count($idUser, $idTest);

            if ($noQuestion == 0) {

                $views[] = 'views/tests/test_instructions.php';

            } else if ($noQuestion == $test->getNbQuestions() + 1) {

                // Test terminé
                $resultats = $managerResultat->getAll($idUser, $idTest);
                include_once('controleur/test_' . $codeTest . '_bilan.php');
                $views[] = 'views/tests/test_bilan_' . $codeTest . '.php';

            } else {

                $tableQuestions = 'q_' . $codeTest;

                $requete = $db->prepare('SELECT * FROM ' . $tableQuestions . ' WHERE id = ?');
                $requete->execute(array($noQuestion));
                $resultat = $requete->fetch();

                $views[] = 'views/tests/test_format_' . $codeTest . '.php';

            }

        }

    }
        
    
// ###################
// SESSION NON OUVERTE
// ###################
    
} else {
    
    // Si l'un des formulaires a été envoyé convenablement, on les vérifie
    if (isset($_POST['connexion'])) {
        
        // Si username
        if (isset($_POST['username']) && isset($_POST['password'])) {
            
            // Vérifie si l'accès est auorisé
            $user = new User(array(
                'username' => $_POST['username'],
                'password' => sha1($_POST['password']),
            ));
            
            if ($managerUser->credentials($user)) {
                $user = $managerUser->get($user->getUsername());
                $managerUser->updateConnexion($user);
                $_SESSION['user'] = $user;
            } else {
                $_SESSION['alerte'] = 'Vos identifiants sont erronés';
                unset($user);
            }
          
        // Si code
        } else if (isset($_POST['code'])) {
            
            // Vérifie si le code existe
            $groupe = new Groupe(array( 
                'code' => $_POST['code'],
            ));

            if ($managerGroupe->credentials($groupe) && !empty($_POST['code'])) {
                $groupe = $managerGroupe->get($groupe->getCode());
                $user = new User(array(
                    'id' => 990000 + random_int(0, 9999),
                    'username' => 'anonyme',
                    'idGroupe' => $groupe->getId(),
                ));
                $_SESSION['user'] = $user;
                
            } else {
                $_SESSION['alerte'] = 'Vos identifiants sont erronés';
                unset($groupe);
            }
            
        }
        
        header('Location: .');
        exit();            
     
    // Sinon on affiche l'un des formulaires de connexion
    } else {
        
        // Si appel du formulaire code anonyme, on l'affiche
        if (isset($_GET['code'])) {
            
            // Affiche formulaire code
            $views[] = 'views/connexion_code.php';
         
        // Sinon, on affiche le formulaire classique
        } else {
            
            // Affiche formulaire credentials
            $views[] = 'views/connexion.php';
            
        }
        
    }    
    
}

if (isset($_GET['feedback'])) {
        
    $views = [];
    $seance = $managerSeance->get((int) $_GET['feedback']);
    $views[] = 'views/module_feedback.php';
    
}



// ###################
// AFFICHAGES
// ###################

include_once('views/header.php');

if (isset($alerte)) {
    include_once('views/alerte.php');
}

if (isset($_SESSION['alerte'])) {
    $alerte = $_SESSION['alerte'];
    include_once('views/alerte.php');
    unset($_SESSION['alerte']);
}

include_once('views/navbar.php');

foreach ($views as $view) {
    include_once($view);
}

include_once('views/footer.php');


if (isset($user)) {
    $_SESSION['user'] = $user;
}