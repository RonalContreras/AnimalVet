<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/productos/listado_productos.php'); ?>

<div class="container-fluid pt-3">
    <h1>Listado de productos</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-warning">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">productos registrados</h3>

            </div>

            <div class="card-body">
                <table id="example1" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nombre del producto</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Stock</th>
                            <th scope="col">precio compra</th>
                            <th scope="col">precio venta</th>
                            <th scope="col">fecha de ingreso</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador = 0;
                        foreach ($productos as $producto) {
                            $contador = $contador + 1;
                            $id_producto = $producto['id_producto']; ?>

                            <tr>
                                <th scope="row"><?= $contador; ?></th>
                                <td><?= $producto['codigo']; ?></td>
                                <td><?= $producto['nombre_producto']; ?></td>
                                <td><?= $producto['descripcion']; ?></td>
                                <td><img src="<?= $URL . "/Images/productos/" . $producto['imagen']; ?>" width="80px"
                                        alt="">
                                </td>
                                <td><?= $producto['stock']; ?></td>
                                <td><?= $producto['precio_compra']; ?></td>
                                <td><?= $producto['precio_venta']; ?></td>
                                <td><?= $producto['fecha_ingreso']; ?></td>
                                <td style="text-align: center">
                                    <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                        <a href="show.php?id_producto=<?php echo $id_producto; ?>"
                                            class="btn btn-primary"><i class="bi bi-eye-fill"></i>
                                            Ver</a>
                                        <a href="update.php?id_producto=<?php echo $id_producto; ?>" type="button"
                                            class="btn btn-success"><i class="bi bi-pencil-square"></i>
                                            Editar</a>
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmDeletion(<?php echo $id_producto; ?>)"><i
                                                class="bi bi-trash3-fill"></i>
                                            Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                            <?php

                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>



<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>
<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ productos",
                "infoEmpty": "Msotrando 0 a 0 de 0 productos",
                "infoFiltered": "(Filtrado de _MAX_ total productos",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ productos",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [
                {
                    extend: "collection",
                    text: "Reportes",
                    orientation: "landscape",
                    buttons: [
                        { text: "Copiar", extend: "copy" },
                        { extend: "pdf" },
                        { extend: "csv" },
                        { extend: "excel" },
                        { text: "Imprimir", extend: "print" }
                    ]
                },
                {
                    extend: "colvis",
                    text: "Visor de columnas",
                    /* collectionLayout: "fixed three-column" */

                }
            ],
        }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
    });
    function confirmDeletion(id_producto) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger mr-4"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Estas seguro?",
            text: "Esta accion no se podra revertir!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Eliminar!",
            cancelButtonText: "Cancelar",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../../app/controllers/productos/delete_controller.php?id_producto=" + id_producto;
            }
        });
    }
</script>