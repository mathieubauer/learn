<?php

class SeanceDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Seance $seance) {
        $q = $this->_db->prepare('INSERT INTO l_seances(nom, code, fichier) VALUES(:nom, :code, :fichier)');
        $q->execute(array(
            'nom' => $seance->getNom(),
            'code' => $seance->getCode(),
            'fichier' => $seance->getFichier(),
        ));
        
        $seance->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT * FROM l_seances WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Seance($donnees);
        } else {            
            $q = $this->_db->prepare('SELECT * FROM l_seances WHERE code = :code');
            $q->execute(array('code' => $info));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Seance($donnees);
        }
    }
    
    public function getList() {
        $seances = [];
        $q = $this->_db->query('SELECT * FROM l_seances');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $seances[] = new Seance($donnees);
        }
        return $seances;
    }
    
    public function getFeedbacksBySeance($idSeance) {
        $feedbacksBySeance = [];
            $sql = 'SELECT f.id id, f.score score, f.explication explication, f.amelioration amelioration
            FROM l_feedbacks f
            INNER JOIN l_seances s
            ON s.id = f.idSeance
            WHERE f.idSeance = ' . $idSeance;
            $q = $this->_db->query($sql);
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $feedbacksBySeance[] = new Feedback($donnees);
            }
        return $feedbacksBySeance;    
    }
    
    public function update(Seance $seance) {
        $q = $this->_db->prepare('UPDATE l_seances SET nom = :nom, code = :code, fichier = :fichier WHERE id = :id');
        $q->execute(array(
            'nom' => $seance->getNom(),
            'code' => $seance->getCode(),
            'fichier' => $seance->getFichier(),
            'id' => $seance->getId(),
        ));
    }
    
    public function delete(Seance $seance) {
        $this->_db->exec('DELETE FROM l_seances WHERE id = ' . $seance->getId());
    }
    
    public function exists($info) {
        if (is_int($info)) {
            return (bool) $this->_db->query('SELECT COUNT(*) FROM l_seances WHERE id = ' . $info)->fetchColumn();
        } else {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_seances WHERE code = :code');
        $q->execute(array('code' => $info));
        return (bool) $q->fetchColumn();
        }
    }
    
    public function credentials(Seance $seance) {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_seances WHERE code = :code');
        $q->execute(array(
            'code' => $seance->getCode(),
        ));
        return (bool) $q->fetchColumn();
    }
    
    /* PORTION DE CODE SI BESOIN DE COMPTER, ET LE RESTE
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_modules')->fetchColumn();
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