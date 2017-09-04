<?php

class testDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
//    public function add(Groupe $groupe) {
//        $q = $this->_db->prepare('INSERT INTO l_groupes(nom, code) VALUES(:nom, :code)');
//        $q->execute(array(
//            'nom' => $groupe->getNom(),
//            'code' => $groupe->getCode(),
//        ));
//        
//        $groupe->hydrate([
//            'id' => $this->_db->lastInsertId(),
//        ]);
//    }
    
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT id, nom, code, nbQuestions, instructions FROM l_tests WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Test($donnees);
        } else {            
            $q = $this->_db->prepare('SELECT id, nom, code, nbQuestions, instructions FROM l_tests WHERE code = :code');
            $q->execute(array('code' => $info));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Test($donnees);
        }
    }
    
//    public function update(Groupe $groupe) {
//        $q = $this->_db->prepare('UPDATE l_groupes SET nom = :nom, code = :code WHERE id = :id');
//        $q->execute(array(
//            'nom' => $groupe->getNom(),
//            'code' => $groupe->getCode(),
//            'id' => $groupe->getId(),
//        ));
//    }
    
//    public function delete(Groupe $groupe) {
//        $this->_db->exec('DELETE FROM l_groupes WHERE id = ' . $groupe->getId());
//    }
    
//    public function count() {
//        return $this->_db->query('SELECT COUNT(*) FROM l_groupes')->fetchColumn();
//    }
    
//    public function exists($info) {
//        if (is_int($info)) {
//            return (bool) $this->_db->query('SELECT COUNT(*) FROM l_groupes WHERE id = ' . $info)->fetchColumn();
//        } else {
//        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_groupes WHERE code = :code');
//        $q->execute(array('code' => $info));
//        return (bool) $q->fetchColumn();
//        }
//    }
    
}