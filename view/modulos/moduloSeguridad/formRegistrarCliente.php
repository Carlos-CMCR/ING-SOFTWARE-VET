<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
<center>
	<div>
	
		<div>
			<form class="form-registrar"  action="../../../controller/getRegistrarCliente.php" method="POST">
				<h1 class="form-regitrar__title">Registrar Usuario</h1>
				<div class="form-registrar__inputs">
				<p>Nombre</p>
				<input class="form-registrar__inputs" type="text" name="txtNombre">
				<p>Apellidos</p>
				<input class="form-registrar__inputs" type="text" name="txtApellido">
				<p>Celular</p>
				<input class="form-registrar__inputs" type="text" name="txtCelular">
				<p>Correo Electrónico</p>
				<input class="form-registrar__inputs" type="text" name="txtCorreo">
				<p>Contraseña</p>
				<input class="form-registrar__inputs" type="password" name="txtPass1">
				<p>Vuelva a escribir su contraseña</p>
				<input class="form-registrar__inputs" type="password" name="txtPass2"><br><br>
				</div>
				<input type="submit"class="form-registrar__action" name="registrar" value="Registrar">

			</form>
		</div>
	</div>

</center>
</body>
</html>