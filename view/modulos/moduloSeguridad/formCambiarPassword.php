<?php 
headerForm("Recuperar contraseña");?>
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 30rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Recuperar contraseña</h5></div>
        <div class="card-body">
        <form action="../controller/getCoincidirPassword.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Nueva contraseña</label></div>
            <div class="col-8 d-flex align-items-center"><input type="text" class="form-control" aria-describedby="text"  value="" name="new_password" id="new_password"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Repita Contraseña</label></div>
            <div class="col-8 d-flex align-items-center"><input type="text" class="form-control" aria-describedby="text"  value="" name="repet_password" id="repet_password"> </div>
        </div>
        </div>
        
        <div >
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnActualizar" id="btnActualizar" value="Actualizar"></div>
        </div></div>
        </form>
    
    </div>
        
    </div>
    </div>
    

<?php  footerForm();?>