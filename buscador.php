 
 <!-- Buscador -->
  <section class="container p-0 pt-2 pb-2">
    <nav id="buscador" class="navbar navbar-light bg-light  justify-content-between">
      <form class="form-inline " method="POST"  action="productos.php">
        <input id="buscador-text" name="buscador-text" class="form-control my-auto" type="search" placeholder="Marcas, skates, ruedas..."
          aria-label="Search">
        <button id="buscador-boton" class="btn btn-outline-dark  my-auto" type="submit">Buscar</button>
      </form>
 <?php
  if(!isset($_SESSION['cliente'])){
    ?>
      <a  style="text-align: left; display: inline;" href="login.php"><img class="img-fluid " alt="Login" id="perfil" src="img/noun-login-1013101.png"></a> 
    <?php }?>

    </nav>
  </section>