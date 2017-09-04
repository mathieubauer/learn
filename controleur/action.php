<?php

// PAGE SENSIBLE DONC VERIFICATIONS
// Actions administrateur

$user = $_SESSION['user'];

if ($user->getIdGroupe() == 1) {
    
    if($_GET['type'] == 'user') {
    
        if($_GET['action'] == 'create') {

            if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password2'])) { 

                if ($_POST['password'] == $_POST['password2']) { 

                    if ($_POST['idGroupe'] != 0) {

                        if ($managerUser->exists($_POST['username']) == false) {                   

                            $userCreate = new User(array(
                                'username' => $_POST['username'],
                                'password' => sha1($_POST['password']),
                                'role' => 'void',
                                'idGroupe' => $_POST['idGroupe'],
                            ));

                            $managerUser->add($userCreate);
                            $_SESSION['alerte'] = 'L\'utilisateur ' . $userCreate->getUsername() . ' a bien été crée.';
                            header('Location: index.php?section=admin_users');
                            exit();

                        } else {
                            $_SESSION['alerte'] = 'Cet utilisateur existe déjà. Merci de recommencer.';
                            header('Location: index.php?section=admin_users');
                            exit();
                        }

                    } else {
                        $_SESSION['alerte'] = 'Vous n\'avez pas renseigné de groupe. Merci de recommencer.';
                        header('Location: index.php?section=admin_users');
                        exit();
                    }

                } else {
                    $_SESSION['alerte'] = 'Les mots de passe ne sont pas identiques. Merci de recommencer.';
                    header('Location: index.php?section=admin_users');
                    exit();
                }

            } else {
                $_SESSION['alerte'] = 'Au moins un des champs est vide. Merci de recommencer.';
                header('Location: index.php?section=admin_users');
                exit();
            }

        }
    
        if($_GET['action'] == 'delete') {

            $userDelete = $managerUser->get((int) $_GET['user']);
            $managerUser->delete($userDelete);
            $_SESSION['alerte'] = 'L\'utilisateur ' . $userDelete->getUsername() . ' a été supprimé';
            header('Location: index.php?section=admin_users');
            exit();

        }
        
    }
    
    if($_GET['type'] == 'groupe') {
        
        if($_GET['action'] == 'create') {
            
            if (isset($_POST['nom'])) {
                
                if ($managerGroupe->exists($_POST['code']) == false) { 
                    
                    $groupeCreate = new Groupe(array(
                        'nom' => $_POST['nom'],
                        'code' => $_POST['code'],
                    ));
                    
                    $managerGroupe->add($groupeCreate);
                    $_SESSION['alerte'] = 'Le groupe ' . $groupeCreate->getNom() . ' a bien été crée.';
                    header('Location: .');
                    header('Location: index.php?section=admin_groupes');
                    exit;

                } else {
                    $_SESSION['alerte'] = 'Ce code groupe existe déjà. Merci de recommencer.';
                    header('Location: index.php?section=admin_groupes');
                    exit();
                }

            }
            
        }
        
        if($_GET['action'] == 'delete') {

            $groupeDelete = $managerGroupe->get((int) $_GET['groupe']);
            $managerGroupe->delete($groupeDelete);
            $_SESSION['alerte'] = 'Le groupe ' . $groupeDelete->getNom() . ' a été supprimé';
            header('Location: index.php?section=admin_groupes');
            exit();

        }
        
        if($_GET['action'] == 'update') {
            
            if (isset($_POST['nom']) && isset($_GET['groupe'])) {
                        
                $groupeUpdate = new Groupe(array(
                    'nom' => $_POST['nom'],
                    'code' => $_POST['code'],
                    'id' => $_GET['groupe'],
                ));

                $managerGroupe->update($groupeUpdate);
                $_SESSION['alerte'] = 'Le groupe ' . $groupeUpdate->getNom() . ' a bien été modifié.';
                header('Location: .');
                header('Location: index.php?section=admin_groupes');
                exit;

            }
            
        }
        
        if($_GET['action'] == 'bind') {
            
            if (isset($_POST['idParcours']) && isset($_GET['groupe'])) {
                
                $managerGroupe->bind($_GET['groupe'], $_POST['idParcours']);
                $_SESSION['alerte'] = 'Le parcours a bien été attaché au groupe.';
                header('Location: .');
                header('Location: index.php?groupe_modif=' . $_GET['groupe']);
                exit;

            }
            
        }
        
        if($_GET['action'] == 'unbind') {
            
            if (isset($_POST['idParcours']) && isset($_GET['groupe'])) {
                
                $managerGroupe->unbind($_GET['groupe'], $_POST['idParcours']);               
                $_SESSION['alerte'] = 'Le parcours a bien été détaché du groupe.';
                header('Location: .');
                header('Location: index.php?groupe_modif=' . $_GET['groupe']);
                exit;

            }
            
        }
        
    }
    
    if($_GET['type'] == 'parcours') {
        
        if($_GET['action'] == 'create') {
            
            if (isset($_POST['nom'])) {
                
                if ($managerParcours->exists($_POST['nom']) == false) { 
                    
                    $parcoursCreate = new Parcours(array(
                        'nom' => $_POST['nom'],
                        'titre' => $_POST['titre'],
                        'soustitre' => $_POST['soustitre'],
                    ));
                    
                    $managerParcours->add($parcoursCreate);
                    $_SESSION['alerte'] = 'Le parcours ' . $parcoursCreate->getNom() . ' a bien été crée.';
                    header('Location: .');
                    header('Location: index.php?section=admin_parcours');
                    exit;

                } else {
                    $_SESSION['alerte'] = 'Ce parcours existe déjà. Merci de recommencer.';
                    header('Location: index.php?section=admin_parcours');
                    exit();
                }

            }
            
        }
        
        if($_GET['action'] == 'delete') {

            $parcoursDelete = $managerParcours->get((int) $_GET['parcours']);
            $managerParcours->delete($parcoursDelete);
            $_SESSION['alerte'] = 'Le parcours ' . $parcoursDelete->getNom() . ' a été supprimé';
            header('Location: index.php?section=admin_parcours');
            exit();

        }
        
        if($_GET['action'] == 'update') {
            
            if (isset($_POST['nom']) && isset($_GET['parcours'])) {
                        
                $parcoursUpdate = new Parcours(array(
                    'nom' => $_POST['nom'],
                    'titre' => $_POST['titre'],
                    'soustitre' => $_POST['soustitre'],
                    'id' => $_GET['parcours'],
                ));

                $managerParcours->update($parcoursUpdate);
                $_SESSION['alerte'] = 'Le parcours ' . $parcoursUpdate->getNom() . ' a bien été modifié.';
                header('Location: .');
                header('Location: index.php?section=admin_parcours');
                exit;

            }
            
        }
        
        if($_GET['action'] == 'bind') {
            
            if (isset($_POST['idModule']) && isset($_GET['parcours'])) {
                
                $managerParcours->bind($_GET['parcours'], $_POST['idModule']);
                $_SESSION['alerte'] = 'Le module a bien été attaché au parcours.';
                header('Location: .');
                header('Location: index.php?parcours_modif=' . $_GET['parcours']);
                exit;

            }
            
        }
        
        if($_GET['action'] == 'unbind') {
            
            if (isset($_POST['idModule']) && isset($_GET['parcours'])) {
                
                $managerParcours->unbind($_GET['parcours'], $_POST['idModule']);               
                $_SESSION['alerte'] = 'Le module a bien été détaché du parcours.';
                header('Location: .');
                header('Location: index.php?parcours_modif=' . $_GET['parcours']);
                exit;

            }
            
        }
        
    }
    
    if($_GET['type'] == 'module') {
        
        if($_GET['action'] == 'create') {
            
            if (isset($_POST['nom'])) {
                
                if ($managerModule->exists($_POST['nom']) == false) { 
                    
                    $moduleCreate = new Module(array(
                        'nom' => $_POST['nom'],
                        'titreCourt' => $_POST['titreCourt'],
                        'titreLong' => $_POST['titreLong'],
                        'hasChat' => $_POST['hasChat'],
                        'ouvert' => $_POST['ouvert'],
                    ));
                    
                    $managerModule->add($moduleCreate);
                    $_SESSION['alerte'] = 'Le module ' . $moduleCreate->getNom() . ' a bien été crée.';
                    header('Location: .');
                    header('Location: index.php?section=admin_modules');
                    exit;

                } else {
                    $_SESSION['alerte'] = 'Ce module existe déjà. Merci de recommencer.';
                    header('Location: index.php?section=admin_modules');
                    exit();
                }

            }
            
        }
        
        if($_GET['action'] == 'delete') {

            $moduleDelete = $managerModule->get((int) $_GET['module']);
            $managerModule->delete($moduleDelete);
            $_SESSION['alerte'] = 'Le module ' . $moduleDelete->getNom() . ' a été supprimé';
            header('Location: index.php?section=admin_modules');
            exit();

        }
        
        if($_GET['action'] == 'update') {
            
            if (isset($_POST['nom']) && isset($_GET['module'])) {
                        
                $moduleUpdate = new Module(array(
                    'nom' => $_POST['nom'],
                    'titreCourt' => $_POST['titreCourt'],
                    'titreLong' => $_POST['titreLong'],
                    'hasChat' => $_POST['hasChat'],
                    'ouvert' => $_POST['ouvert'],
                    'id' => $_GET['module'],
                ));

                $managerModule->update($moduleUpdate);
                $_SESSION['alerte'] = 'Le module ' . $moduleUpdate->getNom() . ' a bien été modifié.';
                header('Location: .');
                header('Location: index.php?section=admin_modules');
                exit;

            }
            
        }
        
        if($_GET['action'] == 'bind') {
            
            if (isset($_POST['idRessource']) && isset($_GET['module'])) {
                                
                $managerModule->bind($_GET['module'], $_POST['idRessource']);
                $_SESSION['alerte'] = 'La ressource a bien été attachée au module.';
                header('Location: .');
                header('Location: index.php?module_modif=' . $_GET['module']);
                exit;

            }
            
        }
        
        if($_GET['action'] == 'unbind') {
            
            if (isset($_POST['idRessource']) && isset($_GET['module'])) {
                
                $managerModule->unbind($_GET['module'], $_POST['idRessource']);               
                $_SESSION['alerte'] = 'La ressource a bien été détachée du module.';
                header('Location: .');
                header('Location: index.php?module_modif=' . $_GET['module']);
                exit;

            }
            
        }
        
    }
    
    if($_GET['type'] == 'ressource') {
        
        if($_GET['action'] == 'create') {
            
            if (isset($_POST['nom'])) {
                
                if ($managerRessource->exists($_POST['nom']) == false) { 
                    
                    $ressourceCreate = new Ressource(array(
                        'nom' => $_POST['nom'],
                        'titre' => $_POST['titre'],
                        'reference' => $_POST['reference'],
                    ));
                    
                    $managerRessource->add($ressourceCreate);
                    $_SESSION['alerte'] = 'La ressource ' . $ressourceCreate->getNom() . ' a bien été crée.';
                    header('Location: .');
                    header('Location: index.php?section=admin_ressources');
                    exit;

                } else {
                    $_SESSION['alerte'] = 'Une ressource est déjà nommée ainsi. Merci de recommencer.';
                    header('Location: index.php?section=admin_ressources');
                    exit();
                }

            }
            
        }
        
        if($_GET['action'] == 'delete') {

            $ressourceDelete = $managerRessource->get((int) $_GET['ressource']);
            $managerRessource->delete($ressourceDelete);
            $_SESSION['alerte'] = 'La ressource ' . $ressourceDelete->getNom() . ' a été supprimée';
            header('Location: index.php?section=admin_ressources');
            exit();

        }
        
        if($_GET['action'] == 'update') {
            
            if (isset($_POST['nom']) && isset($_GET['ressource'])) {
                        
                $ressourceUpdate = new Ressource(array(
                    'nom' => $_POST['nom'],
                    'titre' => $_POST['titre'],
                    'reference' => $_POST['reference'],
                    'id' => $_GET['ressource'],
                ));

                $managerRessource->update($ressourceUpdate);
                $_SESSION['alerte'] = 'La ressource ' . $ressourceUpdate->getNom() . ' a bien été modifiée.';
                header('Location: .');
                header('Location: index.php?section=admin_ressources');
                exit;

            }
            
        }
        
    }
    
    if($_GET['type'] == 'message') {
        
        /* if($_GET['action'] == 'create') {
            
            if (isset($_POST['nom'])) {
                
                if ($managerRessource->exists($_POST['nom']) == false) { 
                    
                    $ressourceCreate = new Ressource(array(
                        'nom' => $_POST['nom'],
                        'titre' => $_POST['titre'],
                        'reference' => $_POST['reference'],
                    ));
                    
                    $managerRessource->add($ressourceCreate);
                    $_SESSION['alerte'] = 'La ressource ' . $ressourceCreate->getNom() . ' a bien été crée.';
                    header('Location: .');
                    header('Location: index.php?section=admin_ressources');
                    exit;

                } else {
                    $_SESSION['alerte'] = 'Une ressource est déjà nommée ainsi. Merci de recommencer.';
                    header('Location: index.php?section=admin_ressources');
                    exit();
                }

            }
            
        } */
        
        if($_GET['action'] == 'delete') {

            $messageDelete = $managerMessage->get((int) $_GET['message']);
            $managerMessage->delete($messageDelete);
            $_SESSION['alerte'] = 'Le message "' . $messageDelete->getMessage() . '" a été supprimé';
            header('Location: index.php?section=admin_messages');
            exit();

        }
        
        if($_GET['action'] == 'update') {
            
            if (isset($_POST['message'])) {
                        
                $messageUpdate = new Message(array(
                    'message' => $_POST['message'],
                    'id' => $_GET['message'],
                ));

                $managerMessage->update($messageUpdate);
                $_SESSION['alerte'] = 'Le message ' . $messageUpdate->getMessage() . ' a bien été modifié.';
                header('Location: .');
                header('Location: index.php?section=admin_messages');
                exit;

            }
            
        }
        
    }
    
    if($_GET['type'] == 'question') {
        
        if($_GET['action'] == 'create') {
            
            if (isset($_POST['question'])) {
                             
                $questionCreate = new Question(array(
                    'type' => $_POST['type'],
                    'question' => $_POST['question'],
                    'description' => $_POST['description'],
                ));

                $managerQuestion->add($questionCreate);
                $_SESSION['alerte'] = 'La question ' . $questionCreate->getQuestion() . ' a bien été crée.';
                header('Location: .');
                header('Location: index.php?section=admin_questions');
                exit;
                
            }
            
        }
        
        if($_GET['action'] == 'delete') {

            $questionDelete = $managerQuestion->get((int) $_GET['question']);
            $managerQuestion->delete($questionDelete);
            $_SESSION['alerte'] = 'La question ' . $questionDelete->getQuestion() . ' a été supprimée';
            header('Location: index.php?section=admin_questions');
            exit();

        }
        
        if($_GET['action'] == 'update') {
            
            if (isset($_POST['question'])) {
                        
                $questionUpdate = new Question(array(
                    'type' => $_POST['type'],
                    'question' => $_POST['question'],
                    'description' => $_POST['description'],
                    'id' => $_GET['question'],
                ));

                $managerQuestion->update($questionUpdate);
                $_SESSION['alerte'] = 'La ressource ' . $questionUpdate->getQuestion() . ' a bien été modifiée.';
                header('Location: .');
                header('Location: index.php?section=admin_questions');
                exit;

            }
            
        }
        
    }
    
    if($_GET['type'] == 'feedback') {

        if($_GET['action'] == 'create') {
            
            if(isset($_POST['score']) && isset($_POST['explication']) && isset($_POST['amelioration'])) {
                
                $feedbackCreate = new Feedback(array(
                    'score' => $_POST['score'],
                    'explication' => $_POST['explication'],
                    'amelioration' => $_POST['amelioration'],
                    'idSeance' => $_POST['idSeance'],
                ));

                $managerFeedback->add($feedbackCreate);
                header('Location: ' . $seance->getFichier());
                exit();

            }

        }

    }

    if($_GET['type'] == 'seance') {

        if($_GET['action'] == 'create') {

            if (!empty($_POST['nom']) && !empty($_POST['code'])) {
                
                if (!empty($_FILES['fichier']['tmp_name'])) {

                    // Vérifie s'il n'y a pas d'erreur
                    if ($_FILES['fichier']['error'] > 0) $erreur = "Erreur lors du transfert";

                    // Vérifie la taille maximale
                    if ($_FILES['fichier']['size'] > 12582912) $erreur = "Le fichier est trop gros";

                    // A faire : Vérifier le type de fichier

                    // Déplace le fichier
                    $target_dir = 'uploads/';
                    $melange = md5(uniqid(rand(), true));
                    $target_nomfichier = basename($_FILES['fichier']['name']);
                    $target_file = $target_dir . $melange . $target_nomfichier;

                    move_uploaded_file($_FILES['fichier']['tmp_name'], $target_file);
                    
                } else {
                    
                    $target_file = 'null';
                    
                }

                if ($managerSeance->exists($_POST['code']) == false) {

                    $seanceCreate = new Seance(array(
                        'nom' => $_POST['nom'],
                        'code' => $_POST['code'],
                        'fichier' => $target_file,
                    ));

                    $managerSeance->add($seanceCreate);
                    $_SESSION['alerte'] = 'Le séance ' . $seanceCreate->getNom() . ' a bien été crée.';
                    header('Location: .');
                    header('Location: index.php?section=admin_seances');
                    exit;

                } else {

                    $_SESSION['alerte'] = 'Cette séance existe déjà. Merci de recommencer.';
                    header('Location: index.php?section=admin_seances');
                    exit();
                }

            } else {

                $_SESSION['alerte'] = 'Une information est manquante';

            }      

        }

        if($_GET['action'] == 'update') {

            if (isset($_POST['nom']) && isset($_POST['code']) && isset($_POST['fichier']) && isset($_GET['seance'])) {

                $seanceUpdate = new Seance(array(
                    'nom' => $_POST['nom'],
                    'code' => $_POST['code'],
                    'fichier' => $_POST['fichier'],
                    'id' => $_GET['seance'],
                ));

                $managerSeance->update($seanceUpdate);
                $_SESSION['alerte'] = 'La séance ' . $seanceUpdate->getNom() . ' a bien été modifiée.';
                header('Location: .');
                header('Location: index.php?section=admin_seances');
                exit;   

            } else {

                $_SESSION['alerte'] = 'Une information est manquante';

            }

        }

        if($_GET['action'] == 'delete') {

            $seanceDelete = $managerSeance->get((int) $_GET['seance']);
            $managerSeance->delete($seanceDelete);
            $_SESSION['alerte'] = 'La séance ' . $seanceDelete->getNom() . ' a été supprimée';
            header('Location: index.php?section=admin_seances');
            exit();

        }

    }
    
} else {
    
    $_SESSION['alerte'] = 'Vous devez être administrateur pour réaliser cette action.';
    
}