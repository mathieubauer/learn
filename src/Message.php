<?php

class Message {
    
    private $_id, $_idUser, $_idModule, $_message, $_date, $_username;
    
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
    
    public function getIdUser() {
        return $this->_idUser;
    }
    
    public function getIdModule() {
        return $this->_idModule;
    }
    
    public function getMessage() {
        return $this->_message;
    }
    
    public function getDate() {
        return $this->_date;
    }
    
    public function getUsername() {
        return $this->_username;
    }
    
    
    // Setters
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setIdUser($idUser) {
        $idUser = (int) $idUser;
        if ($idUser > 0) {
            $this->_idUser = $idUser;
        }
    }
    
    public function setIdModule($idModule) {
        $idModule = (int) $idModule;
        if ($idModule > 0) {
            $this->_idModule = $idModule;
        }
    }
    
    public function setMessage($message) {
         if (is_string($message)) {
            $this->_message = $message;
        }
    }
    
    public function setDate($date) {
        // A faire : ajouter des contrôles sur la date
        $this->_date = $date;
    }
    
    public function setUsername($username) {
         if (is_string($username)) {
            $this->_username = $username;
        }
    }
    
}