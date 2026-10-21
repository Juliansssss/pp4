
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mercadona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>Bienvenido a Mercadona</h1>
            <p>Introduce tus datos para continuar con la compra.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm">

                    <form action="index.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" name="telefono" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">URL de la foto de perfil</label>
                            <input type="url" name="foto" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Entrar a la tienda
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
