<?php

class controllerRegistro{

	public function registrarCLiente($nombre,$apellido,$dni,$celular,$correo,$pass){

		include_once('../model/eUsuario.php');
		$agregar= new usuario;
		$result=$agregar -> agregarCliente($nombre,$apellido,$dni,$celular,$correo,$pass);

		if ($result==1) {
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShowExito("Registro existoso, actualiza la página e ingresa con tu nuevo usuario","<a href='../index.php'>Ok</a>");
		} elseif ($result==0) {
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Registro inválido, DNI existente","<a href='../view/modulos/moduloSeguridad/formRegistrarCLiente.php'>Atrás</a>");
		}
		
		

	}
}
?>