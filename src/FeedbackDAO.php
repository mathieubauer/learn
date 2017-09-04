<?php

class FeedbackDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Feedback $feedback) {
        $q = $this->_db->prepare('INSERT INTO l_feedbacks(score, explication, amelioration, idSeance) VALUES(:score, :explication, :amelioration, :idSeance)');
        $q->execute(array(
            'score' => $feedback->getScore(),
            'explication' => $feedback->getExplication(),
            'amelioration' => $feedback->getAmelioration(),
            'idSeance' => $feedback->getIdSeance(),
        ));
        
        $feedback->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    /* PORTION DE CODE SI BESOIN DE RECUPERER INDIVIDUELLEMENT (mais je ne vois pas comment ni pourquoi)
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT * FROM l_modules WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Module($donnees);
        } else {            
            $q = $this->_db->prepare('SELECT * FROM l_modules WHERE nom = :nom');
            $q->execute(array('nom' => $info));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Module($donnees);
        }
    }
    */
    
    public function getList() {
        $feedbacks = [];
        $q = $this->_db->query('SELECT * FROM l_feedbacks');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $feedbacks[] = new Feedback($donnees);
        }
        return $feedbacks;
    }
    
    /* PORTION DE CODE SI BESOIN DE MODIFIER LES FEEDBACKS (mais je ne vois pas pourquoi)
    public function update(Feedback $feedback) {
        $q = $this->_db->prepare('UPDATE l_feedbacks SET nom = :nom, titreCourt = :titreCourt, titreLong = :titreLong, hasChat = :hasChat, ouvert = :ouvert WHERE id = :id');
        $q->execute(array(
            'nom' => $module->getNom(),
            'titreCourt' => $module->getTitreCourt(),
            'titreLong' => $module->getTitreLong(),
            'hasChat' => $module->getHasChat(),
            'ouvert' => $module->getOuvert(),
            'id' => $module->getId(),
        ));
    }
    */
    
    public function delete(Feedback $feedback) {
        $this->_db->exec('DELETE FROM l_feedbacks WHERE id = ' . $feedback->getId());
    }
    
    /* PORTION DE CODE SI BESOIN DE COMPTER, ET LE RESTE
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_modules')->fetchColumn();
    }
    
    public function exists($info) {
        if (is_int($info)) {
            return (bool) $this->_db->query('SELECT COUNT(*) FROM l_modules WHERE id = ' . $info)->fetchColumn();
        } else {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_modules WHERE nom = :nom');
        $q->execute(array('nom' => $info));
        return (bool) $q->fetchColumn();
        }
    }
    
    public function bind($idModule, $idRessource) {
        $q = $this->_db->prepare('INSERT INTO l_module_ressource(idModule, idRessource) VALUES(:idModule, :idRessource)');
        $q->execute(array(
            'idModule' => $idModule,
            'idRessource' => $idRessource,
        ));
    }
    
    public function unbind($idModule, $idRessource) {
        $q = $this->_db->prepare('DELETE FROM l_module_ressource WHERE idModule = :idModule AND idRessource = :idRessource');
        $q->execute(array(
            'idModule' => $idModule,
            'idRessource' => $idRessource,
        ));
    }
    */
    
}