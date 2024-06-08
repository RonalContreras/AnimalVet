<?php

include ('../../../app/config.php');


if (isset($_GET['id_usuario'])) {

    $id_usuario = $_GET['id_usuario'];

    $sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = '$id_usuario'");

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "El Usuario ha sido eliminado con exito";
        $_SESSION['icono'] = 'success';
        header('location: ' . $URL . '/admin/usuarios/');
    }
}
