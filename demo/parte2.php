<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facultad de Odontologia</title>
	<link rel="icon" type="image/png" href="img/favicon_logo.ico" />
	<link rel="stylesheet" href="css/estilo.css">
	<style>
		#contenido{
			height: 1600px;
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
			<form action="parte3.php" method="POST">
				<fieldset>
					<legend><b>3. DATOS  DEL POSGRADO</b></legend>
					<br>
					<table>
						<tr>
							<td><label for="">Institución donde curso la licenciatura:</label></td>
							<td><input type="text" placeholder="Institución donde curso la licenciatura"></td>
						</tr>
						<tr>
							<td><label for="">Programa de posgrado que cursó:</label></td>
							<td><input type="text" placeholder="Programa de posgrado que cursó"></td>
						</tr>
						<tr>
							<td><label for="">Fecha de ingreso:</label></td>
							<td><input type="text" placeholder="Fecha de ingreso"></td>
						</tr>
						<tr>
							<td><label for="">Fecha de egreso:</label></td>
							<td><input type="text" placeholder="Fecha de egreso"></td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Principal motivo por el cuál realizó el posgrado (Enumere del 1 al 5 conforme a sus preferencias):</b><br></label></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Para mejorar mi preparación</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Para desarrollar mi actual ámbito laboral</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Para acceder a una beca económica</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Por status</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td align="left"><label for="">Otro, Especifique:</label></td>
										<td><input type="text" placeholder="Especifique otro"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Al momento de elegir el posgrado, la Facultad de Odontología Mexicali fue su:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><label for="">Primera elección</label><input type="radio" name="elegir" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">segunda</label><input type="radio" name="elegir" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">última elección</label><input type="radio" name="elegir" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">única</label><input type="radio" name="elegir" id=""></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>¿El posgrado que eligió cubrió sus expectativas de formación?</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><label for="">100%</label><input type="radio" name="elegir" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">75%</label><input type="radio" name="elegir2" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">50%</label><input type="radio" name="elegir2" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">25%</label><input type="radio" name="elegir2" id="">&nbsp;&nbsp;&nbsp;</td>
										<td><label for="">nada</label><input type="radio" name="elegir2" id=""></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>¿Cómo valora las materias que cursó en el plan de estudios de su posgrado?</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><label><b>Adecuadas en carga horaria</b></label</td>
										<td><label><b>Siempre (  )</b></label</td>
										<td><label><b>Casi siempre (  )</b></label</td>
										<td><label><b>Casi nunca(  )</b></label</td>
										<td><label><b>Nunca(  )</b></label</td>
									</tr>
									<tr>
										<td>Adecuadas en la relación teoría y práctica</td>
										<td><input type="radio" name="1" id=""></td>
										<td><input type="radio" name="1" id=""></td>
										<td><input type="radio" name="1" id=""></td>
										<td><input type="radio" name="1" id=""></td>
									</tr>
									<tr>
										<td>Congruencia entre la formación y la línea de investigación</td>
										<td><input type="radio" name="2" id=""></td>
										<td><input type="radio" name="2" id=""></td>
										<td><input type="radio" name="2" id=""></td>
										<td><input type="radio" name="2" id=""></td>
									</tr>
									<tr>
										<td>Contenidos actualizados</td>
										<td><input type="radio" name="3" id=""></td>
										<td><input type="radio" name="3" id=""></td>
										<td><input type="radio" name="3" id=""></td>
										<td><input type="radio" name="3" id=""></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Valore los servicios del posgrado:</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td><b>Promoción y difusión de convocatoria</b></td>
										<td><b>Excelente ( )</b></td>
										<td><b>bueno ( )</b></td>
										<td><b>malo ( )</b></td>
									</tr>
									<tr>
										<td>Proceso de Selección</td>
										<td><input type="radio" name="4" id=""></td>
										<td><input type="radio" name="4" id=""></td>
										<td><input type="radio" name="4" id=""></td>
									</tr>
									<tr>
										<td>Curso propedéutico</td>
										<td><input type="radio" name="5" id=""></td>
										<td><input type="radio" name="5" id=""></td>
										<td><input type="radio" name="5" id=""></td>
									</tr>
									<tr>
										<td>Tutorías</td>
										<td><input type="radio" name="6" id=""></td>
										<td><input type="radio" name="6" id=""></td>
										<td><input type="radio" name="6" id=""></td>
									</tr>
									<tr>
										<td>Disponibilidad de material didáctico</td>
										<td><input type="radio" name="7" id=""></td>
										<td><input type="radio" name="7" id=""></td>
										<td><input type="radio" name="7" id=""></td>
									</tr>
									<tr>
										<td>Acceso a los servicios de cómputo</td>
										<td><input type="radio" name="8" id=""></td>
										<td><input type="radio" name="8" id=""></td>
										<td><input type="radio" name="8" id=""></td>
									</tr>
									<tr>
										<td>Programas de vinculación nacionales e internacionales</td>
										<td><input type="radio" name="9" id=""></td>
										<td><input type="radio" name="9" id=""></td>
										<td><input type="radio" name="9" id=""></td>
									</tr>
									<tr>
										<td>Bases de datos actualizadas y del área</td>
										<td><input type="radio" name="10" id=""></td>
										<td><input type="radio" name="10" id=""></td>
										<td><input type="radio" name="10" id=""></td>
									</tr>
									<tr>
										<td>Disponibilidad de material bibliográfico</td>
										<td><input type="radio" name="11" id=""></td>
										<td><input type="radio" name="11" id=""></td>
										<td><input type="radio" name="11" id=""></td>
									</tr>
									<tr>
										<td>Actividades y eventos de difusión</td>
										<td><input type="radio" name="12" id=""></td>
										<td><input type="radio" name="12" id=""></td>
										<td><input type="radio" name="12" id=""></td>
									</tr>
									<tr>
										<td>Programa de apoyo para la publicación científica</td>
										<td><input type="radio" name="13" id=""></td>
										<td><input type="radio" name="13" id=""></td>
										<td><input type="radio" name="13" id=""></td>
									</tr>
									<tr>
										<td>Programa de apoyo para becas</td>
										<td><input type="radio" name="14" id=""></td>
										<td><input type="radio" name="14" id=""></td>
										<td><input type="radio" name="14" id=""></td>
									</tr>
									<tr>
										<td>Programa de movilidad estudiantil Interinstitucional</td>
										<td><input type="radio" name="15" id=""></td>
										<td><input type="radio" name="15" id=""></td>
										<td><input type="radio" name="15" id=""></td>
									</tr>
									<tr>
										<td>Costos</td>
										<td><input type="radio" name="16" id=""></td>
										<td><input type="radio" name="16" id=""></td>
										<td><input type="radio" name="16" id=""></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><label for=""><br><b>Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral, ¿qué modificaciones al posgrado sugiere? (Enumere a partir del número uno en orden de prioridad)</b></label><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Enfatizar los aspectos prácticos en la mayoría de las materias</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Actualización de los contenidos</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Dar mayor peso a la investigación</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Complementar y enriquecer los contenidos con cursos y conferencias</label></td>
									</tr>
									<tr>
										<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>
										<td colspan="2" align="left"><label for="">Reducir las materias teóricas</label></td>
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