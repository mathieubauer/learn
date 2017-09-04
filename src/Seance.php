<?php

class Seance {
    
    private $_id, $_nom, $_code, $_fichier;
    
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
    
    public function getCode() {
        return $this->_code;
    }
    
    public function getFichier() {
        return $this->_fichier;
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
    
    public function setCode($code) {
         if (is_string($code)) {
            $this->_code = $code;
        }
    }
    
    public function setFichier($fichier) {
         if (is_string($fichier)) {
            $this->_fichier = $fichier;
        }
    }
    
}