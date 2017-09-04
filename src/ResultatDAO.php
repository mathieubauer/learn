<?php

class ResultatDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Resultat $resultat) {
        $q = $this->_db->prepare('INSERT INTO l_resultats(idUser, idTest, noQuestion, reponse) VALUES(:idUser, :idTest, :noQuestion, :reponse)');
        $q->execute(array(
            'idUser' => $resultat->getIdUser(),
            'idTest' => $resultat->getIdTest(),
            'noQuestion' => $resultat->getNoQuestion(),
            'reponse' => $resultat->getReponse(),
        ));
        
        $resultat->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function getAll($idUser, $idTest) {
        $resultats = [];
        $q = $this->_db->prepare('SELECT noQuestion, reponse FROM l_resultats WHERE idUser = :idUser AND idTest = :idTest');
        $q->execute(array(
            'idUser' => $idUser,
            'idTest' => $idTest,
        ));
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $resultats[] = new Resultat($donnees);
        }
        return $resultats;
    }
    
//    public function get($info) {
//        if (is_int($info)) {
//            $q = $this->_db->query('SELECT id, nom, code FROM l_tests WHERE id = ' . $info);
//            $donnees = $q->fetch(PDO::FETCH_ASSOC);
//            return new Test($donnees);
//        } else {            
//            $q = $this->_db->prepare('SELECT id, nom, code FROM l_tests WHERE code = :code');
//            $q->execute(array('code' => $info));
//            $donnees = $q->fetch(PDO::FETCH_ASSOC);
//            return new Test($donnees);
//        }
//    }
    
//    public function update(Message $message) {
//        $q = $this->_db->prepare('UPDATE l_messages SET message = :message, date = NOW() WHERE id = :id');
//        $q->execute(array(
//            'message' => $message->getMessage(),
//            'id' => $message->getId(),
//        ));
//        // A faire : date d'édition et statut édité
//    }
    
    public function delete($idUser, $idTest) {
        $this->_db->exec('DELETE FROM l_resultats WHERE idUser = ' . $idUser . ' AND idTest = ' . $idTest);
    }
    
    public function count($idUser, $idTest) {
        return $this->_db->query('SELECT COUNT(*) FROM l_resultats WHERE idUser = ' . $idUser . ' AND idTest = ' . $idTest)->fetchColumn();
    }
    
    public function exists($idUser, $idTest, $noQuestion) {
        return (bool) $this->_db->query('SELECT COUNT(*) FROM l_resultats WHERE idUser = ' . $idUser . ' AND idTest = ' . $idTest . ' AND noQuestion = ' . $noQuestion)->fetchColumn();
    }
        
}