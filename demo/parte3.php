<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facultad de Odontologia</title>
	<link rel="icon" type="image/png" href="img/favicon_logo.ico" />
	<link rel="stylesheet" href="css/estilo.css">
	<style>
		#contenido{
			height: 900px;
		}
		fieldset{
			width: 770px;
		}
	</style>
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
			<form action="parte4.php" method="POST">
				<fieldset>
					<legend><b>4. DATOS  LABORALES</b></legend>
					<br>
					<table>
						<tr>
							<td><label for="">Trabajo:&nbsp;&nbsp;</label></td>
							<td align="left">Si&nbsp;&nbsp;<input type="radio" name="trabajo" id="">&nbsp;&nbsp;No&nbsp;&nbsp;<input type="radio" name="trabajo" id=""></td>
						</tr>
						<tr>
							<td><label for="">Ejerces la profesión:&nbsp;&nbsp;</label></td>
							<td align="left">Si&nbsp;&nbsp;<input type="radio" name="ejerces" id="">&nbsp;&nbsp;No&nbsp;&nbsp;<input type="radio" name="ejerces" id=""></td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Empleos actuales:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<table>
									<tr>
										<td align="center"><b>Dependencia o empresa donde trabaja</b></td>
										<td align="center"><b>Puesto</b></td>
										<td align="center"><b>Sector</b></td>
										<td align="center"><b>Domicilio y teléfono</b></td>
									</tr>
									<tr>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
										<td><input type="text" class="input_chico"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Que tanto influyó tu preparación de posgrado en el empleo actual:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><label for="">nada&nbsp;&nbsp;</label><input type="radio" name="elegir3" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">25%&nbsp;&nbsp;</label><input type="radio" name="elegir3" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">50%&nbsp;&nbsp;</label><input type="radio" name="elegir3" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">75%&nbsp;&nbsp;</label><input type="radio" name="elegir3" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">100%&nbsp;&nbsp;</label><input type="radio" name="elegir3" id=""></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>¿En cuál de los siguientes aspectos considera que impactó el posgrado que cursó? (Enumere a partir de uno en orden de prioridad)</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Mejores alternativas de desarrollo profesional y personal</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Posibilidad de incursionar en campos científicos</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Apertura de oportunidades</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Una mejor situación laboral</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td align="left"><label for="">Otro, Especifique:</label></td>
										<td><input type="text" placeholder="Especifique otro"></td>
									</tr>
								</table>
							</td>
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