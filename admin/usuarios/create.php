<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php'); ?>

<div class="container-fluid pt-3">
    <h1>Creación de nuevo usuario</h1>

    <div class="row px-2">
        <div class="col-md-6">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold">Datos del usuario</h3>

                </div>

                <div class="card-body">

                    <div class="card-body">
                        <form action="../../app/controllers/usuarios/create_controller.php" method="post">
                            <label for="">Nombre completo</label>
                            <div class="input-group mb-3">
                                <input type="text" name="nombre_completo" class="form-control" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <label for="">Correo electronico</label>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Contraseña</label>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Verificar Contraseña</label>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password_verify" class="form-control" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>Cargo</label>
                            <select name="cargo" class="form-control mb-4">
                                <option>ADMINISTRADOR</option>
                                <option>CLIENTE</option>
                            </select>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-secondary">Cancelar</a>
                                    <input type="submit" class="btn btn-primary" value="Registrar Usuario"></input>

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