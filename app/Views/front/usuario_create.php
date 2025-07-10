<!-- app/Views/front/usuario_create.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="/assets/css/bootstrap-grid.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Agregar Usuario</h2>
        <form action="<?= site_url('usuariocrud/store') ?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="<?= site_url('usuariocrud') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
