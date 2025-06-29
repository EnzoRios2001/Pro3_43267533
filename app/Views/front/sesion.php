<?= view('front/head_view') ?>
<?= view('front/navbar_view') ?>
<div class="container mt-5">
    <?php if(session('success')): ?>
        <div class="alert alert-success"> <?= session('success') ?> </div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert alert-danger"> <?= session('error') ?> </div>
    <?php endif; ?>
    <div class="form-container" id="formContainer">
        <!-- Formulario de Login -->
        <form id="loginForm" action="<?= base_url('sesion/login') ?>" method="post">
            <h2>Iniciar Sesión</h2>
            <div class="form-group mb-3">
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="email" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="loginPassword">Contraseña:</label>
                <input type="password" id="loginPassword" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <div class="switch-form mt-2">
                <button type="button" class="btn btn-link switch-button" onclick="toggleForm()">¿No tienes cuenta? Regístrate</button>
            </div>
        </form>

        <!-- Formulario de Registro -->
        <form id="registerForm" action="<?= base_url('sesion/registro') ?>" method="post" style="display: none;">
            <h2>Registro</h2>
            <div class="form-group mb-3">
                <label for="regName">Nombre:</label>
                <input type="text" id="regName" name="nombre" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="regEmail">Email:</label>
                <input type="email" id="regEmail" name="email" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="regPassword">Contraseña:</label>
                <input type="password" id="regPassword" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Registrarse</button>
            <div class="switch-form mt-2">
                <button type="button" class="btn btn-link switch-button" onclick="toggleForm()">¿Ya tienes cuenta? Inicia sesión</button>
            </div>
        </form>
    </div>
</div>
<script>
function toggleForm() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    if (loginForm.style.display === 'none') {
        loginForm.style.display = '';
        registerForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        registerForm.style.display = '';
    }
}
</script>
<?= view('front/footer_view') ?>
