<?php 
headerForm("Recuperar Contraseña");
?>
    
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 18rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Recordar contraseña</h5></div>
        <div class="card-body">
        <form action="../controller/getLogin.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Usuario</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="usuario" id="usuario"> </div>
        </div>
        </div>
        

        <div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnBuscar" id="btnBuscar" value="Buscar"></div>
        </div></div>
        </form>
        <div class="row ">
            <a href="principal.php?action=formAutenticarUsuario" class="d-flex justify-content-center" id="links">Atras</a></div>
        </div>
        
    </div>
    </div>

<?php 
footerForm(); 
?>







                         
 

