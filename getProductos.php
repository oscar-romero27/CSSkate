<?php



function getAllProductos()
{
	include 'conexion.php';
	$sentencia = "SELECT * FROM producto";
	$resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

	$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

	if ($count > 0) //si la variable count es mayor a 0
	{
		while ($prod = mysqli_fetch_object($resultado)) {

			echo '
			<section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img
                  src="' . $prod->img . '"
                  class="rounded-circle mb-3 w-50"
                  alt=""
                />
                <a href="producto.php?id=' . $prod->id_producto . '">
                <h3 class="card-title mb-3">' . $prod->nombre . '</h3>
                </a><p class="card-text">
                  ' . $prod->detalles . '<br>
                  <span class="text-warning">' . $prod->precio . ' €</span>
                </p>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
               
              </section>
            </section>
          </section>
		  ';
		}
	} else {
		echo '<script>';
		echo 'alert("No hay productos en la base de datos");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
}

function getAllSkates()
{
	include 'conexion.php';
	$sentencia = "SELECT * FROM producto WHERE longboard=0";
	$resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

	$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

	if ($count > 0) //si la variable count es mayor a 0
	{
		while ($prod = mysqli_fetch_object($resultado)) {

			echo '
			<section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img
                  src="' . $prod->img . '"
                  class="rounded-circle mb-3 w-50"
                  alt=""
                />
                <a href="producto.php?id=' . $prod->id_producto . '">
                <h3 class="card-title mb-3">' . $prod->nombre . '</h3>
                </a><p class="card-text">
                  ' . $prod->detalles . '<br>
                  <span class="text-warning">' . $prod->precio . ' €</span>
                </p>
                <a href="carrito.php?id='.$prod->id_producto .'"><i class="fa-solid fa-cart-shopping"></i></a>
               
              </section>
            </section>
          </section>
		  ';
		}
	} else {
		echo '<script>';
		echo 'alert("No hay productos en la base de datos");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
}

function getAllLongs()
{
	include 'conexion.php';
	$sentencia = "SELECT * FROM producto WHERE longboard=1";
	$resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

	$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

	if ($count > 0) //si la variable count es mayor a 0
	{
		while ($prod = mysqli_fetch_object($resultado)) {

			echo '
			<section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img
                  src="' . $prod->img . '"
                  class="rounded-circle mb-3 w-50"
                  alt=""
                />
                <a href="producto.php?id=' . $prod->id_producto . '">
                <h3 class="card-title mb-3">' . $prod->nombre . '</h3>
                </a><p class="card-text">
                  ' . $prod->detalles . '<br>
                  <span class="text-warning">' . $prod->precio . ' €</span>
                </p>
                <a href="carrito.php?id='.$prod->id_producto .'"><i class="fa-solid fa-cart-shopping"></i></a>
               
              </section>
            </section>
          </section>
		  ';
		}
	} else {
		echo '<script>';
		echo 'alert("No hay productos en la base de datos");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
}

function getProducto($idProd)
{
	include 'conexion.php';
	$sentencia = "SELECT * FROM producto where id_producto=" . $idProd;
	$resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

	$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

	if ($count > 0) //si la variable count es mayor a 0
	{
		$prod = mysqli_fetch_object($resultado);

		echo '
			<img src="' . $prod->img . '" alt="" class="col-lg-5 img-thumbnail">
            <section id="info-producto" class="col-lg-7 ">
                <h1 id="nombre" class="mt-5 ms-3 text-black">' . $prod->nombre . '</h3>
                <p id="precio" class="ms-3"><b>' . $prod->precio . '€</b></p>
                <h3 class="ms-3">Detalles del producto</h3>
                <p id="detalles" class="mx-3 text-black opacity-75">
                ' . $prod->detalles . '
                </p>
    	';
		if ($prod->stock > 0) {
			echo	'<p class="ms-3">En stock: <span id="stock" class="text-success">
	si
	</span></p>';
		} else {
			echo	'<p class="ms-3">En stock: <span id="stock" class="text-danger">
	no
	</span></p>';
		}

		echo '
	                        <section class="container-fluid">
                                <section class="d-flex justify-content-evenly mb-3">
                                    <a id="comprar" class="col-4 custom-btn btn-15 w-auto"
                                        href="comprar.php?id=' . $prod->id_producto . '">¡Comprame ya!</a>
                                    <a id="carrito" class="col-4 custom-btn btn-2 w-auto"
                                        href="carrito.php?id=' . $prod->id_producto . '">Agregar al carrito</a>
                                </section>
                            </section>
                    </section>
		  ';
	} else {
		echo '<script>';
		echo 'alert("No hay productos en la base de datos");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
}


function getRelacionados()
{
	include 'conexion.php';
	$seed = rand();


	$sentencia = "SELECT * FROM producto ORDER BY RAND() LIMIT 3";
	$resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

	$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

	if ($count > 0) //si la variable count es mayor a 0
	{
		while ($prod = mysqli_fetch_object($resultado)) {

			echo '
			<section class="col-lg-4">
                            <section class="card bg-light">
                                <section class="card-body text-center">
                                    <img src="' . $prod->img . '" class="rounded-circle mb-3 w-50" alt="" />
                                    <a href="producto.php?id=' . $prod->id_producto . '">
                                        <h3 class="card-title mb-3">' . $prod->nombre . '</h3>
                                    </a>
                                    <p class="card-text">
									' . $prod->detalles . '<br>
                                        <span class="text-warning">' . $prod->precio . ' €</span>
                                    </p>
                                    <a href="carrito.php?id='.$prod->id_producto .'"><i class="fa-solid fa-cart-shopping"></i></a>

                                </section>
                            </section>
                        </section>
		  ';
		}
	} else {
		echo '<script>';
		echo 'alert("No hay productos en la base de datos");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
}


function buscarProductos($texto)
{
	include 'conexion.php';
	$sentencia = "SELECT * FROM producto WHERE nombre LIKE '%" . $texto . "%' OR detalles LIKE '%" . $texto . "%'";
	$resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));

	$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

	if ($count > 0) //si la variable count es mayor a 0
	{
		while ($prod = mysqli_fetch_object($resultado)) {

			echo '
			<section class="col-md-6 col-lg-3">
            <section class="card bg-light">
              <section class="card-body text-center">
                <img
                  src="' . $prod->img . '"
                  class="rounded-circle mb-3 w-50"
                  alt=""
                />
                <a href="producto.php?id=' . $prod->id_producto . '">
                <h3 class="card-title mb-3">' . $prod->nombre . '</h3>
                </a><p class="card-text">
                  ' . $prod->detalles . '<br>
                  <span class="text-warning">' . $prod->precio . ' €</span>
                </p>
                <a href="carrito.php?id='.$prod->id_producto .'"><i class="fa-solid fa-cart-shopping"></i></a>
               
              </section>
            </section>
          </section>
		  ';
		}
	} else {
		echo '<script>';
		echo 'alert("No hay productos en la base de datos");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
}
