<!-- app/Views/front/usuarios_list.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap-grid.min.css">
</head>
<body>
    <?php include(APPPATH.'Views/front/navbar_view.php'); ?>
    <?php
    if (!session('id_usuario')) {
        header('Location: ' . site_url('sesion'));
        exit;
    }
    ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">CRUD de Usuarios</h2>
                    </div>
                    <div class="card-body">
                        <?php if (session('success')): ?>
                            <div class="alert alert-success"> <?= session('success') ?> </div>
                        <?php endif; ?>
                        <?php if (session('error')): ?>
                            <div class="alert alert-danger"> <?= session('error') ?> </div>
                        <?php endif; ?>
                        <a href="<?= site_url('usuariocrud/create') ?>" class="btn btn-success mb-3">Agregar Usuario</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($usuarios as $usuario): ?>
                                        <tr>
                                            <td><?= esc($usuario['id_usuario']) ?></td>
                                            <td><?= esc($usuario['nombre']) ?></td>
                                            <td><?= esc($usuario['email']) ?></td>
                                            <td>
                                                <a href="<?= site_url('usuariocrud/edit/'.$usuario['id_usuario']) ?>" class="btn btn-warning btn-sm me-1">Editar</a>
                                                <a href="<?= site_url('usuariocrud/delete/'.$usuario['id_usuario']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro de eliminar?')">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="<?= site_url('sesion') ?>" class="btn btn-secondary mt-2">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
