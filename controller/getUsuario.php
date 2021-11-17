<?php
    

    function validarcampos($login,$password){
        if(strlen($login)<8 or strlen($password)<8){
            return(0);
        }else{
            return(1);
        }
    }

    if(isset($_POST['btnIngresar'])){
        $login = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        
        $resultado = validarcampos($login,$password);

        if($resultado == 0){
            include_once("../shared/formMensajeSistema.php");
            $mensajeo = new formMensajeSistema;
            $mensajeo ->formMensajeSistema();
            $mensajeo ->formMensajeSistemaShow("Los datos son invalidos","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Ir al inicio</a>");

        }else{
            session_start();
            $_SESSION["user"]=$login;
            $_SESSION["contrasena"]=$password;
            include_once("controllerAutenticarUsuario.php");
            $valida = new controllerAutenticarUsuario;
            $valida -> ValidarUsuario();

        }
    }else{
        include_once("../shared/formMensajeSistema.php");
        $mensaje = new formMensajeSistema;
        $mensaje ->formMensajeSistema();
        $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Ir al inicio</a>");
    }

?>