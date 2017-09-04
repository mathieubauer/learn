<?php

class Resultat {
    
    private $_id, $_idUser, $_idTest, $_noQuestion, $_reponse;
    
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
    
    public function getIdTest() {
        return $this->_idTest;
    }
    
    public function getNoQuestion() {
        return $this->_noQuestion;
    }
    
    public function getReponse() {
        return $this->_reponse;
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
    
    public function setIdTest($idTest) {
        $idTest = (int) $idTest;
        if ($idTest > 0) {
            $this->_idTest = $idTest;
        }
    }
    
    public function setNoQuestion($noQuestion) {
        $idTest = (int) $noQuestion;
        if ($noQuestion >= 0) {
            $this->_noQuestion = $noQuestion;
        }
    }
    
    public function setReponse($reponse) {
         if (is_string($reponse)) {
            $this->_reponse = $reponse;
        }
    }
    
}