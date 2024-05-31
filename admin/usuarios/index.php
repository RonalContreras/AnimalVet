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
                <table class="table table-responsive table-striped table-bordered table-hover">
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
                        foreach ($usuarios as $usuario) { ?>
                            <tr>
                                <th scope="row"><?php echo $usuario['id_usuario'] ?></th>
                                <td><?php echo $usuario['nombre_completo'] ?></td>
                                <td><?php echo $usuario['email'] ?></td>
                                <td><?php echo $usuario['cargo'] ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Ver</button>
                                        <button type="button" class="btn btn-success">Editar</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
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

<?php include ('../../admin/layout/parte2.php');