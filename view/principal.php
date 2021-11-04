<?php
    include "view/modulos/encabezado.php";
    include "view/modulos/menu.php";
   

    if (isset($_GET['ruta'])) {
      if ($_GET['ruta']=="registro" ||
          $_GET['ruta']=="inicio" ||          
          $_GET['ruta']=="formAutenticarUsuario") {
        include "view/modulos/".$_GET['ruta'].".php";
      }

    }else{
        include "view/modulos/inicio.php";
      }
    include "view/modulos/pie.php";


?>
		
