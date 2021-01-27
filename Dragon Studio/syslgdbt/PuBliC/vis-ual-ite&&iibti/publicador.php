<?php
session_start();

    if(isset($_SESSION['admin'])){
        require '../../../php/funciones.php';
        
        $obj = new Funciones();

        //require '../../../php/init.php';
        
        
    

        if(isset($_POST['titulo'], $_POST['descripcion'], $_POST['enlace'], $_POST['archivo'])){
            $subir = $obj->subirPublicacion($_POST['titulo'], $_POST['descripcion'], $_POST['enlace'], $_POST['archivo']);
            

            if($subir == true){
                echo '<span class="alert">Se publicó correctamente</span>';
            }else{
                echo '<span class="alert">No se pudo subir la publicacion</span>';
            }
        }
?>
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

    <div class="container">
        <form method="POST" class="datos">
        <input type="hidden" name="no" >
            <p>Titulo de la publicación</p>
            <input type="text" name="titulo" id="textInput">
            <p>Descripción</p>
            <textarea name="descripcion" id="" cols="25" rows="8"></textarea>
            <p>Enlace</p>
            <input type="text" name="enlace" id="textInput">
            <br><br>
            <label for="">Elige la misma imagen que en la pantalla anterior</label>
            <br>
            <label for="" id="imgCargar">Imagen: </label>
            <input type="file" name="archivo">
            <input type="submit" class="btnPub" value="Publicar">
        </form>
        <div class="visualiteCont">
            <div class="visualite">
                <a href="publicadorImagen.php"><button>Subir otra publicación</button></a>
                <br> <br>
                <a href="../../../index.php"><button>Ir a la página principal</button></a>
                <br> <br>
                <a href="delatePub.php"><button>Ir a eliminar publicación</button></a>
            </div>
        </div>
    </div>
</body>
</html>
<?php }else {header('Location: ../login.php');} ?>