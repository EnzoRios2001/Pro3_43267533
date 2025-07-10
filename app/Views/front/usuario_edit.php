<!-- app/Views/front/usuario_edit.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="/assets/css/bootstrap-grid.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Editar Usuario</h2>
        <form action="<?= site_url('usuariocrud/update/'.$usuario['id_usuario']) ?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= esc($usuario['nombre']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= esc($usuario['email']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña (dejar vacío para no cambiar)</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= site_url('usuariocrud') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
