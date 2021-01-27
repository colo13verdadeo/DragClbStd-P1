<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión</title>

    <!-- Css -->
    <link rel="stylesheet" href="../../../css/publicador.css">
</head>
<body>
    <div class="logoImg">
        <img src="../../../assets/img/loginNombre.png"  alt="Dragon studio">
    </div>

    <form action="modPub.php">
            <input type="submit" class="btnPub" value="Volver">
        </form>

    <div class="container" style="margin-top:30px;">
        <form method="POST" enctype="multipart/form-data" action="datos.php">
        <br><br><br>
        <label for="">Pasos para publicar:</label>
        <br>
        <label for="">- Seleccionar una imagen</label>
        <br>
        <label for="">- Presiona el boton para subirla</label> 
        <br>
        <label for="">- Te llevara a la siguiente parte, para completar la información</label>
        <br> <br> <br>

            <label for="">Selecciona la imagen para guardarla en el servidor</label>
            <br><br>
            <label for="" id="imgCargar">Imagen: </label>
            <input type="file" name="archivo">
            <input type="submit" class="btnPub" value="Subir imagen">
        </form>
    </div>
</body>
</html>