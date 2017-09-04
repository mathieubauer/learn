<?php

class User {
    
    private $_id, $_username, $_password, $_role, $_dateInscription, $_dateConnexion, $_idGroupe;
    
    // Constructeur
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    // Hydratation
    // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);            // Crée le nom de la méthode (première lettre en majuscule)
            if (method_exists($this, $method)) {        // Vérifie que la méthode existe
                $this->$method($value);                 // ex : $this->setId($id); 
            }
        }
    }
    
    // Getters
    public function getId() {
        return $this->_id;
    }
    
    public function getUsername() {
        return $this->_username;
    }
    
    public function getPassword() {
        return $this->_password;
    }
    
    public function getRole() {
        return $this->_role;
    }
    
    public function getDateInscription() {
        return $this->_dateInscription;
    }
    
    public function getDateConnexion() {
        return $this->_dateConnexion;
    }
    
    public function getIdGroupe() {
        return $this->_idGroupe;
    }
    
    
    // Setters
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setUsername($username) {
         if (is_string($username)) {
            $this->_username = $username;
        }
    }
    
    public function setPassword($password) {
        // Ajouter contrôles, SHA, etc.
         if (is_string($password)) {
            $this->_password = $password;
        }
    }
    
    public function setRole($role) {
         if (is_string($role)) {
            $this->_role = $role;
        }
    }
    
    public function setDateInscription($dateInscription) {
        // A faire : ajouter des contrôles sur la date
        $this->_dateInscription = $dateInscription;
    }
    
    public function setDateConnexion($dateConnexion) {
        // A faire : ajouter des contrôles sur la date
        $this->_dateConnexion = $dateConnexion;
    }
    
    public function setIdGroupe($idGroupe) {
        $idGroupe = (int) $idGroupe;
        if ($idGroupe > 0) {
            $this->_idGroupe = $idGroupe;
        }
    }
    
}