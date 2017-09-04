<?php

class QuestionDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Question $question) {
        $q = $this->_db->prepare('INSERT INTO l_questions(type, question, description) VALUES(:type, :question, :description)');
        $q->execute(array(
            'type' => $question->getType(),
            'question' => $question->getQuestion(),
            'description' => $question->getDescription(),
        ));
        
        $question->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($idQuestion) {
        $q = $this->_db->query('SELECT id, type, question, description FROM l_questions WHERE id = ' . $idQuestion);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Question($donnees);
    }
    
    public function getList() {
        $questions = [];
        $q = $this->_db->query('SELECT id, type, question, description FROM l_questions');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $questions[] = new Question($donnees);
        }
        return $questions;
    }
    
    public function update(Question $question) {
        $q = $this->_db->prepare('UPDATE l_questions SET type = :type, question = :question, description = :description WHERE id = :id');
        $q->execute(array(
            'type' => $question->getType(),
            'question' => $question->getQuestion(),
            'description' => $question->getDescription(),
            'id' => $question->getId(),
        ));
    }
    
    public function delete(Question $question) {
        $this->_db->exec('DELETE FROM l_questions WHERE id = ' . $question->getId());
    }
    
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_questions')->fetchColumn();
    }
    
    public function exists($idQuestion) {
        return (bool) $this->_db->query('SELECT COUNT(*) FROM l_questions WHERE id = ' . $idQuestion)->fetchColumn();
    } 
    
}