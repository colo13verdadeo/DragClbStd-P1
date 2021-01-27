<?php
    include ('../../../php/init.php');
    require '../../../php/funciones.php';
    $obj = new Funciones();

    $publicaciones = $obj->getPublicaciones();
    //echo '<pre>', print_r($publicaciones), '</pre>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!-- Css -->
    <link rel="stylesheet" href="../../../css/publicador.css">
</head>
<body>
<div class="logoImg">
    <img src="../../../assets/img/loginNombre.png"  alt="Dragon studio">
</div>

    <div class="container justify-content-center mb-5 mt-3">
            <a href="modPub.php" class="btn btn-danger mr-5">Volver</a>
            <a href="../../../index.php" class="btn btn-danger">Página principal</a>
    </div>

    
    <div class="container row d-flex" style="position:relative; left:-40px;">
        <?php foreach($publicaciones as $publicaciones): ?>
        <div class="card offset-1 col-xl-5 mb-5 col-sm-5 col-10">

            <a class="btn btn-danger mt-4" href="processDelete.php?id=<?php echo $publicaciones['archivo_id']; ?>">Eliminar numero: <?php echo $publicaciones['archivo_id']; ?></a>
            <img class="card-img-top mt-4"  src="fileServer/<?php echo $publicaciones['archivo']; ?>">
            <div class="card-body">
                <h5 class="card-title "><strong> <?php echo $publicaciones['titulo']; ?> </strong></h5>
                <p class="card-text " > <?php echo $publicaciones['descripcion']; ?>
                </p>
                <a href="<?php echo $publicaciones['enlace']; ?>" class="badge badge-primary m-auto lang" key="cardPack1">Ver pack</a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>



</body>
</html>