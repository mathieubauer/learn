<?php

class Feedback {
    
    private $_id, $_score, $_explication, $_amelioration, $idSeance;
    
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
    
    public function getScore() {
        return $this->_score;
    }
    
    public function getExplication() {
        return $this->_explication;
    }
    
    public function getAmelioration() {
        return $this->_amelioration;
    }
    
    public function getIdSeance() {
        return $this->_idSeance;
    }

    
    // Setters
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setScore($score) {
        $score = (int) $score;
        if ($score >= 0) {
            $this->_score = $score;
        }
    }
    
    public function setExplication($explication) {
         if (is_string($explication)) {
            $this->_explication = $explication;
        }
    }
    
    public function setAmelioration($amelioration) {
         if (is_string($amelioration)) {
            $this->_amelioration = $amelioration;
        }
    }
    
    public function setIdSeance($idSeance) {
        $idSeance = (int) $idSeance;
        if ($idSeance > 0) {
            $this->_idSeance = $idSeance;
        }
    }
    
}