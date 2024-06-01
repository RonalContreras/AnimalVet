<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/usuarios/listado_usuarios.php'); ?>

<div class="container-fluid pt-3">
    <h1>Listado de usuarios</h1>
</div>

<div class="row px-2">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Usuarios registrados</h3>

            </div>

            <div class="card-body">
                <table id="example1" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nombre completo</th>
                            <th scope="col">Email</th>
                            <th scope="col">cargo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador = 0;
                        foreach ($usuarios as $usuario) {
                            $contador = $contador + 1;
                            $id_usuario = $usuario['id_usuario']; ?>
                            <tr>
                                <th scope="row"><?php echo $contador; ?></th>
                                <td><?php echo $usuario['nombre_completo']; ?></td>
                                <td><?php echo $usuario['email']; ?></td>
                                <td><?php echo $usuario['cargo']; ?></td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center" role="group"
                                        aria-label="Basic example">
                                        <a href="show.php?id_usuario=<?php echo $id_usuario; ?>" class="btn btn-primary"><i
                                                class="bi bi-eye-fill"></i>
                                            Ver</a>
                                        <a href="update.php?id_usuario=<?php echo $id_usuario; ?>" type="button"
                                            class="btn btn-success"><i class="bi bi-pencil-square"></i>
                                            Editar</a>
                                        <a href="#" type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>
                                            Eliminar</a>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Msotrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
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
</script>