<?php
    session_start();
        if(isset($_POST['btnCambiarClave'])){
            include_once("../view/modulos/moduloSeguridad/formPreguntarPassword.php");
            
        }else{
            include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../index.php'>Ir al inicio</a>");
    
        }
       
        


?>