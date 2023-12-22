<?php
try{
    // Connexion à la bdd
    $db = new PDO('mysql:host=localhost;dbname=voiture', 'root','');
    $db->exec('SET NAMES "UTF8"');
    echo"connexion reussi";
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    echo 'N° : '. $e->getCode();
    die();
}