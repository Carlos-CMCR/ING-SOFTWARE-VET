
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                            <link rel="stylesheet" href="../estilos.css">
                            <title>Ingresar</title>
                        </head>
                        <body class="login">
                            
                       
                       

                        <br/><br/>  
                        <div class="card bg-light mb-3" style="max-width: 20rem;">
                            <div class="card-header"><h5 class="card-title">Iniciar Sesión</h5></div>
                                <div class="card-body">
                                    
                                    <form action="../../../controller/getUsuario.php" method="POST" >
                                        <p>Usuario:</p><input type="text" name="usuario" id="usuario"><br/>
                                        
                                        <p>Contraseña:</p><input type="password" name="password" id="password"><br/><br/>

                                        <div class="button-center"><input type="submit" class="btn btn-primary"  name="btnIngresar" id="btnIngresar" value="Ingresar"></div>
                                    </form>
                                    <div class="link-log">
                                        <a href="formVerificarUsuario.php" >Recordar Contraseña</a>
                                    </div>
                                    



                                </div>
                        </div>
                        

                        </body>
                        </html>
                        
                        

            