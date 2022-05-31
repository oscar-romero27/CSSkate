<?php
	$conexion= new mysqli("localhost", "root", "", "csskate");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		echo 'alert("fallo de la conexion");';

	}
	else {
		//printf("Estas conectado");
	}
?>