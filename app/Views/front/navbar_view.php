<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal">Tech Company</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./equipo.html">¿Quienes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sesion">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuariocrud">CRUD Usuarios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Talentos Digitales
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="https://talentosdigitales.ar/" target="_blank">Sitio Principal</a></li>
            <li><a class="dropdown-item" href="#">Cursos</a></li>
            <li><a class="dropdown-item" href="#">Certificaciones</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Contacto</a></li>
          </ul>
        </li>
        <!-- Bienvenido y logout solo si está logueado -->
        <?php if (session('nombre')): ?>
        <li class="nav-item ms-3 d-flex align-items-center">
          <span class="text-white me-2">Bienvenido, <b><?= esc(session('nombre')) ?></b></span>
          <a href="<?= site_url('sesion/logout') ?>" class="btn btn-outline-light btn-sm">Cerrar sesión</a>
        </li>
        <?php endif; ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>