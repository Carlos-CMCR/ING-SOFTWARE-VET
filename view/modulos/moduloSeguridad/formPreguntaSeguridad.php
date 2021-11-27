<?php 
headerForm("Recuperar contraseña");
?>
    
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 18rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Recuperar contraseña</h5></div>
        <div class="card-body">
        <form action="../controller/getRespuesta.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center"><label  for="usuario" class="form-label">¿Cuál es la palabra clave?</label></div>
        </div>
        </div>
        <div class="row ">
        <div class="col-12 d-flex align-items-center"><input type="text" class="form-control" aria-describedby="text"  value="" name="respuesta" id="respuesta"> </div>
        </div>
        </div>
        <div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnEnviar" id="btnEnviar" value="Enviar"></div>
        </div></div>
        </form>
    
    </div>
        
    </div>
    

<?php 
footerForm(); 
?>

