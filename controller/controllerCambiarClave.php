<?php

class controllerCambiarClave{

    public function ActualizarPassword($np){
        /*echo "np:".$np;*/

        include_once("../model/eUsuario.php");
        $objUsuario = new Usuario;
        $respuesta = $objUsuario -> ModificarPassword($np);

        if($respuesta==0){
            include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();                            
            $mensaje ->formMensajeSistemaShow("Error en la modificación","<a href='../index.php'>Ir a la pagina principal</a>");
        }else{
            /*echo " Login:".$_SESSION["user"]." Contrase:".$_SESSION["contrasena"];*/
            session_destroy();
            include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();                            
            $mensaje ->formMensajeSistemaShowExito("La modificación se realizó con exito","<a href='../index.php'>Ir a la pagina principal</a>");  
          }
    }

}


?>