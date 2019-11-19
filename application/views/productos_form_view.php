<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1> Producto </h1>
                </div>
                <div class="card-body">
                    <?php if (isset($message_success)) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $message_success; ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($message_error)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $message_error; ?>
                        </div>
                    <?php } ?>
                    <form method="POST" action="<?php echo base_url(); ?>productos/create" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" class="form-control" id="codigo" placeholder="C&oacute;digo">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" name="precio" class="form-control" id="precio" placeholder="Precio">
                        </div>
                        <div class="form-group">
                            <label for="file">Imagen para producto</label>
                            <input type="file" name="userfile" class="form-control-file form-control-lg" id="file">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                    <?php if (isset($dato_guardado)) { ?>
                        <ul>
                            <?php foreach ($upload_data as $item => $value): ?>
                                <li><?php echo $item; ?>: <?php echo $value; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="alert alert-success" role="alert">
                            <?php echo anchor('upload', 'Upload Another File!');; ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>
                </div> 
            </div>
        </div>
    </body>
</html>