
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="stylesheet" href="../estilos.css">
                            <title>Ingresar</title>
                        </head>
                        <body class="login">
                            
                       
                        <img src="../../img/bannercama.jpg" alt="Banner" width="640" height="180">

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
                        
                        

            