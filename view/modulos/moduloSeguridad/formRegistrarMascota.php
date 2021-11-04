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
			<form action="../controller/getRegistrarCliente.php" method="POST">
				<p>Nombre de la Mascota</p>
				<input type="text" name="txtNombreMascota">
				<p>Años</p>
				<input type="text" name="txtEdad">
				<p>Vacunas</p>
				<input type="text" name="txtVacunas">
				<p>Raza</p>
				<input type="text" name="txtRaza">
				<br><br>
				<input type="submit" name="registrarMascota" value="Registrar Mascota">

			</form>
		</div>
	</div>

</center>
</body>
</html>