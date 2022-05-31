<?php

session_start();
$idProd = $_GET['id'];
echo '<script>';

if (isset($_SESSION['carrito'])) {

	$carrito = $_SESSION['carrito'];
	if(array_key_exists($idProd, $carrito)){
		$cant = $carrito[$idProd];
		$carrito[$idProd] = $cant + 1;
	
		echo 'alert("Producto ya en el carrito");';

	}else{
		$carrito[$idProd] = 1;
		echo 'alert("Producto añadido al carrito!");';

	}
	$_SESSION['carrito'] = $carrito;
}else{
	$carrito[$idProd] = 1;
	$_SESSION['carrito'] = $carrito;
	echo 'alert("Producto añadido al carrito!");';

}

echo 'window.location.href="miCarrito.php";';
echo '</script>';

?>