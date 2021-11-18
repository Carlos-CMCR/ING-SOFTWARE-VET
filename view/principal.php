<?php
    include "view/modulos/encabezado.php";

    /*if (isset($_GET['ruta'])) {
      if ($_GET['ruta']=="registro" ||
          $_GET['ruta']=="inicio" ||          
          $_GET['ruta']=="formAutenticarUsuario") {
        include "view/modulos/".$_GET['ruta'].".php";
        echo $_GET['ruta'];
        ---
        $ruta = basename(__FILE__);
          echo $ruta ;
        include "view/modulos/moduloSeguridad/".$ruta;
      }*/

      include "view/modulos/inicio.php";
      
        
    
      
    include "view/modulos/pie.php";


?>
		
