<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
<center>
	<div>
		<div><h3>Registrar usuario</h3></div>
		<div>
			<form action="../../../controller/getRegistrarCliente.php" method="POST">
				<p>Nombre</p>
				<input type="text" name="txtNombre">
				<p>Apellidos</p>
				<input type="text" name="txtApellido">
				<p>Celular</p>
				<input type="text" name="txtCelular">
				<p>Correo Electrónico</p>
				<input type="text" name="txtCorreo">
				<p>Contraseña</p>
				<input type="password" name="txtPass1">
				<p>Vuelva a escribir su contraseña</p>
				<input type="password" name="txtPass2"><br><br>
				<input type="submit" name="registrar" value="Registrar">

			</form>
		</div>
	</div>

</center>
</body>
</html>