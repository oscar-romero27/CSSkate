<?php

	session_start();


	ConsultarUsuario($_POST['inputUsuario'], $_POST['inputPassword']);

	function ConsultarUsuario($usuario, $password)
	{
		include'conexion.php';
		$sentencia="SELECT * FROM cliente WHERE correo='".$usuario."' AND pass='".$password."' ";
		$resultado=$conexion->query($sentencia) or die ("Error al comprobar usuario: ".mysqli_error($conexion));

		$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

		if($count > 0) //si la variable count es mayor a 0
		{
			$cliente = mysqli_fetch_object($resultado);
			$admin = $cliente->admin;
			$_SESSION['cliente']=$cliente;
			
			echo '<script>';
				if($admin){
					echo 'alert("Bienvenido admin!!");';	
				}else{
					echo 'alert("Bienvenido!!");';
				}
				
				echo 'window.location.href="index.php";';
			echo '</script>';
		}
		else
		{
			echo '<script>';
				echo 'alert("Datos de acceso incorrectos");';
				echo 'window.location.href="login.php";';
			echo '</script>';
		}
	}
