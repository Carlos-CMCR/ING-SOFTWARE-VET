<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Registro</title>
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

				<p>DNI</p>
				<input class="form-registrar__inputs" type="text" name="txtDni" maxlength="8">

				<p>Celular</p>
				<input class="form-registrar__inputs" type="text" name="txtCelular" maxlength="9">

				<p>Correo Electrónico</p>
				<input class="form-registrar__inputs" type="text" name="txtCorreo">

				<p>Contraseña</p>
				<input class="form-registrar__inputs" type="password" name="txtPass1">

				<p>Vuelva a escribir su contraseña</p>
				<input class="form-registrar__inputs" type="password" name="txtPass2"><br>

				<input type="checkbox" name="check" value="1"> Acepto los términos y condiciones<br><br>

				</div>
				<table class="tg">
				<thead>
				  <tr>
				    <td class="tg-0lax">
				    	<input type="submit"class="form-registrar__action" name="registrar" value="Registrar">
				    </td>			    	
				    	
			</form>
			<td class="tg-0lax">
				    	<form action="../../../index.php" method="POST">
				    		<input type="submit"class="form-registrar__action" name="atras" value="Atrás">
				    	</form>
				    </td>
				  </tr>
				</thead>
				</table>
						
		</div>
	</div>
</body>
</html>

		


