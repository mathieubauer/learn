<?php

class ParcoursDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Parcours $parcours) {
        $q = $this->_db->prepare('INSERT INTO l_parcours(nom, titre, soustitre) VALUES(:nom, :titre, :soustitre)');
        $q->execute(array(
            'nom' => $parcours->getNom(),
            'titre' => $parcours->getTitre(),
            'soustitre' => $parcours->getSoustitre(),
        ));
        
        $parcours->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT id, nom, titre, soustitre FROM l_parcours WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Parcours($donnees);
        } else {            
            $q = $this->_db->query('SELECT id, nom, titre, soustitre FROM l_parcours WHERE nom = :nom');
            $q->execute(array('nom' => $info));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Parcours($donnees);
        }
    }
    
    public function getList() {
        $parcours = [];
        $q = $this->_db->query('SELECT id, nom, titre, soustitre FROM l_parcours');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $parcours[] = new Parcours($donnees);
        }
        return $parcours;
    }
    
    public function getModulesByParcours($idParcours) {
        $modulesByParcours = [];
            $sql = 'SELECT m.id id, m.nom nom, m.titreCourt titreCourt, m.titreLong titreLong, m.hasChat hasChat, m.ouvert ouvert
            FROM l_parcours_module pm
            INNER JOIN l_modules m
            ON m.id = pm.idModule
            WHERE pm.idParcours = ' . $idParcours;
            $q = $this->_db->query($sql);
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $modulesByParcours[] = new Module($donnees);
            }
        return $modulesByParcours;    
    }
    
    public function getModuleUniqueByParcours($idParcours) {
            $sql = 'SELECT m.id id, m.nom nom, m.titreCourt titreCourt, m.titreLong titreLong, m.hasChat hasChat, m.ouvert ouvert
            FROM l_parcours_module pm
            INNER JOIN l_modules m
            ON m.id = pm.idModule
            WHERE pm.idParcours = ' . $idParcours;
            $q = $this->_db->query($sql);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Module($donnees);
    }
    
    public function getFirstModuleByParcours($idParcours) {
            $sql = 'SELECT m.id id, m.nom nom, m.titreCourt titreCourt, m.titreLong titreLong, m.hasChat hasChat, m.ouvert ouvert
            FROM l_parcours_module pm
            INNER JOIN l_modules m
            ON m.id = pm.idModule
            WHERE pm.idParcours = ' . $idParcours;
            $q = $this->_db->query($sql);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Module($donnees);
    }
    
    public function update(Parcours $parcours) {
        $q = $this->_db->prepare('UPDATE l_parcours SET nom = :nom, titre = :titre, soustitre = :soustitre WHERE id = :id');
        $q->execute(array(
            'nom' => $parcours->getNom(),
            'titre' => $parcours->getTitre(),
            'soustitre' => $parcours->getSoustitre(),
            'id' => $parcours->getId(),
        ));
    }
    
    public function delete(Parcours $parcours) {
        $this->_db->exec('DELETE FROM l_parcours WHERE id = ' . $parcours->getId());
    }
    
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_parcours')->fetchColumn();
    }
    
    public function countModulesByParcours($idParcours) {
        return $this->_db->query('SELECT COUNT(*) FROM l_parcours_module WHERE idParcours = ' . $idParcours)->fetchColumn();
    }
    
    public function exists($info) {
        if (is_int($info)) {
            return (bool) $this->_db->query('SELECT COUNT(*) FROM l_parcours WHERE id = ' . $info)->fetchColumn();
        } else {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_parcours WHERE nom = :nom');
        $q->execute(array('nom' => $info));
        return (bool) $q->fetchColumn();
        }
    }
    
    public function bind($idParcours, $idModule) {
        $q = $this->_db->prepare('INSERT INTO l_parcours_module(idParcours, idModule) VALUES(:idParcours, :idModule)');
        $q->execute(array(
            'idParcours' => $idParcours,
            'idModule' => $idModule,
        ));
    }
    
    public function unbind($idParcours, $idModule) {
        $q = $this->_db->prepare('DELETE FROM l_parcours_module WHERE idParcours = :idParcours AND idModule = :idModule');
        $q->execute(array(
            'idParcours' => $idParcours,
            'idModule' => $idModule,
        ));
    }    
    
}