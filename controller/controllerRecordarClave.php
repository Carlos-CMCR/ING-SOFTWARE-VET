<?php

    class controllerRecordarClave{
        public function ValidarLog(){
            include_once("../model/eUsuario.php");
            $objUsuario = new Usuario;
            $respuesta = $objUsuario -> VerificarLog();
            $_SESSION["respBD"] = $respuesta;
            if($respuesta=='0'){
                include_once("../shared/formMensajeSistema.php");
                $mensaje = new formMensajeSistema;
                $mensaje ->formMensajeSistema();                            
                $mensaje ->formMensajeSistemaShow("El usuario no existe o está inactivo","<form action='../moduloSeguridad/getRecordarClave.php' method='POST'><input type='submit' class='btn btn-link'  name='btnRecordarClave' id='btnRecordarClave' value='Volver'></form>");
            }else{
                                
                    include_once("../view/modulos/moduloSeguridad/formPreguntaSeguridad.php");
                    
            }
        }

        public function ValidarCoincidencia($np){
            include_once("../model/eUsuario.php");
            $objUsuario = new Usuario;
            $respuesta = $objUsuario -> Modificar($np);
            if($respuesta==0){
                include_once("../shared/formMensajeSistema.php");
                $mensaje = new formMensajeSistema;
                $mensaje ->formMensajeSistema();                         
                $mensaje ->formMensajeSistemaShow("Error en la modificación","<form action='../moduloSeguridad/getRecordarClave.php' method='POST'><input type='submit' class='btn btn-link'  name='btnRecordarClave' id='btnRecordarClave' value='Volver'></form>");
            }else{
                    include_once("../shared/formMensajeSistema.php");
                    $mensaje = new formMensajeSistema;
                    $mensaje ->formMensajeSistema();                           
                    $mensaje ->formMensajeSistemaShowExito("Su contraseña ha sido cambiada con éxito","<form action='../view/modulos/moduloSeguridad/formAutenticarUsuario.php' method='POST'>
            <input type='submit' class='btn btn-link' name='btnAtras' value='Atrás'>
        </form>");
            }
    
        }

    }

?>