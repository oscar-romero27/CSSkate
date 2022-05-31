<?php
function getCompras($id_cliente)
{
  include 'conexion.php';
  $sentencia = "SELECT id_compra, nombre, detalles, precio, cantidad, fecha FROM `compra` INNER JOIN producto ON compra.id_producto = producto.id_producto WHERE id_cliente=" . $id_cliente;
  $resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

  $count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta
  $prevId = -1;
  $total = 0;
  if ($count > 0) //si la variable count es mayor a 0
  {
    while ($compras = mysqli_fetch_object($resultado)) {
      if($prevId != -1 && $prevId != $compras->id_compra){
        echo '
        <tr class="table-info">
        <td>Total</td>
        <td></td>
        <td></td>
        <td>'.$total.'€</td>
        </tr>
        </tbody>
        </table>';
      }

      if ($prevId != $compras->id_compra) {
        $prevId = $compras->id_compra;
        $total = 0;
        echo '
        <br>
        <p class="lead text-white">
          Fecha: '.$compras->fecha.'
        </p>
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
      }

      echo  '
<tr>
  <td  scope="row">'.$compras->nombre.'</td>
  <td>'.$compras->detalles.'</td>
  <td>'.$compras->cantidad.'</td>
  <td>'.$compras->precio.'€</td>
</tr>
		  ';
      $total += $compras->cantidad * $compras->precio;
    }
    echo '
    <tr class="table-info">
    <td>Total</td>
    <td></td>
    <td></td>
    <td>'.$total.'€</td>
    </tr>
    </tbody>
    </table>';
  } else {
    echo '<script>';
    echo 'alert("No hay productos en la base de datos");';
    echo 'window.location.href="index.php";';
    echo '</script>';
  }
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
    <section id="misCompras" class="p-5 bg-gradient">
      <h2 class="text-center text-white">Bienvenido a tus compras <?php echo $_SESSION['cliente']->nombre ?> </h2>
      <p class="lead text-center text-white mb-5">
        Acá puedes encontrar un detalle de tus compras:
      </p>

      <?php getCompras($_SESSION['cliente']->id_cliente); ?>


      <a id="cerrarSesion" class="custom-btn text-center btn-15 w-auto" style="display: block;" href="cerrarSesion.php">Cerrar sesión</a>

    </section>


    
  </main>
  <?php include "footer.php" ?>



</body>

</html>