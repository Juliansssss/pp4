
<?php

$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "Alumno";
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
$foto = isset($_POST["foto"]) ? $_POST["foto"] : "";

require "includes/funciones.php";
require "data/productos.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadona - Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "includes/header.php"; ?>

<div class="container">

    <h2 class="mb-4">Productos disponibles</h2>

    <?php
    generarTablaProductos($productos);
    ?>

    <?php
    muestraInfoContacto($nombre, $telefono, $foto);
    ?>

    <div class="text-center mb-4">
        <a href="inicio.php" class="btn btn-success">
            Volver al inicio
        </a>
    </div>

</div>

<?php include "includes/footer.php"; ?>
