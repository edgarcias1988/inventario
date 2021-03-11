<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//print_r($categorias);
//print_r($sucursales);
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
                                <input name="producto" type="text" class="form-control" id="producto" maxlength="30">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="descripcion">Descripción</label>
                                <textarea name="descripcion" row="10" cols="50" class="form-control"
                                    id="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="categoria">Categoria</label>
                                <select name="categoria" class="form-control" id="categoria">
                                    <option value="">Seleciona una opción</option>
                                    <?php
                                            foreach($categorias as $categoria ){
                                                echo "<option value='".$categoria['id']."'>".$categoria['categoria']."</option>";
                                            }
                                        ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sucursal">Sucursal</label>
                                <select name="sucursal" class="form-control" id ="sucursal">
                                    <option value="">Seleciona una opción</option>
                                    <?php
                                            foreach($sucursales as $sucursal ){
                                                echo "<option value='".$sucursal['id']."'>".$sucursal['sucursal']."</option>";
                                            }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="precio">Precio</label>
                                <input name="precio" type="text" onkeypress="soloNumeros()" class="form-control" id="precio">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fechaCompra">Fecha Compra</label>
                                <input name="fechaCompra" type="text" class="form-control" id="fechaCompra">
                            </div>
                        </div>
                         <button type="button" class="btn btn-primary" id="guardarProducto">Registrar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $('#guardarProducto').click(function(){
        //alert("guarda");
        var producto= $('#producto').val(),
        descripcion =$('#descripcion').val(),
        categoria =$('#categoria').val(),
        sucursal =$('#sucursal').val(),
        precio =$('#precio').val(),
        fechaCompra =$('#fechaCompra').val();
        if(producto != '' && descripcion != '' && categoria != '' && sucursal != '' &&  precio != '' && fechaCompra != ''){
            alert("valido");
            $.post("<?php echo site_url('producto/guarda_producto');?>",{
                a1:producto,
                a2:descripcion,
                a3:categoria,
                a4:sucursal,
                a5:precio,
                a6:fechaCompra
            },function(resultado){
                console.log(resultado);
            });
        }else{
            alert("no valido");
        }

    });
    //function soloNumeros(){
      //  alert("hola ")
    //}
</script>