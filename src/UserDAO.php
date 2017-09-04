<?php

class UserDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(User $user) {
        $q = $this->_db->prepare('INSERT INTO l_users(username, password, role, dateInscription, idGroupe) VALUES(:username, :password, :role, NOW(), :idGroupe)');
        $q->execute(array(
            'username' => $user->getUsername(),
            'password' => $user->getPassword(), // SHA ?
            'role' => $user->getRole(),
            'idGroupe' => $user->getIdGroupe(),
        ));
        
        $user->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($info) {
        if (is_int($info)) {
            $q = $this->_db->query('SELECT * FROM l_users WHERE id = ' . $info);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new User($donnees);
        } else {            
            $q = $this->_db->prepare('SELECT * FROM l_users WHERE username = :username');
            $q->execute(array(
                'username' => $info,
            ));
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new User($donnees);
        }
    }
    
    public function getList() {
        $users = [];
        $q = $this->_db->query('SELECT * FROM l_users');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($donnees);
        }
        return $users;
    }
    
    public function update(User $user) {
        $q = $this->_db->prepare('UPDATE l_users SET username = :username, role = :role, idGroupe = :idGroupe WHERE id = :id');
        $q->execute(array(
            'username' => $user->getUsername(),
            'role' => $user->getRole(),
            'idGroupe' => $user->getIdGroupe(),
            'id' => $user->getId(),
        ));
    }
    
    public function updateConnexion(User $user) {
        $q = $this->_db->prepare('UPDATE l_users SET dateConnexion = NOW() WHERE id = :id');
        $q->execute(array(
            'id' => $user->getId(),
        ));
    }
    
    public function delete(User $user) {
        $this->_db->exec('DELETE FROM l_users WHERE id = ' . $user->getId());
    }
    
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_users')->fetchColumn();
    }
    
    public function exists($info) {
        if (is_int($info)) {
            return (bool) $this->_db->query('SELECT COUNT(*) FROM l_users WHERE id = ' . $info)->fetchColumn();
        } else {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_users WHERE username = :username');
        $q->execute(array('username' => $info));
        return (bool) $q->fetchColumn();
        }
    }
    
    public function credentials(User $user) {
        $q = $this->_db->prepare('SELECT COUNT(*) FROM l_users WHERE username = :username AND password = :password');
        $q->execute(array(
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),
        ));
        return (bool) $q->fetchColumn();
    }
    
    
}