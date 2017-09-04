<?php

$bddserveur = 'mysql:host=localhost;dbname=lecube';
$bddbase = 'root';
$bddmdp = 'root';

try {
    $db = new PDO($bddserveur, $bddbase, $bddmdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}

catch(Exception $e) {
    die('Erreur :' . $e->getMessage());
}