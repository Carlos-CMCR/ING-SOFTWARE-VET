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
<center>
	
			<form  class="form-control" action="../controller/getRegistrarCliente.php" method="POST">
			<h5 class="form-regitrar__title">Registrar Mascota</h5>
				<div class="form-registrar__title">
				<p>Nombre de la Mascota</p>
				<input class="form-registrar__inputs" type="text" name="txtNombreMascota">
				<p>Años</p>
				<input class="form-registrar__inputs" type="text" name="txtEdad">
				<p>Vacunas</p>
				<input class="form-registrar__inputs" type="text" name="txtVacunas">
				<p>Raza</p>
				<input class="form-registrar__inputs" type="text" name="txtRaza">
				<br><br>
				<input  type="submit"class="form-registrar__action" name="registrarMascota" value="Registrar Mascota">

			</form>
		</div>
	</div>
	
</center>
</body>
</html>