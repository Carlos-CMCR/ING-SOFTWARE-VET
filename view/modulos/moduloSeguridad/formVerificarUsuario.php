              <!DOCTYPE html>
              <html lang="en">
              <head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                  <link rel="stylesheet" href="../estilos.css">
                  <title>Recuperar contraseña</title>
              </head>
              <body class="login">      
                    
                    <div  class="card bg-light mb-3" style="max-width: 20rem;">
                        <div class="card-header"><h5 class="card-title">Recuperar contraseña</h5></div>
                            <div class="card-body">
                                <form action="../../../controller/getLogin.php" method="POST">
                                    <p>Usuario:</p>
                                        <input type="text" name="usuario" id="usuario"><br/><br/>
                                        <div class="button-center"> <input type="submit" class="btn btn-primary" name="btnBuscar" id="btnBuscar" value="Buscar"></div>
                                    
                                </form>
                                <a href="formAutenticarUsuario.php">Atras</a>

                        </div>
                    </div>
              </body>
              </html>
                    
                         
 

