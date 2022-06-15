<!doctype html>
<html lang="es">
<head>
  <?php include "head.php"; ?>
</head>

<body onload="setcanvas()">

  <?php include "navbar.php" ?>
  <?php include "buscador.php" ?>

  <main class="container p-0">
    <!-- Contenido del inicio -->
    <section id="contenido-inicio">
      <section class="row">
        <section class="col-md-12"><a href="productos.php"><img src="img/skate-completos.jpg" class="img-fluid"></a></section>
        <section class="col-md-12 p-0 jumbotron text-center bg-light bg-opacity-75">

          <a id="enlace-jumbo" href="productos.php">
            <h1 class="display-3">Ofertas Semana Santa</h1>
          </a>
          <p class="lead">Dile hola a las vacaciones con un nuevo Skate.</p>

        </section>
        <section class="col-md-12 col-lg-7"><a href="productos.php"><img src="img/Santa-Cruz_Startseite_1920x1920.jpg" class="img-fluid"></a></section>
        <section class="col-md-6 col-lg-5"><a href="productos.php"><img src="img/old-school.jpg" class="img-fluid"></a></section>
        <section class="col-md-6 col-lg-5"><a href="productos.php"><img src="img/Vans-Classics-Startseite_1920x1920.jpg" class="img-fluid"></a></section>
        <section class="col-md-12 col-lg-7"><a href="productos.php"><img src="img/Skateboards-Daniel-L-bron_1920x1920.jpg" class="img-fluid"></a></section>
        <section class="col-md-12"><a href="productos.php"><img src="img/mochilas-skaters.jpg" class="img-fluid"> </a></section>

      </section>

    </section>
    <!-- Newsletter -->
    <section id="newsletter" class=" text-light p-5">
      <section class="container">
        <section class="d-md-flex justify-content-between align-items-center">
          <h3 class="mb-3 mb-md-0 p-1">¡Suscríbete a nuestra lista para recibir promociones!</h3>

          <section class="input-group news-input">
            <input type="text" class="form-control" placeholder="Correo electronico" aria-label="Correo del receptor" aria-describedby="button-addon2" />
            <button class="btn btn-dark btn-lg" type="button">Enviar</button>
          </section>
        </section>
      </section>
    </section>

  </main>
  <?php include "footer.php" ?>
</body>

</html>