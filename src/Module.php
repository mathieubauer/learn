<?php

class Module {
    
    private $_id, $_nom, $_titreCourt, $_titreLong, $_hasChat, $_ouvert;
    
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
    
    public function getNom() {
        return $this->_nom;
    }
    
    public function getTitreCourt() {
        return $this->_titreCourt;
    }
    
    public function getTitreLong() {
        return $this->_titreLong;
    }
    
    public function getHasChat() {
        return $this->_hasChat;
    }
    
    public function getOuvert() {
        return $this->_ouvert;
    }
    
    
    // Setters
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setNom($nom) {
         if (is_string($nom)) {
            $this->_nom = $nom;
        }
    }
    
    public function setTitreCourt($titreCourt) {
         if (is_string($titreCourt)) {
            $this->_titreCourt = $titreCourt;
        }
    }
    
    public function setTitreLong($titreLong) {
         if (is_string($titreLong)) {
            $this->_titreLong = $titreLong;
        }
    }
    
    public function setHasChat($hasChat) {
        $hasChat = (int) $hasChat;
        if ($hasChat == 0 or $hasChat == 1) {
            $this->_hasChat = $hasChat;
        }
    }
    
    public function setOuvert($ouvert) {
        $ouvert = (int) $ouvert;
        if ($ouvert == 0 or $ouvert == 1) {
            $this->_ouvert = $ouvert;
        }
    }
    
}