<?php

$descripcion = $_POST['descripcion'];
$asunto = $_POST['asunto'];
// Datos 
$destinatario = "btdragonclub21@gmail.com";

// Envio
mail($destinatario, $asunto, $descripcion);
header('Location:index.php');

?>