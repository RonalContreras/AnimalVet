<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include ('../../app/controllers/usuarios/datos_usuario.php');
?>

<div class="container-fluid pt-3">
    <h1>Datos del usuario</h1>

    <div class="row px-2">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold">Datos registrados</h3>

                </div>

                <div class="card-body">

                    <div class="card-body">
                        <label for="">Nombre completo</label>
                        <div class="input-group mb-3">
                            <input type="text" name="nombre_completo" value="<?php echo $nombre_completo; ?>"
                                class="form-control" disabled>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <label for="">Correo electronico</label>
                        <div class="input-group mb-3">
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control"
                                disabled>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <label>Cargo</label>
                        <input name="cargo" value="<?php echo $cargo; ?>" class="form-control mb-4" disabled>
                        </input>
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