<?php
    session_start();
    
    function validarcampornp($new_password){
        if(strlen($new_password)<8){
            return(0);
        }else{
            return(1);
        }
    }

    if(isset($_POST['btnActualizar'])){
        $np = trim($_POST['new_password']);
        $rp = trim($_POST['repet_password']);

        $respnp = validarcampornp($np);

        if($respnp == 0){
            
            include_once("../shared/formMensajeSistema.php");
            $mensajeo = new formMensajeSistema;
            $mensajeo ->formMensajeSistema();
            $mensajeo ->formMensajeSistemaShow("Los datos deben contener más de 8 caracteres","<a href='../view/principal.php?action=formCambiarPassword'>Atrás</a>");

        }else{
            if($np==$rp){
                
                include_once("controllerRecordarClave.php");
                $valida = new controllerRecordarClave;
                $valida -> ValidarCoincidencia($np);

            }else{
                include_once("../shared/formMensajeSistema.php");
                $mensajeo = new formMensajeSistema;
                $mensajeo ->formMensajeSistema();
                $mensajeo ->formMensajeSistemaShow("Las contraseñas ingresadas no coinciden","<a href='../view/principal.php?action=formCambiarPassword'>Atrás</a>");}
        }
    }else{
        include_once("../shared/formMensajeSistema.php");
        $mensaje = new formMensajeSistema;
        $mensaje ->formMensajeSistema();
        $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../index.php'>Ir al inicio</a>");
    }




?>