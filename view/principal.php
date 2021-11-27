<?php
   

    if (isset($_GET['action'])) {
      require_once('../helpers/helpers.php');  
      if ($_GET['action']=="formRegistrarCliente" ||          
          $_GET['action']=="formAutenticarUsuario"|| 
          $_GET['action']=="formVerificarUsuario" || 
          $_GET['action']=="formPreguntaSeguridad"|| 
          $_GET['action']=="formCambiarPassword") {
          include "modulos/moduloSeguridad/".$_GET['action'].".php";
      }}
    else {
      include "view/modulos/encabezado.php";
      include "view/modulos/inicio.php";
      include "view/modulos/pie.php";
    }


    
?>
		
