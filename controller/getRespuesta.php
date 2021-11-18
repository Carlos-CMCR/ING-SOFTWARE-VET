<?php
    session_start();
    
    function validarcamporespuesta($respuesta){
        if(strlen($respuesta)==0){
            return(0);
        }else{
            return(1);
        }
    }

    if(isset($_POST['btnEnviar'])){
        $respuesta = trim($_POST['respuesta']);
        $resultado = validarcamporespuesta($respuesta);

        if($resultado == 0){
            
            include_once("../shared/formMensajeSistema.php");
            $mensajeo = new formMensajeSistema;
            $mensajeo ->formMensajeSistema();
            $mensajeo ->formMensajeSistemaShow("No introdujo ninguna respuesta","<form action='../moduloSeguridad/getRecordarClave.php' method='POST'><input type='submit' class='btn btn-link'  name='btnRecordarClave' id='btnRecordarClave' value='Volver'></form>");

        }else{

            if($respuesta==$_SESSION["respBD"]){

                include_once("../view/modulos/moduloSeguridad/formCambiarPassword.php");
                
               
            
            }else{

                 include_once("../shared/formMensajeSistema.php");
                $mensaje = new formMensajeSistema;
                $mensaje ->formMensajeSistema();                           
                $mensaje ->formMensajeSistemaShow("La respuesta es incorrecta","<form action='../moduloSeguridad/getRecordarClave.php' method='POST'><input type='submit' class='btn btn-link'  name='btnRecordarClave' id='btnRecordarClave' value='Volver'></form>");

                
            }
        }
    }else{
        include_once("../shared/formMensajeSistema.php");
        $mensaje = new formMensajeSistema;
        $mensaje ->formMensajeSistema();
        $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../index.php'>Ir al inicio</a>");
    }

?>