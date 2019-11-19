<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">C&oacute;digo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $item) { ?>
                        <tr>
                            <th scope="row"><?php echo $item['codigo']; ?></th>
                            <td><?php echo $item['nombre']; ?></td>
                            <td><?php echo $item['precio']; ?></td>
                            <td><img src="images/<?php echo $item['id']; ?>.jpg" alt="Imagen de <?php echo $item['nombre']; ?>" 
                                     class=""/></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>