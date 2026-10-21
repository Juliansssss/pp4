
<?php
$nombre = isset($nombre) ? $nombre : "Alumno";
$foto = isset($foto) ? $foto : "";
?>

<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid d-flex justify-content-between">

        <a class="navbar-brand" href="index.php">
            <img src="assets/logo-mercadona.jpg"
                 alt="Logo Mercadona"
                 class="img-fluid"
                 style="height: 50px;">
        </a>

        <div class="d-flex align-items-center">

            <h2 class="me-3 mb-0">
                Bienvenido, <?php echo htmlspecialchars($nombre); ?>!
            </h2>

            <?php if ($foto != "") { ?>
                <img src="<?php echo htmlspecialchars($foto); ?>"
                     alt="Avatar"
                     class="rounded-circle"
                     style="width: 50px; height: 50px; object-fit: cover;">
            <?php } ?>

        </div>

    </div>
</header>
