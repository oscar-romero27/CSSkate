<?php

session_start();

if (isset($_SESSION['cliente']) && isset($_SESSION['carrito'])) {
	$carrito = $_SESSION['carrito'];
	$idUser = $_SESSION['cliente']->id_cliente;
	comprarCarrito($carrito, $idUser);

	echo '<script>';
		echo 'alert("Compra exitosa!");';
		echo 'window.location.href="micuenta.php";';
		echo '</script>';

}else{
	echo '<script>';
		echo 'alert("Error de compra, inicia sesion antes de empezar a comprar");';
		echo 'window.location.href="login.php";';
		echo '</script>';
}

function comprarCarrito($carrito, $idUser)
{
	include 'conexion.php';

	$sentencia = "SELECT MAX(`id_compra`) as `max` FROM `compra`;";
	$resultado = $conexion->query($sentencia) or die("Error al comprobar productos: " . mysqli_error($conexion));
	$max = mysqli_fetch_object($resultado)->max;

	foreach ($carrito as $idprod => $cant) {
		$sentencia = "INSERT INTO `compra`(`id_compra`, `id_cliente`, `id_producto`, `cantidad`) VALUES ('" . $max + 1 . "','" . $idUser . "','" . $idprod . "','" . $cant . "');";
		
		if ($conexion->query($sentencia)) {
			$sentencia = "UPDATE `producto` SET `stock`=`stock` - ". $cant ." WHERE `id_producto` = " . $idprod;
			$conexion->query($sentencia);
		}
	}
	unset($_SESSION['carrito']);
}

?>
