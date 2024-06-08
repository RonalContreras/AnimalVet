<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/productos/listado_productos.php'); ?>
<?php
$contador = 1;
foreach ($productos as $producto) {
    $contador = $contador + 1;
}
function ceros($numero)
{
    $len = 0;
    $cantidad_ceros = 5;
    $aux = $numero;
    $pos = strlen($numero);
    $len = $cantidad_ceros - $pos;
    for ($i = 0; $i < $len; $i++) {
        $aux = "0" . $aux;
    }
    return $aux;
}

?>

<div class="container-fluid pt-3">
    <h1>Creación de nuevo producto</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold">Datos del nuevo producto</h3>

                </div>

                <div class="card-body">

                    <div class="card-body">
                        <form action="../../app/controllers/productos/create_controller.php" method="post"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Código</label>
                                                <input type="text" class="form-control"
                                                    value="P-<?= ceros($contador); ?>" disabled>
                                                <input type="text" name="codigo" class="form-control"
                                                    value="P-<?= ceros($contador); ?>" hidden>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Nombre del producto</label>
                                                <input type="text" name="nombre_producto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Descripción</label>
                                                <input type="text" name="descripcion" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Stock</label>
                                                <input type="number" name="stock" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Stock minimo</label>
                                                <input type="number" name="stock_minimo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Stock maximo</label>
                                                <input type="number" name="stock_maximo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Precio compra</label>
                                                <input type="number" name="precio_compra" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Precio venta</label>
                                                    <input type="number" name="precio_venta" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Fecha ingreso</label>
                                                    <input type="date" name="fecha_ingreso" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="" style="display: block; text-align: center;">Imagen</label>
                                        <div class="mb-4 d-flex justify-content-center">
                                            <img id="selectedImage" src="<?= $URL; ?>/Images/cargar_imagen.png"
                                                alt="example placeholder" style="width: 300px;" />
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn btn-primary">
                                                <label class="mb-0 text-white" for="customFile1"><i
                                                        class="bi bi-cloud-arrow-up-fill"></i>
                                                    Cargar imagen</label>
                                                <input type="file" name="imagen" class="form-control d-none"
                                                    id="customFile1"
                                                    onchange="displaySelectedImage(event, 'selectedImage')" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="id_usuario" value="<?= $id_usuario_session; ?>" hidden>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="index.php" class="btn btn-secondary mr-2">Cancelar</a>
                                    <input type="submit" class="btn btn-primary" value="Registrar producto"></input>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>

<script>
    function displaySelectedImage(event, elementId) {
        const selectedImage = document.getElementById(elementId);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                selectedImage.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
</script>