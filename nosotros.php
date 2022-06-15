<!doctype html>
<html lang="es">

<head>
  <?php include "head.php"; ?>

  
</head>

<body onload="setcanvas()">


  <?php include "navbar.php" ?>
  <?php include "buscador.php" ?>


  <main class="container p-0">
    <section id="equipo" class="p-5 bg-gradient">
      <section class="container">
        <h2 class="text-center text-white">¡Conoce a nuestro equipo!</h2>
        <p class="lead text-center text-white mb-5">
          Todo nuestro equipo tiene 5+ años de experiencia sobre la tabla y detrás del mostrador
        </p>
        <section class="row g-4">
          <section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/men/8.jpg" class="rounded-circle mb-3" alt="Imágen de empleado" />
                <h3 class="card-title mb-3">Jose Ramiro</h3>
                <p class="card-text">
                  Skate or die! Skater desde los 8 años, de Murcia centro y me encanta ayudar a los chavales con sus patines de todo tipo.
                </p>
              </section>
            </section>
          </section>

          <section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/women/1.jpg" class="rounded-circle mb-3" alt="Imágen de empleado" />
                <h3 class="card-title mb-3">Andrea Hernández</h3>
                <p class="card-text">
                  De Lorca, amante de los longboards, 10+ años de experiencia en servicio al cliente.
                </p>
              </section>
            </section>
          </section>

          <section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/men/2.jpg" class="rounded-circle mb-3" alt="Imágen de empleado" />
                <h3 class="card-title mb-3">Jack Hamilton</h3>
                <p class="card-text">
                  Americano en Murcia, yo amo ser skater! If you need someone who speaks english, I'm your guy.
                </p>
              </section>
            </section>  
          </section>

          <section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/women/4.jpg" class="rounded-circle mb-3" alt="Imágen de empleado" />
                <h3 class="card-title mb-3">Sara Castillo</h3>
                <p class="card-text">
                  Madre de 3, jefa de CSSkate y disponible para lo que necesites!
                </p>
              </section>
            </section>
          </section>
        </section>
      </section>
    </section>

    <h2 class="text-center text-white">Contáctanos</h2>
    <p class="lead text-center text-white mb-5">
      Llena nuestro formulario para que nos pongamos en contacto contigo
    </p>
    <!-- Form -->
    <section class="d-flex justify-content-center p-2">

      <form class="col-6 bg-light rounded-3 p-3">
        <section class=" mb-3">
          <label for="correo" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" placeholder="tu@correo.com" id="correo" aria-describedby="emailHelp">
          <span id="emailHelp" class="form-text">No compartiremos tu correo con nadie más.</span>
        </section>
        <section class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" placeholder="Tu nombre..." id="nombre">
        </section>
        <section class="mb-3">
          <label for="dudas" class="form-label">Dudas o comentarios</label>
          <textarea type="text" class="form-control" placeholder="Tus dudas o comentarios aqui" id="dudas"></textarea>
        </section>
        
          <button type="submit" class="btn btn-dark">Enviar</button>
      </form>
    </section>

  </main>
  <?php include "footer.php" ?>



</body>

</html>