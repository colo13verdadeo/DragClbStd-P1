<?php
session_start();
    require '../php/funciones.php';
    $obj = new Funciones();

    if(isset($_POST['user'], $_POST['pass'])){
        $checar = $obj->login($_POST['user'], $_POST['pass']);

        //echo print_r($checar);

        //inicio de sesion
        if($checar){
            $_SESSION['admin'] = true;
            header('Location: PuBliC/vis-ual-ite&&iibti/modPub.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Css -->
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="contDrag">
            <img id="logoDragon" src="../assets/img/loginDrag.png" alt="Logo Dragon Studio">
        </div>
        <div class="contLogin">
            <img id="logoNombre" src="../assets/img/loginNombre.png" alt="Nombre Dragon Studio">
            <form method="POST" action="" class="info">
                <p>Usuario</p>
                <input type="text" name="user">
                <p>Contraseña</p>
                <input type="password" name="pass">
                <input type="submit" value="Entrar" id="loginbtn">
            </form>
        </div>
    </div>
</body>
</html>