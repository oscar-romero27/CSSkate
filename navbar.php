<!-- Navbar -->
<nav class="container navbar navbar-expand-lg navbar-dark ">
    <a id="a-logo" class="navbar-brand" href="index.php">
      <img id="logo" class="rounded float-left" src="img/2Carve, Slide and Skate .png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <section class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link" href="productos.php#skateboards">
            <h5>Skateboards</h5> </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos.php#longboards">
            <h5>Longboards</h5>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">
            <h5>Preguntas frecuentes</h5>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nosotros.php">
            <h5>Nosotros</h5>
          </a>
        </li>
       <?php
        session_start();
        
        if(isset($_SESSION['cliente'])){
          echo '
          <li class="nav-item">
            <a class="nav-link" href="micuenta.php">
              <h5>Mi Cuenta '.$_SESSION['cliente']->nombre.' </h5>
            </a>
          </li>
          ';
          } 
          
        ?>
      </ul>
    </section>
  </nav>