<?php 
headerForm("Ingresar");
?>
    
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 18rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Iniciar Sesión</h5></div>
        <div class="card-body">
        <form action="../controller/getUsuario.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Usuario</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="usuario" id="usuario"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row">
                <div class="col-4 d-flex align-items-center"><label for="password" class="form-label">Password</label> </div>
                <div class="col-8 "><input type="password"  class="form-control" aria-describedby="passwordHelpBlock" name="password" id="password"> </div>
        </div>
        </div>
        <div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnIngresar" id="btnIngresar" value="Ingresar"></div>
        </div></div>
        </form>
        <div class="row ">
            <a href="principal.php?action=formVerificarUsuario" class="d-flex justify-content-center" id="links">Recordar Contraseña</a></div>
        </div>
        
    </div>
    </div>
 
<?php 
footerForm(); 
?>




            