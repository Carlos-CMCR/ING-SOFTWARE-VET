<?php 
headerForm("Registrar");
?>
	
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 22rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Registrar</h5></div>
        <div class="card-body">
        <div class="mb-3">
        <div class="row ">

	<form class="d-flex justify-content-center"  action="../controller/getRegistrarCliente.php" method="POST">


	<section class="container">
	<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Nombre: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtNombre" id="nombres" placeholder="Ingrese su Nombre"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Apellidos: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtApellido" id="apellidos" placeholder="Ingrese sus Apellidos"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">DNI: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtDni" id="dni" placeholder="Ingrese su Dni" maxlength="8"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Celular: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtCelular" id="celular" placeholder="Ingrese su Celular" maxlength="9"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Correo: </label></div>
            <div class="col-8 "><input type="email" class="form-control" aria-describedby="text"  name="txtCorreo" id="correo" placeholder="Ingrese su Correo" > </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Contraseña: </label></div>
            <div class="col-8 "><input type="password" class="form-control" aria-describedby="text"  name="txtPass1" id="pass1" placeholder="Ingrese su contraseña" > </div>
        </div>	
		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label"></label></div>
            <div class="col-8 "><input type="password" class="form-control" aria-describedby="text"  name="txtPass2" id="pass2" placeholder="Vuelva ingresar su contraseña" > </div>
        </div>		
    
    <p><input type="checkbox" name="check" value="1" > Acepto los términos y condiciones<br><br></p>

	<div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnRegistrar" id="btnIngresar" value="Registar"></div>
        </div></div>
        </form>

		<div class="row ">
            <a href='../view/principal.php?action=formAutenticarUsuario' class="d-flex justify-content-center" id="links">¿Ya tengo Cuenta?</a></div>
        

   
        </section> </div></div></div></div>
	
 
<?php 
footerForm(); 
?>
