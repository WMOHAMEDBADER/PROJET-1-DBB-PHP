<?php 
    if(isset($_POST['supprimer'])){
        require_once 'database.php';
        $id = $_POST['id'];
        $sqlState = $pdo->prepare('DELETE FROM stagiaires WHERE id=?');
        $sqlState->execute([$id]);
        header('Location: index.php');
    }
   
?>
