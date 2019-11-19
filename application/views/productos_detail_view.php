<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="jumbotron">
            <img class="img-fluid" src="images/<?php echo $productos['id']; ?>.jpg" alt="Imagen de <?php echo $productos['nombre']; ?>"/>
            <p class="lead"><?php echo $productos['nombre']; ?></p>
            <hr class="my-4">
            <p>Codigo: <?php echo $productos['codigo']; ?></p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">$<?php echo $productos['precio']; ?></a>
            </p>
        </div>
    </body>
</html>