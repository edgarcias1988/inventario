<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- styles CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">

    <!-- jQuery and Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

    <title>Inventario</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Inventario de productos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                    if($this->session->perfil==1){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('producto/registro');?>">Registro</a>
                </li>
                <?php }
                ?>
                <?php
                    if($this->session->perfil==2){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('producto/productos');?>">Bandeja</a>
                </li>
                <?php }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('producto/reporte');?>">Reporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('login/salir');?>">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>