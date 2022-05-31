<?php

session_start();

if (isset($_SESSION['cliente'])) {
	$idProd = $_GET['id'];
	$idUser = $_SESSION['cliente']->id_cliente;
	comprarYa($idProd, $idUser);
}

function comprarYa($idProd, $idUser)
{
	include 'conexion.php';
	
	$sentencia = "SELECT MAX(`id_compra`) as `max` FROM `compra`;";
	$resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));
	$max = mysqli_fetch_object($resultado)->max;

	$sentencia = "INSERT INTO `compra`(`id_compra`, `id_cliente`, `id_producto`, `cantidad`) VALUES ('".$max + 1 ."','". $idUser ."','". $idProd ."','1');";


	if ($conexion->query($sentencia)) 
	{
		$sentencia = "UPDATE `producto` SET `stock`=`stock` - 1 WHERE `id_producto` = ". $idProd;
		$conexion->query($sentencia);
		echo '<script>';
		echo 'alert("Compra realizada!");';
		echo 'window.location.href="micuenta.php";';
		echo '</script>';

	} else {
		echo '<script>';
		echo 'alert("Error de compra");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
}
