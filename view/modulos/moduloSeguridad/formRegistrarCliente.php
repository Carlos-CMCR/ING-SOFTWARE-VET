<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../estilos.css">

</head>
<body class="login">
	<div class="card bg-light mb-3" style="max-width: 20rem">
			<form class="form-control"  action="../../../controller/getRegistrarCliente.php" method="POST">
				<h5 class="form-regitrar__title">Registrar Usuario</h5>
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
</body>
</html>

		


