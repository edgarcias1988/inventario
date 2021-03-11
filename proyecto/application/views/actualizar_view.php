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
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="producto">Producto</label>
                                <input value="<?php echo $producto['producto']; ?>" name="producto" type="text"
                                    class="form-control" id="InputProducto" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="descripcion">Descripción</label>
                                <textarea name="descripcion" row="10" cols="50" class="form-control"
                                    id="InputDescripcion" readonly><?php echo $producto['descripcion']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="categoria">Categoria</label>
                                <select value="<?php echo $producto['categoria']; ?>" name="categoria_id"
                                    class="form-control" readonly>
                                    <option><?php echo $producto['categoria']; ?></option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sucursal">Sucursal</label>
                                <select value="<?php echo $producto['sucursal']; ?>" name="sucursal_id"
                                    class="form-control" readonly>
                                    <option><?php echo $producto['sucursal']; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="precio">Precio</label>
                                <input value="<?php echo $producto['precio']; ?>" name="precio" type="text"
                                    class="form-control" id="Input" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fecha_compra">Fecha Compra</label>
                                <input value="<?php echo $producto['fecha_compra']; ?>" name="fecha_compra" type="text"
                                    class="form-control" id="Inputfecha" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="estatus">Estado</label>
                                <select name="estatus" id="estatus" class="form-control">
                                    <?php
                                        foreach($cat_estatus as $estatus){
                                            if($estatus['id'] == $producto['id'] ){
                                                echo "<option value='".$estatus['id']."' selected >".$estatus['estatus']."</option>";
                                            }else{
                                                echo "<option value='".$estatus['id']."'>".$estatus['estatus']."</option>";
                                            }
                                           
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="comentarios">Comentarios</label>
                                <textarea name="comentarios" row="10" cols="50" class="form-control"
                                    id="comentarios"><?php echo $producto['comentarios']; ?></textarea>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" id="actualizarProducto">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
$('#actualizarProducto').click(function() {
    //alert("guarda");
    var estatus = $('#estatus').val(),
        comentarios  = $('#comentarios').val()
    $.post("<?php echo site_url('producto/actualizar_producto');?>", {
        a1: <?php echo $id; ?>,
        a2: estatus,
        a3: comentarios
    }, function(resultado) {
        if(resultado==1){
            $('#headerOK').text('Actualizado');
            $('#textOK').text('Registro actualizado correctamente');
            $('#modalOK').modal('show');
            setTimeout(function(){
                window.location.replace("<?php echo site_url('producto/productos');?>");
            },2000);
        }
        console.log(resultado);
    });
});
//function soloNumeros(){
//  alert("hola ")
//}
</script>