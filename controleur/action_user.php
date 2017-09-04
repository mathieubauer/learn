<?php

if (isset($_SESSION['user'])) {

    $user = $_SESSION['user'];

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

        if($_GET['action_user'] == 'delete') {

            $messageDelete = $managerMessage->get((int) $_GET['message']);
            $managerMessage->delete($messageDelete);
            $_SESSION['alerte'] = 'Le message "' . $messageDelete->getMessage() . '" a été supprimé';
            header('Location: index.php');
            exit();

        }

        if($_GET['action_user'] == 'update') {

            if (isset($_POST['message'])) {

                $messageUpdate = new Message(array(
                    'message' => $_POST['message'],
                    'id' => $_GET['message'],
                ));

                $managerMessage->update($messageUpdate);
                $_SESSION['alerte'] = 'Le message ' . $messageUpdate->getMessage() . ' a bien été modifié.';
                header('Location: .');
                header('Location: index.php');
                exit;

            }

        }

    }

    if($_GET['type'] == 'feedback') {

        if($_GET['action_user'] == 'create') {

            if(isset($_POST['score']) && isset($_POST['explication']) && isset($_POST['amelioration'])) {

                $feedbackCreate = new Feedback(array(
                    'score' => $_POST['score'],
                    'explication' => $_POST['explication'],
                    'amelioration' => $_POST['amelioration'],
                    'idSeance' => $_POST['idSeance'],
                ));

                $managerFeedback->add($feedbackCreate);
                $seance = $managerSeance->get((int) $_POST['idSeance']);
                header('Location: ' . $seance->getFichier());
                exit();

            }

        }

    }

    if($_GET['type'] == 'resultat') {

        if($_GET['action_user'] == 'create_init') {

            if(isset($_POST['idUser']) && isset($_POST['idTest'])) {

                $resultatCreate = new Resultat(array(
                    'idUser' => $_POST['idUser'],
                    'idTest' => $_POST['idTest'],
                    'noQuestion' => 0,
                    'reponse' => 'Consigne',
                ));

            $managerResultat->add($resultatCreate);
            header('Location: index.php?test=' . $_POST['idTest']);
            exit();

            }

        }

        if($_GET['action_user'] == 'create') {

            if(isset($_POST['idUser']) && isset($_POST['idTest']) && isset($_POST['noQuestion']) && !empty($_POST['reponse'])) {

                $resultatCreate = new Resultat(array(
                    'idUser' => $_POST['idUser'],
                    'idTest' => $_POST['idTest'],
                    'noQuestion' => $_POST['noQuestion'],
                    'reponse' => $_POST['reponse'],
                ));

                $managerResultat->add($resultatCreate);

            }

            header('Location: index.php?test=' . $_POST['idTest']);
            exit();

        }

        if($_GET['action_user'] == 'delete') {

            if(isset($_POST['idUser']) && isset($_POST['idTest'])) {

                $managerResultat->delete($_POST['idUser'], $_POST['idTest']);
                $_SESSION['alerte'] = 'Le questionnaire a été remis à zéro';
                header('Location: index.php');
                exit();

            }

        }

    }
    
} else {
    
    $_SESSION['alerte'] = 'Hors connexion. Merci de vous identifier.';
    header('Location: index.php');
    
}