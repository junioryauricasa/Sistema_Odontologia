<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/registro.css" type="text/css">
	<link rel="stylesheet" href="css/mejorandola.css" type="text/css">
	<link rel="stylesheet" href="css/mejorandola2.css" type="text/css">
</head>
<body>
	<header>
		<h1>ANFECA - Maraton</h1>
	</header>
	<section id="wrapper">
		<section id="libro">
			<form action="proceso.php" method="POST">
				<br>
		<fieldset>
			<table border="0">		
				<tr>
					<td colspan="2"><b>Información de los integrantes del equipo participante:</b></td>
				</tr>
				<tr>
					<td><label for="nombre">Nombre:</label></td>
					<td><input type="text" name="nombre" id="nombre"></td>
				</tr>
				<tr>
					<td><label for="matricula">Matricula:</label></td>
					<td><input type="text" name="matricula" id="matricula"></td>
				</tr>
				<tr>
					<td><label for="carrera">Carrera:</label></td>
					<td><input type="text" name="carrera" id="carrera"></td>
				</tr>
				<tr>
					<td><label for="semestre">Semestre:</label></td>
					<td>
						<select name="semestre" id="semestre" >
							<option value=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"><b>Información de los integrantes del equipo participante:</b></td>
				</tr>
				<tr>
					<td><label for="nombre">Nombre:</label></td>
					<td><input type="text" name="nombre" id="nombre"></td>
				</tr>
				<tr>
					<td><label for="matricula">Matricula:</label></td>
					<td><input type="text" name="matricula" id="matricula"></td>
				</tr>
				<tr>
					<td><label for="carrera">Carrera:</label></td>
					<td><input type="text" name="carrera" id="carrera"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Registrar"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<br>
		</section>
	</section>
</body>
</html>