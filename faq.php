
<!doctype html>
<html lang="es">

<head>
  <?php include "head.php"; ?>
    <!-- CSS for full calender -->
    <link href="https://fullcalendar.io/js/fullcalendar-3.8.2/fullcalendar.min.css" rel="stylesheet" />
  <!-- JS for jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JS for full calender -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.2/fullcalendar.min.js"></script>
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


  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        defaultView: 'month',
        events: [{
            title: 'Entrega final practica web',
            start: '2022-06-09'

          },
          {
            title: 'Ofertas dia de Murcia',
            start: '2022-06-09'

          },
          {
            title: 'Ofertas! Ofertas! Ofertas!',
            start: '2022-06-06',
            end: '2022-06-12'
          },
          {
            title: 'Ofertas de verano',
            start: '2022-06-21',
            end: '2022-07-15'

          }
        ]
      });
    });
  </script>

</head>

<body onload="setcanvas()">


  <?php include "navbar.php" ?>
  <?php include "buscador.php" ?>


  <main class="container p-0">
    <!-- Question Accordion -->
    <section id="questions" class="p-5">
      <section class="container">
        <h2 class="text-center mb-4 ">Preguntas frecuentes</h2>
        <section class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <section class="accordion-item rounded-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed mx-0 rounded-3 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                Hice un pedido de un completo ensamblado a la medida, pero me gustar??a cancelarlo, ??qu?? puedo hacer?
              </button>
            </h2>
            <section id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
              <section class="accordion-body">
                CSSkate tiene como objetivo proporcionarte tu patineta perfecta, nada m??s sacarla de la caja. Ofrecemos servicios gratuitos de montaje interno y aplicaci??n de cinta de agarre con la compra de una tabla nueva o una patineta completa. Como estos servicios se realizan antes del env??o, es muy dif??cil modificar o cancelar un pedido una vez realizado. Si necesita cancelar su pedido antes de que se env??e, haremos todo lo posible para satisfacer su solicitud; sin embargo, se deducir?? una tarifa de reabastecimiento de su reembolso. La tarifa es de $ 5.00 por un pedido cancelado de aplicaci??n de cinta de agarre y de $ 20.00 por un pedido de monopat??n ensamblado. Lamentablemente, si el pedido ya se envi?? desde nuestras instalaciones en el momento de la solicitud de cancelaci??n, no podremos ofrecer un reembolso. Las patinetas ensambladas a medida no se pueden devolver.
              </section>
            </section>
          </section>
          <!-- Item 2 -->
          <section class="accordion-item rounded-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed mx-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
                ??Por qu?? la tabla que recib?? es de un color diferente al que se muestra en la imagen en l??nea?

              </button>
            </h2>
            <section id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
              <section class="accordion-body">
                Las manchas superiores, y ocasionalmente tambi??n las manchas de fondo, variar??n. La madera utilizada por los fabricantes para producir la capa proviene de varios lugares y reaccionar?? de manera diferente al barniz. Desafortunadamente, el resultado de color final no se puede predecir ni manipular, por lo que las empresas de skate no pueden anticipar qu?? selecci??n de color recibir??n. Dado que los colores de las manchas son impredecibles, solo podemos obtener im??genes de una plataforma de muestra del stock. Esto se utiliza como imagen en nuestro sitio. Dicho esto, el color que se muestra en l??nea no siempre ser?? el color recibido. Por esta raz??n, se incluyen renuncias de responsabilidad en la descripci??n del producto de cada plataforma.


              </section>
            </section>
          </section>
          <!-- Item 3 -->
          <section class="accordion-item rounded-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed mx-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
                ??Puedo actualizar o modificar mi direcci??n de env??o despu??s de que el paquete haya salido de sus instalaciones?
              </button>
            </h2>
            <section id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
              <section class="accordion-body">
                Los paquetes nacionales se pueden actualizar mientras est??n en tr??nsito, pero se cobrar?? una tarifa de servicio de $12.00 para hacerlo. Esto se debe a que las compa????as navieras cobran una tarifa por modificar una direcci??n. Los env??os internacionales y los paquetes nacionales enviados a trav??s de Correos no se pueden actualizar ni modificar despu??s de salir de nuestras instalaciones. Recomendamos enf??ticamente revisar su correo electr??nico de confirmaci??n inmediatamente despu??s de realizar un pedido.


              </section>
            </section>
          </section>
          <!-- Item 4 -->
          <section class="accordion-item rounded-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed mx-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
                ??A cu??nto ascender??n los aranceles e impuestos si hago un pedido fuera de Espa??a?
              </button>
            </h2>
            <section id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
              <section class="accordion-body">
                No lo sabemos, ya que cada pa??s es diferente y estas tarifas cambian constantemente. Recomendamos ponerse en contacto con su oficina de correos local o con UPS/FedEx para obtener un c??lculo aproximado de los aranceles e impuestos.


              </section>
            </section>
          </section>
          <!-- Item 5 -->
          <section class="accordion-item rounded-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed mx-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">
                ??Qu?? pasa si algo no encaja o cambio de opini??n?
              </button>
            </h2>
            <section id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
              <section class="accordion-body">
                Puede devolver o cambiar cualquier art??culo comprado en CSSkate durante un m??ximo de 60 d??as desde el momento de la compra. Los productos deben devolverse en las mismas condiciones en que se recibieron. La ropa debe estar sin usar y en el embalaje original. Los zapatos deben estar sin usar y en la caja original del fabricante. Skate Warehouse solo reembolsar?? el costo del producto. Todas las tarifas de env??o e impuestos incurridos ser??n su responsabilidad.


              </section>
            </section>
          </section>
          <!-- Item 6 -->
          <section class="accordion-item rounded-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed mx-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#question-six">
                ??D??nde est?? vuestra tienda?
              </button>
            </h2>
            <section id="question-six" class="accordion-collapse collapse" data-bs-parent="#questions">
              <section class="accordion-body">
                <label for="geoloc" class="form-label">No tenemos tienda f??sica, solo online, as?? que es donde t?? te encuentes (; </label>
                <section id="dvMap" style="width: 500px; height: 500px">
              </section>
              </section>
            </section>
          </section>
           <!-- Item 7 -->
           <section class="accordion-item rounded-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed mx-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#question-seven">
                Enlaces de interes
              </button>
            </h2>
            <section id="question-seven" class="accordion-collapse collapse" data-bs-parent="#questions">
              <section class="accordion-body">
                <ul>
                  <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
                  <li><a href="https://fullcalendar.io/">Fullcalendar.io</a></li>
                  <li><a href="https://randomuser.me/">RandomUser.me</a></li>

                </ul>
              </section>
            </section>
          </section>
        </section>
      </section>
    </section>
    <h2 style="text-align: center;" class="px-5">Calendario de eventos</h2>
    <section class="pb-5 px-5" id="calendar"></section>

    <?php include "footer.php" ?>


</body>

</html>