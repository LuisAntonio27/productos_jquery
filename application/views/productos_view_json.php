<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav aria-label="breadcrumb">
            <a class="btn btn-success float-right" href="<?php echo base_url(); ?>productos/create">+</a>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Productos</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Productos disponibles</h1>
                    <div></div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </body>
</html>