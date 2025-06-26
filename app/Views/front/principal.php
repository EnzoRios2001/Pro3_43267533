<?= view('front/head_view') ?>
<?= view('front/navbar_view') ?>
<div class="history-section">
        <p>Somos una empresa que se dedica a la venta de servicios basados en software con diseños únicos e innovadores.
          Elaboramos productos a la medida del cliente.</p>
        <p>¡Muchas gracias por confiar en nosotros!</p>
      </div>

      <div id="carouselCompu" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/compu.jpg" class="d-block w-100" alt="Computadora 1">
          </div>
          <div class="carousel-item">
            <img src="assets/img/compu2.jpg" class="d-block w-100" alt="Computadora 2">
          </div>
          <div class="carousel-item">
            <img src="assets/img/compu3.jpg" class="d-block w-100" alt="Computadora 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCompu" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCompu" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
<?= view('front/footer_view') ?>