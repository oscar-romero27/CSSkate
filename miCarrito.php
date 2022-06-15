<?php



function borrarCarrito(){
  unset($_SESSION['carrito']);
}

function getCarrito()
{
  include 'conexion.php';

  $carrito = $_SESSION['carrito'];
  $total = 0;

  echo '
        <br>
        <table class="w-100 table table-striped table-dark">
        <thead class="thead-dark">
        <tr>
          <th scope="col" >Nombre</th>
          <th scope="col">Detalles</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
        </tr>
        </thead>
        <tbody>';

  foreach ($carrito as $idprod => $cant) {
    $sentencia = "SELECT nombre, detalles, precio FROM producto WHERE id_producto= " . $idprod;
    $resultado = $conexion->query($sentencia) or die("Error al comprobar producto: " . mysqli_error($conexion));
    $prod = mysqli_fetch_object($resultado);
    echo  '
    <tr>
      <td  scope="row">' . $prod->nombre . '</td>
      <td>' . $prod->detalles . '</td>
      <td>' . $cant . '</td>
      <td>' . $prod->precio . '€</td>
    </tr>
          ';
    $total += $cant * $prod->precio;
  }
  echo '
  <tr class="table-info">
  <td>Total</td>
  <td></td>
  <td></td>
  <td>' . $total . '€</td>
  </tr>
  </tbody>
  </table>';
}



?>

<!doctype html>
<html lang="es">

<head>
  <?php include "head.php"; ?>
</head>

<body>


  <?php include "navbar.php" ?>
  <?php include "buscador.php" ?>


  <main class="container p-0">
    <section id="miCarrito" class="p-5 bg-gradient">
      <h2 class="text-center text-white">El carrito de <?php if(isset($_SESSION['cliente'])) { echo $_SESSION['cliente']->nombre;}else{ echo 'visitante'; } ?> </h2>
      <p class="lead text-center text-white mb-5">
        Este es el detalle de tu carrito:
      </p>

      <?php if(isset($_SESSION['carrito'] ) && !isset($_GET['borrar'])){
          getCarrito();
         } else{
           borrarCarrito();
         } 
        ?>


      <a id="comprarCarrito" class="custom-btn text-center btn-14 w-auto" style="display: block;" href="comprarCarrito.php">Comprar carrito</a>
      <br>
      <a id="borrarCarrito" class="custom-btn text-center btn-15 w-auto" style="display: block;" href="miCarrito.php?borrar=1">Borrar carrito</a>


    </section>



  </main>
  <?php include "footer.php" ?>



</body>

</html>