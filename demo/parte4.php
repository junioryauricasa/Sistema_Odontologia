<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facultad de Odontologia</title>
	<link rel="icon" type="image/png" href="img/favicon_logo.ico" />
	<link rel="stylesheet" href="css/estilo.css">
	<style>
		#contenido{
			height: 1400px;
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
			<form action="inicio.php" method="POST">
				<fieldset>
					<legend><b>5. EDUCACIÓN CONTINUA</b></legend>
					<br>
					<table>
						<tr>
							<td colspan="2"><label for=""><br><b>Si después de sus estudios de posgrado ha publicado, conteste la siguiente pregunta</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><input type="radio" name="dato5" id=""></td>
										<td colspan="2" align="left"><label for="">Libros</label></td>
									</tr>
									<tr>
										<td><input type="radio" name="dato5" id=""></td>
										<td colspan="2" align="left"><label for="">Artículos en revistas arbitradas</label></td>
									</tr>
									<tr>
										<td><input type="radio" name="dato5" id=""></td>
										<td colspan="2" align="left"><label for="">Artículos en revistas no arbitradas</label></td>
									</tr>
									<tr>
										<td><input type="radio" name="dato5" id=""></td>
										<td><label for="">Otro, Especifique:</label></td>
										<td><input type="text" placeholder="Especifique otro"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Si después de sus estudios de posgrado ha realizado otros estudios (posgrados, diplomados, cursos o talleres), asistido o participado en eventos académicos (Congresos, conferencias, seminarios, etc.) conteste la siguiente pregunta:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Otros estudios</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><b>Nombre</b></td>
										<td><b>Institucion</b></td>
										<td><b>Fecha</b></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Eventos académicos</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><b>Nombre</b></td>
										<td><b>Institucion</b></td>
										<td><b>Fecha</b></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Si pertenece a alguna organización profesional, proporcione la siguiente información:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><b>Nombre de la organización</b></td>
										<td><b>Certificación, reconocimientos o distinciones recibidos</b></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
									<tr>
										<td><input type="text" class="input_medio"></td>
										<td><input type="text" class="input_medio"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td colspan="2" align="left"><label for="">Posgrados</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td colspan="2" align="left"><label for="">Diplomados</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td colspan="2" align="left"><label for="">Investigación</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td colspan="2" align="left"><label for="">Eventos académicos (congresos, conferencias, seminarios, talleres)</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td colspan="2" align="left"><label for="">Eventos culturales</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td colspan="2" align="left"><label for="">Eventos recreativos y deporticos</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td colspan="2" align="left"><label for="">Eventos sociales</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" id=""></td>
										<td><label for="">Otro, Especifique: </label></td>
										<td><input type="text"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Desea hacer algún comentario adicional:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2"><textarea name="" id="" cols="30" rows="10"></textarea></td>
						</tr>
					</table>
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