<?php

class RessourceDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Ressource $ressource) {
        $q = $this->_db->prepare('INSERT INTO l_ressources(nom, titre, reference) VALUES(:nom, :titre, :reference)');
        $q->execute(array(
            'nom' => $ressource->getNom(),
            'titre' => $ressource->getTitre(),
            'reference' => $ressource->getReference(),
        ));
        
        $ressource->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT id, nom, titre, reference FROM l_ressources WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Ressource($donnees);
        } else {            
            $q = $this->_db->prepare('SELECT id, nom, titre, reference FROM l_ressources WHERE nom = :nom');
            $q->execute(array('nom' => $info));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Ressource($donnees);
        }
    }
    
    public function getList() {
        $ressources = [];
        $q = $this->_db->query('SELECT id, nom, titre, reference FROM l_ressources');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $ressources[] = new Ressource($donnees);
        }
        return $ressources;
    }
    
    public function update(Ressource $ressource) {
        $q = $this->_db->prepare('UPDATE l_ressources SET nom = :nom, titre = :titre, reference = :reference WHERE id = :id');
        $q->execute(array(
            'nom' => $ressource->getNom(),
            'titre' => $ressource->getTitre(),
            'reference' => $ressource->getReference(),
            'id' => $ressource->getId(),
        ));
    }
    
    public function delete(Ressource $ressource) {
        $this->_db->exec('DELETE FROM l_ressources WHERE id = ' . $ressource->getId());
    }
    
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_ressources')->fetchColumn();
    }
    
    public function exists($info) {
        if (is_int($info)) {
            return (bool) $this->_db->query('SELECT COUNT(*) FROM l_ressources WHERE id = ' . $info)->fetchColumn();
        } else {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_ressources WHERE nom = :nom');
        $q->execute(array('nom' => $info));
        return (bool) $q->fetchColumn();
        }
    }
    
}