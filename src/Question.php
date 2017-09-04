<?php

class Question {
    
    private $_id, $_type, $_question, $_description;
    
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
    
    public function getType() {
        return $this->_type;
    }
    
    public function getQuestion() {
        return $this->_question;
    }
    
    public function getDescription() {
        return $this->_description;
    }
    
    
    // Setters
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setType($type) {
         if (is_string($type)) {
            $this->_type = $type;
        }
    }
    
    public function setQuestion($question) {
         if (is_string($question)) {
            $this->_question = $question;
        }
    }
    
    public function setDescription($description) {
         if (is_string($description)) {
            $this->_description = $description;
        }
    }
    
}