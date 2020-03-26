<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Empleados</title>
</head>
<body>
	<header>
		<h1>Empleados</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../controladores/Roles.controlador.php?a=ingr" method="POST">
		<input name="nombre" placeholder="Nombre" />
		<input name="cargo" placeholder="Cargo" />
		<input name="fechaCumpleñaos" placeholder="Fecha de cumpleaños" />
		<input type="submit" value="Ingresar" />
	</form>
</body>
</html>