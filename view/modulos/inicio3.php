
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cdc4a056d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos2.css">
    <title>VETSPA</title>
</head>
<body>
    
<!-- MENU DE NAVEGACIÓN -->

<div class="contenedor-principal">
    

<nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href="getBtnLogo.php"><img src="../view/img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                 <a href="view/modulos/moduloSeguridad/formAutenticarUsuario.php" class="nav"><i class="far fa-user"></i>PERFIL</a>
                    <a href="view/modulos/moduloSeguridad/formRegistrarCLiente.php" class="nav"><i class="fas fa-sign-out-alt"></i>CERRAR SESIÓN</a>
                 </div>
            </div>
        </div>
    </nav>

    <!-- MENU PRINCIPAL -->
    <div class="banner">
    <img src="../view/img/bannercama.jpg" alt="">
    </div>

            <?php
                include_once ("moduloSeguridad/formHome.php");
                $botones = new FormHome;
                $botones -> FormGestionarUsuario();
                $botones -> FormGestionarProductos();
                $botones -> FormCerrarSesion();
            ?>

    

    

    <div class="contenedor-footer">    
        <footer>
        <i class="fas fa-envelope"></i>villaanimal@gmail.com
          <p>Versión de pag. 1.0.0</p> 
            <p>Copyright © 2021 VETSPA - Todos los derechos reservados</p>
        </footer>
    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>