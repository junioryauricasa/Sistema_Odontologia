<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facultad de Odontologia</title>
	<link rel="icon" type="image/png" href="img/favicon_logo.ico" />
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="header">
		<h2><img src="img/uabc.jpg" alt="uabc" width="25" heigth="25">Universidad Autónoma de Baja California - Facultad Odontologia <img src="img/logo_odonto.png" alt="uabc" width="20" heigth="20"></h2>
	</div>
	<div id="wrapper">
		<div id="contenido">
			<br>
			<table>
				<tr>
					<td><b>Instrucciones:</b> Agradecemos colocar una “X” en el recuadro que corresponda a su respuesta, hacer un breve comentario cuando se le solicite aclarar alguna respuesta específica y seguir las indicaciones en cada pregunta.</td>
				</tr>
			</table>
			<br><br>
			<form action="parte2.php" method="POST">
				<fieldset>
					<legend><b>1. DATOS PERSONALES</b></legend>
					<br>
					<table border="0">
						<tr>
							<td><label for="nombre">Nombre Completo:</label></td>
							<td><input type="text" name="nombre" id="nombre" placeholder="Tu Nombre Completo" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><label for="">Masculino:</label></td>
										<td align="left"><input type="radio" name="sexo" id=""></td>
										<td><label for="">Femenino:</label></td>
										<td align="left"><input type="radio" name="sexo" id=""></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td><label for="email">E-mail:</label></td>
							<td><input type="text" name="email" id="email" placeholder="Tu Correo Electronico" /></td>
						</tr>
						<tr>
							<td><label for="email_a">E-mail alterno:</label></td>
							<td><input type="text" name="email_a" id="email_a" placeholder="Tu Correo Electronico Alterno" /></td>
						</tr>
					</table>
					<br>
				</fieldset>
				<br>
				<fieldset>
					<legend><b>2. DATOS DOMICILIO ACTUAL</b></legend>
					<br>
					<table>
						<tr>
							<td><label for="">Direccion:</label></td>
							<td><input type="text" placeholder="Tu Direccion"></td>
						</tr>
						<tr>
							<td><label for="">Colonia:</label></td>
							<td><input type="text" placeholder="Tu Colonia"></td>
						</tr>
						<tr>
							<td><label for="">Municipio:</label></td>
							<td><input type="text" placeholder="Municipio"></td>
						</tr>
						<tr>
							<td><label for="">Estado:</label></td>
							<td><input type="text" placeholder="Estado"></td>
						</tr>
						<tr>
							<td><label for="">Codigo Postal:</label></td>
							<td><input type="text" placeholder="Codigo Postal"></td>
						</tr>
						<tr>
							<td><label for="">Telefono Particular (con LADA):</label></td>
							<td><input type="text" placeholder="Telefono Particular"></td>
						</tr>
						<tr>
							<td><label for="">Telefono Celular:</label></td>
							<td><input type="text" placeholder="Telefono Celular"></td>
						</tr>
						<tr>
							<td><label for="">Telefono Trabajo:</label></td>
							<td><input type="text" placeholder="Telefono Trabajo"></td>
						</tr>
					</table>
					<br>
				</fieldset>
				<br>
				<table>
					<tr>
						<td><input type="submit" value="Siguiente >>"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>