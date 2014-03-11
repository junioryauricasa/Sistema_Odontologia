<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Facultad de Odontologia</title>
	<link rel="icon" type="image/png" href="img/favicon_logo.ico" />
	<link rel="stylesheet" href="css/registro.css" type="text/css">
	<link rel="stylesheet" href="css/mejorandola.css" type="text/css">
	<link rel="stylesheet" href="css/mejorandola2.css" type="text/css">
	<style>
	#libro{
		margin-left:150px;
	}
	</style>
</head>
<body>
	<header>
		<h2><img src="img/uabc.jpg" alt="uabc" width="25" heigth="25">Universidad Autónoma de Baja California - Facultad Odontologia <img src="img/logo_odonto.png" alt="uabc" width="20" heigth="20"></h2>
	</header>
	<section id="wrapper">
		<section id="libro">
		<br><br>
			<form action="" method="POST">
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
									<tr>
										<td><b>Dependencia o empresa donde trabaja</b></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><b>Puesto</b></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><b>Sector</b></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr><tr>
										<td><b>Domicilio y teléfono</b></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
									</tr>
									<tr>
										<td><input type="text"></td>
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
				<table>
					<tr>
						<td><input type="submit" value="Aceptar"></td>
					</tr>
				</table>
			</form>
		</section>
	</section>
</body>

</html>