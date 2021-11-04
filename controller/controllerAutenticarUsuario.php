 <?php
    
    class controllerAutenticarUsuario{
        public function ValidarUsuario(){
            include_once("../model/eUsuario.php");
            $log=$_SESSION["user"];
			$pass=$_SESSION["contrasena"];
            $objUsuario = new Usuario;
        $respuesta = $objUsuario -> VerificarUsuario($log,$pass);
            switch ($respuesta) {
                case 1:
                   /* echo "Login:".$_SESSION["user"];
                    echo "-Password:".$_SESSION["contrasena"];
*/
                    include_once("../view/modulos/moduloSeguridad/formHome.php");
                    $objFormhome = new FormHome;
                    $objFormhome -> FormHomeUpShow();
                    $objFormhome -> RegistrarMascota();
                    $objFormhome -> FormCerrarSesion();
                    $objFormhome -> FormCambiarClave();
                    $objFormhome -> FormHomeDownShow();
                    
                    break;

                               
                case 4:
               /*     echo "Login:".$_SESSION["user"];
                    echo "-Password:".$_SESSION["contrasena"];
*/
                    include_once("../view/modulos/moduloSeguridad/formHome.php");
                    $objFormhome = new FormHome;
                    $objFormhome -> FormHomeUpShow();
                    $objFormhome -> FormGestionarUsuario();
                    $objFormhome -> FormCerrarSesion();
                    $objFormhome -> FormCambiarClave();
                    $objFormhome -> FormHomeDownShow();

                    break;
                
                default:
                        include_once("../shared/formMensajeSistema.php");
                        $mensaje = new formMensajeSistema;
                        $mensaje ->formMensajeSistema();
                        $mensaje ->formMensajeSistemaShow("Usuario no encontrado","<a href='../index.php'>Ir al inicio</a>");
                    break;
            }            
        }
    }

?>