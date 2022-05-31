<!doctype html>
<html lang="es">

<head>
  <?php include "head.php"; ?>

  <!-- GeoLocalizacion-->
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
          center: LatLng,
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        var marker = new google.maps.Marker({
          position: LatLng,
          map: map,
          title: "<p style = 'height:60px;width:200px'><b>Tu ubicacion (aproximada):</b><br />Latitud: " + p.coords.latitude + "<br />Longitud: " + p.coords.longitude
        });
        google.maps.event.addListener(marker, "click", function(e) {
          var infoWindow = new google.maps.InfoWindow();
          infoWindow.setContent(marker.title);
          infoWindow.open(map, marker);
        });
      });
    } else {
      alert('La Geolocalizacion no esta disponible en tu navegador.');
    }
  </script>
</head>

<body>


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
                <img src="https://randomuser.me/api/portraits/men/8.jpg" class="rounded-circle mb-3" alt="" />
                <h3 class="card-title mb-3">Jose Ramiro</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
              </section>
            </section>
          </section>

          <section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/women/1.jpg" class="rounded-circle mb-3" alt="" />
                <h3 class="card-title mb-3">Andrea Hernández</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
              </section>
            </section>
          </section>

          <section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/men/2.jpg" class="rounded-circle mb-3" alt="" />
                <h3 class="card-title mb-3">Jack Hamilton</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
              </section>
            </section>
          </section>

          <section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/women/4.jpg" class="rounded-circle mb-3" alt="" />
                <h3 class="card-title mb-3">Sara Castillo</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
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
        <section class="mb-3">
          <label for="geoloc" class="form-label">Tu ubicación</label>
          <section id="dvMap" style="width: 500px; height: 500px">
          </section>
          <button type="submit" class="btn btn-dark">Enviar</button>
      </form>
    </section>

  </main>
  <?php include "footer.php" ?>



</body>

</html>