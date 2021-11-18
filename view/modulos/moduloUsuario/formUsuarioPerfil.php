<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cdc4a056d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
    <style>
        body {
            background-image: url('../../img/background.jpg')
        }
    </style>

    <nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href=""><img src="../../img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                    <a href="view/modulos/moduloSeguridad/formRegistrarCLiente.php" class="nav"><i class="fas fa-sign-out-alt"></i>CERRAR SESIÓN</a>
                 </div>
            </div>
        </div>
    </nav>

    <div class="contenedor-perfil">
        <div class="form-usuario">
            <form action="">
                <h3>Perfil</h3>
                
                <div class="contenedor-form">
                <div class="form">
                <label class="label">Nombre</label>
                <input type="text" class="input" name="nombre">
                </div>
                <div class="form">
                <label>Apellidos</label>
                <input type="text" class="input" name="apellidos">
                </div>
                <div class="form">
                <label>Documento</label>
                <input type="number" class="input" name="documento">
                </div>
                <div class="form">
                <label>Celular</label>
                <input type="number" class="input" name="celular">
                </div>
                <div class="form">
                <label>Correo</label>
                <input type="email" class="input" name="correo">
                </div>
                </div>
                <div class="button"><input type="submit" class="btn"  name="btnIngresar" id="btnIngresar" value="EDITAR PERFIL"></div>
                <div class="button"><input type="submit" class="btn"  name="btnRegistrar" id="btnRegistrar" value="REGISTRAR MASCOTA"></div>
                <div class="button"><input type="submit" class="btn"  name="btnRegresar" id="btnRegresar" value="REGRESAR"></div>
            </form>
        </div>
    </div>
    
</body>
</html>
    

      
        
     
