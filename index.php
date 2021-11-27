<?php
	/* include_once("./moduloSeguridad/formAutenticarUsuario.php");
	$objFormAutenticarUsuario = new FormAutenticarUsuario;
	$objFormAutenticarUsuario -> EncabezadoShow();
	$objFormAutenticarUsuario -> FormAutenticarUsuarioShow(); 

	include_once("view/principal.php");
	$form= new principal;
	$form -> formprincipalShow();*/

	require_once("controller/principal.controller.php");
	$principal = new ControllerPrincipal();
	$principal -> ctrPrincipal();

	
	
	
?>