<?php
	

	if (isset($_POST['registrar'])) {
		$nombre=$_POST['txtNombre'];
		$apellido=$_POST['txtApellido'];
		$celular=$_POST['txtCelular'];
		$correo=$_POST['txtCorreo'];
		$pass1=$_POST['txtPass1'];
		$pass2=$_POST['txtPass2'];

		include_once("../view/modulos/moduloSeguridad/formRegistrarMascota.php");
	}
	elseif (isset($_POST['registrarMascota'])) {

		$nombreMascota=$_POST['txtNombreMascota'];
		$edad=$_POST['txtEdad'];
		$vacunas=$_POST['txtVacunas'];
		$raza=$_POST['txtRaza'];

		echo "Datos capturados";
		echo $nombre;
		echo $apellido;
		echo $nombreMascota;
		echo $raza;
		
	}
	else
	{
		echo "Datos capturados";
		echo $nombre;
		echo $apellido;
		echo $NombreMascota;
		echo $raza;
	}

?>