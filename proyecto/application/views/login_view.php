<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//print_r ($_SESSION);
?>
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

    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row pt-5">
            <div class="col-6  offset-3">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" id="usuario"
                                    placeholder="Ingresa tu nombre de usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Ingresa tu password" required>
                            </div>
                            <button type="button" class="btn btn-primary" id="iniciarSesion">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
    $('#iniciarSesion').click(function() {
        //alert("guarda");
        var usuario = $('#usuario').val(),
            password = $('#password').val();
        if (usuario != '' && password != '') {
            $.post("<?php echo site_url('login/autenticar');?>", {
                a1: usuario,
                a2: password
            }, function(resultado) {
                if (resultado == 1) {
                    $('#headerOK').text('Actualizado');
                    $('#textOK').text('Registro actualizado correctamente');
                    $('#modalOK').modal('show');
                    setTimeout(function() {
                        window.location.replace("<?php echo site_url('login/acceso');?>");
                    }, 2000);

                }else{
                    $('#headerError').text('Actualizado');
                    $('#textError').text('Registro actualizado correctamente');
                    $('#modalError').modal('show');
                    setTimeout(function() {
                        window.location.replace("<?php echo site_url('login/');?>");
                    }, 2000);
                }
                console.log(resultado);
            });
        } else {
            alert("no valido");
        }

    });
    //function soloNumeros(){
    //  alert("hola ")
    //}
    </script>