<!doctype html>
<html lang="es">

<head>
  <?php include "head.php"; ?>

</head>

<body>


  <?php include "navbar.php" ?>
  <?php include "buscador.php" ?>
  <?php include "getProductos.php" ?>

  <main class="container p-0">
    <!-- Contenido de los productos -->

    <section id="instructors" class="p-5 ">
      <section class="container">
        <h2 id="skateboards" class="text-center text-white">¡Nuestros skateboards!</h2>
        <p class="lead text-center text-white mb-5">
          Todos nuestros skateboards son hechos con 100% madera de roble
        </p>
        <section class="row g-4">

          <?php
          if (isset($_POST["buscador-text"])) {
            buscarProductos($_POST["buscador-text"]);
          } else {
            getAllSkates();
          ?>
            <h2 id="longboards" class="text-center text-white mt-5">¡Nuestros longboards!</h2>
            <p class="lead text-center text-white mb-5">
              Todos nuestros longboards son hechos con 100% madera de arce
            </p>
            <section class="row g-4">
              <?php
              getAllLongs();
              ?>
            </section>
          <?php
          }
          ?>
        </section>

      </section>
    </section>


  </main>
  <?php include "footer.php" ?>

</body>

</html>