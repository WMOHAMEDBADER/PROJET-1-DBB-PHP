<?php 
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=stagiaires','root','');
       }
       catch (PDOException $e) {
        echo "<p>Erreur: ".$e->getMessage() ;
        die() ;
    }
?>