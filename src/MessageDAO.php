<?php

class MessageDAO {
    
    private $_db;
    
    
    // Base de données
    public function __construct($db) {
        $this->setDb($db);
    }
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    
    // CRUD
    public function add(Message $message) {
        $q = $this->_db->prepare('INSERT INTO l_messages(idUser, idModule, message, date, username) VALUES(:idUser, :idModule, :message, NOW(), :username)');
        $q->execute(array(
            'idUser' => $message->getIdUser(),
            'idModule' => $message->getIdModule(),
            'message' => $message->getMessage(),
            'username' => $username->getUsername(),
        ));
        
        $user->hydrate([
            'id' => $this->_db->lastInsertId(),
        ]);
    }
    
    public function get($id) {
        if (is_int($id)) {
            $q = $this->_db->query('SELECT id, idUser, idModule, message, date, username FROM l_messages WHERE id = ' . $id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Message($donnees);
        } 
    }
    
    public function getMessagesByModule($idModule) {
        $messagesByModule = [];
        $sql = 'SELECT * FROM l_messages WHERE idModule = ' . $idModule . ' ORDER BY id ASC LIMIT 0, 999';
        $q = $this->_db->query($sql);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $messagesByModule[] = new Message($donnees);
        }
        return $messagesByModule;    
    }
    
    // A faire : récupérer par nom d'utilisateur ?
    
    
    public function getList() {
        $messages = [];
        $q = $this->_db->query('SELECT id, idUser, idModule, message, date, username FROM l_messages');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $messages[] = new Message($donnees);
        }
        return $messages;
    }
    
    public function update(Message $message) {
        $q = $this->_db->prepare('UPDATE l_messages SET message = :message, date = NOW() WHERE id = :id');
        $q->execute(array(
            'message' => $message->getMessage(),
            'id' => $message->getId(),
        ));
        // A faire : date d'édition et statut édité
    }
    
    public function delete(Message $message) {
        $this->_db->exec('DELETE FROM l_messages WHERE id = ' . $message->getId());
    }
    
    public function count() {
        return $this->_db->query('SELECT COUNT(*) FROM l_messages')->fetchColumn();
    }
    
    // A faire : countByModule ? countByUser ?
    
}