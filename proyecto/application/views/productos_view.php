<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <div class="row pt-5">
        <div class="col-9  offset-2">
            <div class="card">
                <div class="card-header">
                    Alta producto
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Id Producto</th>
                                <th>Producto</th>
                                <th>Categoría</th>
                                <th>Sucursal</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($productos as $producto){
                                    echo "
                                    <tr>
                                        <td>".$producto['id']."</td>
                                        <td>".$producto['producto']."</td>
                                        <td>".$producto['categoria']."</td>
                                        <td>".$producto['sucursal']."</td>
                                        <td>
                                            <a href='".site_url('producto/eliminar/').$producto['id']."' class= 'btn btn-danger'>Eliminar</a>
                                            <a href='".site_url('producto/actualizar/').$producto['id']."' class= 'btn btn-primary'>Editar</a>
                                        </td>
                                    </tr>
                                     ";
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>