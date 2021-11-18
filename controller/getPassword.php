<?php
    session_start();
    
    function validarcampopassword($password){
        if(strlen($password)<8){
            return(0);
        }else{
            return(1);
        }
    }

    if(isset($_POST['btnSiguiente'])){
        $password = trim($_POST['passwordUSER']);
        $resultado = validarcampopassword($password);

        if($resultado == 0){
          
            include_once("../shared/formMensajeSistema.php");
            $mensajeo = new formMensajeSistema;
            $mensajeo ->formMensajeSistema();
            $mensajeo ->formMensajeSistemaShow("Los datos son invalidos","<form action='../moduloSeguridad/getCambiarClave.php' method='POST'><input type='submit' name='btnCambiarClave' id='btnCambiarClave' value='Volver'></form>");

        }else{
            
            if($password==$_SESSION["contrasena"]){
                include_once("../view/modulos/moduloSeguridad/formCambiarClave.php");
                
                

            }else{
                include_once("../shared/formMensajeSistema.php");
                $mensajeo = new formMensajeSistema;
                $mensajeo ->formMensajeSistema();
                $mensajeo ->formMensajeSistemaShow("Contraseña incorrecta","<form action='../moduloSeguridad/getCambiarClave.php' method='POST'><input type='submit' name='btnCambiarClave' id='btnCambiarClave' value='Volver'></form>");
            }
        }
    }elseif(isset($_POST['btnAtras'])){
        include_once("controllerAutenticarUsuario.php");
        $objhome=new controllerAutenticarUsuario;
        $objhome -> ValidarUsuario();

    }else{
        include_once("../shared/formMensajeSistema.php");
        $mensaje = new formMensajeSistema;
        $mensaje ->formMensajeSistema();
        $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../index.php'>Ir al inicio</a>");
    }

?>