<?php

class GroupeDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Groupe $groupe) {
        $q = $this->_db->prepare('INSERT INTO l_groupes(nom, code) VALUES(:nom, :code)');
        $q->execute(array(
            'nom' => $groupe->getNom(),
            'code' => $groupe->getCode(),
        ));
        
        $groupe->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT id, nom, code FROM l_groupes WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Groupe($donnees);
        } else {            
            $q = $this->_db->prepare('SELECT id, nom, code FROM l_groupes WHERE code = :code');
            $q->execute(array('code' => $info));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Groupe($donnees);
        }
    }
    
    public function getList() {
        $groupes = [];
        $q = $this->_db->query('SELECT id, nom, code FROM l_groupes');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $groupes[] = new Groupe($donnees);
        }
        return $groupes;
    }
    
    public function getParcoursByGroupe($idGroupe) {
        $parcoursByGroupe = [];
            $sql = 'SELECT p.id id, p.nom nom, p.titre titre, p.soustitre soustitre
            FROM l_groupe_parcours gp
            INNER JOIN l_parcours p
            ON p.id = gp.idParcours
            WHERE gp.idGroupe = ' . $idGroupe;
            $q = $this->_db->query($sql);
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
                $parcoursByGroupe[] = new Parcours($donnees);
            }
        return $parcoursByGroupe;    
    }
    
    public function getParcoursUniqueByGroupe($idGroupe) {
            $sql = 'SELECT p.id id, p.nom nom, p.titre titre, p.soustitre soustitre
            FROM l_groupe_parcours gp
            INNER JOIN l_parcours p
            ON p.id = gp.idParcours
            WHERE gp.idGroupe = ' . $idGroupe;
            $q = $this->_db->query($sql);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Parcours($donnees);
    }
    
    public function update(Groupe $groupe) {
        $q = $this->_db->prepare('UPDATE l_groupes SET nom = :nom, code = :code WHERE id = :id');
        $q->execute(array(
            'nom' => $groupe->getNom(),
            'code' => $groupe->getCode(),
            'id' => $groupe->getId(),
        ));
    }
    
    public function delete(Groupe $groupe) {
        $this->_db->exec('DELETE FROM l_groupes WHERE id = ' . $groupe->getId());
    }
    
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_groupes')->fetchColumn();
    }
    
    public function countParcoursByGroupe($idGroupe) {
        return $this->_db->query('SELECT COUNT(*) FROM l_groupe_parcours WHERE idGroupe = ' . $idGroupe)->fetchColumn();
    }
    
    public function exists($info) {
        if (is_int($info)) {
            return (bool) $this->_db->query('SELECT COUNT(*) FROM l_groupes WHERE id = ' . $info)->fetchColumn();
        } else {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_groupes WHERE code = :code');
        $q->execute(array('code' => $info));
        return (bool) $q->fetchColumn();
        }
    }
    
    public function credentials(Groupe $groupe) {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_groupes WHERE code = :code');
        $q->execute(array(
            'code' => $groupe->getCode(),
        ));
        return (bool) $q->fetchColumn();
    }
    
    public function bind($idGroupe, $idParcours) {
        $q = $this->_db->prepare('INSERT INTO l_groupe_parcours(idGroupe, idParcours) VALUES(:idGroupe, :idParcours)');
        $q->execute(array(
            'idGroupe' => $idGroupe,
            'idParcours' => $idParcours,
        ));
    }
    
    public function unbind($idGroupe, $idParcours) {
        $q = $this->_db->prepare('DELETE FROM l_groupe_parcours WHERE idGroupe = :idGroupe AND idParcours = :idParcours');
        $q->execute(array(
            'idGroupe' => $idGroupe,
            'idParcours' => $idParcours,
        ));
    } 
    
}