<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=archivo.xls");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);

echo utf8_decode("<table >
    <thead>
        <tr>
            <th>Id Producto</th>
            <th>Producto</th>
            <th>Categoría</th>
            <th>Sucursal</th>

        </tr>
    </thead>
    <tbody>");
        foreach($productos as $producto){
            echo utf8_decode("
            <tr>
                <td>".$producto['id']."</td>
                <td>".$producto['producto']."</td>
                <td>".$producto['categoria']."</td>
                <td>".$producto['sucursal']."</td>
            </tr>");
        }
    echo  utf8_decode( "</tbody>
</table>");
?>