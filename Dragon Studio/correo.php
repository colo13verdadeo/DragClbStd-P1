<?php

$descripcion = $_POST['descripcion'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
// Datos 
$destinatario = "btdragonclub21@gmail.com";

// Envio
mail($destinatario, $asunto, $descripcion, $email);
header('Location:index.php');

?>