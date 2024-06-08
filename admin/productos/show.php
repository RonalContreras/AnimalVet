<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

$id_producto = $_GET['id_producto'];

include ('../../app/controllers/productos/datos_productos.php'); ?>


<div class="container-fluid pt-3">
    <h1>Datos del producto</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold">Datos registrados</h3>

                </div>

                <div class="card-body">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Código</label>
                                            <input type="text" class="form-control" value="<?= $codigo; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nombre del producto</label>
                                            <input type="text" name="nombre_producto" class="form-control"
                                                value="<?= $nombre_producto; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            <input type="text" name="descripcion" class="form-control"
                                                value="<?= $descripcion; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Stock</label>
                                            <input type="number" name="stock" class="form-control"
                                                value="<?= $stock; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Stock minimo</label>
                                            <input type="number" name="stock_minimo" class="form-control"
                                                value="<?= $stock_minimo; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Stock maximo</label>
                                            <input type="number" name="stock_maximo" class="form-control"
                                                value="<?= $stock_maximo; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Precio compra</label>
                                            <input type="number" name="precio_compra" class="form-control"
                                                value="<?= $precio_compra; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Precio venta</label>
                                                <input type="number" name="precio_venta" class="form-control"
                                                    value="<?= $precio_venta; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Fecha ingreso</label>
                                                <input type="date" name="fecha_ingreso" class="form-control"
                                                    value="<?= $fecha_ingreso; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Ususario de registro</label>
                                            <input type="text" name="Ususario_registro" class="form-control"
                                                value="<?= $nombre_completo; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label for="" style="display: block; text-align: center;">Imagen</label>
                                    <div class="mb-4 d-flex justify-content-center">
                                        <img src="<?= $URL . "/Images/productos/" . $imagen; ?>"
                                            style="width: 300px;" />
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="id_usuario" value="<?= $id_usuario_session; ?>" hidden>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="index.php" class="btn btn-secondary mr-2">Cancelar</a>
                            </div>
                        </div>
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