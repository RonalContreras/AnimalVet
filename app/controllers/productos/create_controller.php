<?php

include ('../../../app/config.php');

$codigo = $_POST['codigo'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$id_usuario = $_POST['id_usuario'];

$nombre_imagen = date('y-m-d-h-i') . $_FILES['imagen']['name'];
$location = "../../../Images/productos/" . $nombre_imagen;
move_uploaded_file($_FILES['imagen']['tmp_name'], $location);

$sentencia = $pdo->prepare('INSERT INTO tb_productos
(codigo,nombre_producto,descripcion,imagen,stock,stock_minimo,stock_maximo,precio_compra,precio_venta,fecha_ingreso,id_usuario,
fyh_creacion)
VALUES (
:codigo,:nombre_producto,:descripcion,:imagen,:stock,:stock_minimo,:stock_maximo,:precio_compra,:precio_venta,:fecha_ingreso,:id_usuario,:fyh_creacion)');

$sentencia->bindParam(':codigo', $codigo);
$sentencia->bindParam(':nombre_producto', $nombre_producto);
$sentencia->bindParam(':descripcion', $descripcion);
$sentencia->bindParam(':imagen', $nombre_imagen);
$sentencia->bindParam(':stock', $stock);
$sentencia->bindParam(':stock_minimo', $stock_minimo);
$sentencia->bindParam(':stock_maximo', $stock_maximo);
$sentencia->bindParam(':precio_compra', $precio_compra);
$sentencia->bindParam(':precio_venta', $precio_venta);
$sentencia->bindParam(':fecha_ingreso', $fecha_ingreso);
$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->bindParam(':fyh_creacion', $fecha_Hora);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Registro exitoso";
    $_SESSION['icono'] = 'success';
    header('location: ' . $URL . '/admin/productos');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error, no se pudo registrar el producto";
    $_SESSION['icono'] = 'Error';
    header('location: ' . $URL . '/admin/productos');
}