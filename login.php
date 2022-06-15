<!doctype html>
<html lang="es">

<head>
  <?php include "head.php"; ?>
</head>

<body onload="setcanvas()">


  <?php include "navbar.php" ?>
  <?php include "buscador.php" ?>


  <main class="container p-0">
    <!-- Login -->

    <section id="login" class="row">
      <form class="form-signin p-5 col-6 mx-auto py-4 bg-light bg-opacity-50 my-5 rounded-3" method="POST" action="login_accion.php">
        <h2 class="form-signin-heading">Introduce tus credenciales</h2>
        <br>
        <label for="correo" class="sr-only">Correo Electrónico</label>
        <input type="text" id="correo" name="inputUsuario" class="form-control" placeholder="Introduce tu correo" required autofocus>
        <br>
        <label for="pass" class="sr-only">Contraseña</label>
        <input type="password" id="pass" name="inputPassword" class="form-control" placeholder="Contraseña" required>
        <br>
        <button class="custom-btn btn-4 m-0" type="submit">Iniciar sesión</button>
      </form>
    </section>


  </main>
  <?php include "footer.php" ?>


</body>

</html>