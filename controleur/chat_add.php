<?php
session_start();
include_once('../app/connexion_sql.php');  

if (isset($_POST['message']) && isset($_POST['idUser']) && isset($_POST['idModule']) && isset($_POST['username'])) {
    
    $idUser = $_POST['idUser'];
    $idModule = $_POST['idModule'];
    $username = $_POST['username'];
    $message = $_POST['message'];
    $message = nl2br($message);
        
    $sql = 'INSERT INTO l_messages(idUser, idModule, message, date, username) VALUES(:idUser, :idModule, :message, NOW(), :username)';
    $requete = $db->prepare($sql);
    $requete->execute(array(
        'idUser' => $idUser,
        'idModule' => $idModule,
        'message' => $message,
        'username' => $username,
    ));
    
    $retour = array('username' => $username, 'message' => $message);
    $retourJson = json_encode($retour);
    echo $retourJson;
    
}; 