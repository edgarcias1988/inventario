<?php

include "conexion.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- styles CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">

    <title>Inventario - Login</title>
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
        <label for="exampleInputEmail1">Usuario</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Obligatorio</small>
    </div>
    <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  <button type="button" class="btn btn-primary" onclick="demo()">Submit</button>
</form>
            </div>
             </div>
        </div>
    </div>
        
    </div>

    <!-- jQuery and Bootstrap -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/scripts.js"></script>

  </body>
</html>
