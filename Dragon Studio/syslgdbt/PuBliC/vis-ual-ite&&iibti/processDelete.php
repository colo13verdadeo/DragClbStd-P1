<?php
    include ('../../../php/init.php');

    $id = $_GET['id'];
    $eliminar = "DELETE FROM blog WHERE archivo_id = '$id'";
    global $pdo;
    $query = $pdo->prepare($eliminar);
    header('Location: delatePub.php');
    $query->execute();
    return $query->fetch();
    
?>