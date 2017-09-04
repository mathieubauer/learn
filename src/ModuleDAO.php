<?php

class ModuleDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Module $module) {
        $q = $this->_db->prepare('INSERT INTO l_modules(nom, titreCourt, titreLong, hasChat, ouvert) VALUES(:nom, :titreCourt, :titreLong, :hasChat, :ouvert)');
        $q->execute(array(
            'nom' => $module->getNom(),
            'titreCourt' => $module->getTitreCourt(),
            'titreLong' => $module->getTitreLong(),
            'hasChat' => $module->getHasChat(),
            'ouvert' => $module->getOuvert(),
        ));
        
        $module->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT * FROM l_modules WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Module($donnees);
        } else {            
            $q = $this->_db->query('SELECT * FROM l_modules WHERE nom = :nom');
            $q->execute(array('nom' => $info));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Module($donnees);
        }
    }
    
    public function getList() {
        $modules = [];
        $q = $this->_db->query('SELECT * FROM l_modules');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $modules[] = new Module($donnees);
        }
        return $modules;
    }
    
    public function getRessourcesByModule($idModule) {
        $ressourcesByModule = [];
            $sql = 'SELECT r.id id, r.nom nom, r.titre titre, r.reference reference
            FROM l_module_ressource mr
            INNER JOIN l_ressources r
            ON r.id = mr.idRessource
            WHERE mr.idModule = ' . $idModule;
            $q = $this->_db->query($sql);
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $ressourcesByModule[] = new Ressource($donnees);
            }
        return $ressourcesByModule;    
    }
    
    public function update(Module $module) {
        $q = $this->_db->prepare('UPDATE l_modules SET nom = :nom, titreCourt = :titreCourt, titreLong = :titreLong, hasChat = :hasChat, ouvert = :ouvert WHERE id = :id');
        $q->execute(array(
            'nom' => $module->getNom(),
            'titreCourt' => $module->getTitreCourt(),
            'titreLong' => $module->getTitreLong(),
            'hasChat' => $module->getHasChat(),
            'ouvert' => $module->getOuvert(),
            'id' => $module->getId(),
        ));
    }
    
    public function delete(Module $module) {
        $this->_db->exec('DELETE FROM l_modules WHERE id = ' . $module->getId());
    }
    
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
    
}