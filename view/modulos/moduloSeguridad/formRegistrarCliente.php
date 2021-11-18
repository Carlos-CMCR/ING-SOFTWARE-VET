<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../../styles/stylesRegistro.css">
  <title>Formulario Registro</title>
 </head>
<body >
	
	<form class="form-control"  action="../../../controller/getRegistrarCliente.php" method="POST">
	<section class="form-register">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="txtNombre" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="txtApellido" id="apellidos" placeholder="Ingrese su Apellido">
	<input class="controls" type="text" name="txtDni" id="dni" placeholder="Ingrese su DNI" maxlength="8">
	<input class="controls" type="text" name="txtCelular" id="celular" placeholder="Ingrese su celular" maxlength="9">
    <input class="controls" type="email" name="txtCorreo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="txtPass1" id="correo" placeholder="Ingrese su Contraseña">
	<input class="controls" type="password" name="txtPass2" id="correo" placeholder="Vuelva ingresar su Contraseña">
    <p><input type="checkbox" name="check" value="1"> Acepto los términos y condiciones<br><br></p>
    <input class="botons" type="submit" value="Registrar">
    <p><a href="formAutenticarUsuario.php">¿Ya tengo Cuenta?</a></p>
  </section>
	
</body>
</html>
