<?php
/* Connect To Database */
require_once ("config/db.php"); //Contiene las variables de configuracion para conectar a la base de datos
require_once ("config/conexion.php"); //Contiene funcion que conecta a la base de datos

$active_productos = "active";
$title = "Productos";

include ('validar/valida.php');

$res="Código o nombre del producto";

if(isset($_POST['button'])){
    $bot=$_POST['bot']; 
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?php include("head.php"); ?>
    </head>
    <body>

        <div class="container">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4><i class='glyphicon glyphicon-search'></i> Buscar Productos</h4>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" id="datos_cotizacion">

                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Código o nombre</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="<?php echo $res ?>" onkeyup='load(1);'>
                            
                            </div>
                            
                            
                            <div class="col-md-3">
                                <button type="button" class="btn btn-default" onclick='load(1);'>
                                    <span class="glyphicon glyphicon-search" name="bot"></span> Buscar</button>
                                <span id="loader"></span>
                            </div>
                            
                            
                        </div>

                    </form>
                    <div id="resultados"></div><!-- Carga los datos ajax -->
                    <div class='outer_div'></div><!-- Carga los datos ajax -->

                </div>
            </div>

        </div>
        <hr>
<?php
include("footer.php");
?>
        <script type="text/javascript" src="js/productos.js"></script>
    </body>
</html>
<script>
                                    function obtener_datos(id) {
                                        var codigo_producto = $("#codigo_producto" + id).val();
                                        var nombre_producto = $("#nombre_producto" + id).val();
                                        var estado = $("#estado" + id).val();
                                        var precio_producto = $("#precio_producto" + id).val();
                                        $("#mod_id").val(id);
                                        $("#mod_codigo").val(codigo_producto);
                                        $("#mod_nombre").val(nombre_producto);
                                        $("#mod_precio").val(precio_producto);
                                    }
</script>