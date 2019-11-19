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
        <nav aria-label="breadcrumb">
            <a class="btn btn-success float-right" href="<?php echo base_url();?>productos/create">+</a>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Productos</li>
            </ol>
        </nav>
        <div class="container">

            <div class="card-deck">
                <div class="card" style="width: 18rem;">
                    <?php foreach ($productos as $item) { ?>
                        <a href="<?php echo base_url();?>productos/get_by_id/<?php echo $item['id']; ?>">
                            <img class="card-img-top" src="images/productos/<?php echo $item['id']; ?>.jpg" 
                                 alt="Imagen de <?php echo $item['nombre']; ?>" style="width: 18rem;"/>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['nombre']; ?></h5>
                                <p class="card-text">$<?php echo $item['precio']; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $item['codigo']; ?></small></p>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>