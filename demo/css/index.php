<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de Maraton</title>
	<link rel="stylesheet" href="css/registro.css" type="text/css">
	<link rel="stylesheet" href="css/mejorandola.css" type="text/css">
	<link rel="stylesheet" href="css/mejorandola2.css" type="text/css">
</head>
<body>
	<header>
		<h2><img src="img/uabc.jpg" alt="uabc" width="25" heigth="25">Universida Autónoma de Baja California - Facultad Ciencias Administrativas</h2>
	</header>
	<section id="wrapper">
		<section id="libro">
			<form action="proceso.php" method="POST">
				<br>
		<fieldset>
			<table border="0">
				<tr>
					<td colspan="2"><b>Información de la institución participante:</b></td>
				</tr>
				<tr>
					<td><label for="maraton">Seleccionar Maratón:</label></td>
					<td><select name="maraton" id="maraton">
						<option></option>
						<option value="1">FINANZAS</option>
						<option value="2">FISCAL</option>
						<option value="3">INFORMATICA ADMINISTRATIVA</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="uni">Universidad:</label></td>
					<td>
						<select name="uni" id="uni">
							<option></option>
							<option value="1">Universidad Autónoma de Baja California</option>
							<option value="2">Centro de Enseñanza Técnica y Superior</option>
							<option value="3">Centro de Estudios Superiores del Estado de Sonora</option>
							<option value="4">Centro Universitaria de Mazatlán</option>
							<option value="5">Instituto Tecnológico de Ciudad Juárez</option>
							<option value="6">Instituto Tecnológico de los Mochis</option>
							<option value="7">Instituto Tecnológico de Nogales</option>
							<option value="8">Instituto Tecnológico de Sonora</option>
							<option value="9">Instituto Tecnológico de Tijuana</option>
							<option value="10">Universidad Autónoma de Ciudad Juárez</option>
							<option value="11">Universidad Autónoma de Chihuahua</option>
							<option value="12">Universidad Autónoma de Sinaloa</option>
							<option value="13">Universidad del Noroeste</option>
							<option value="14">Universidad de Sonora</option>
							<option value="15">Universidad Iberoamericana Tijuana</option>
							<option value="16">Instituto Tecnológico de Chihuahua</option>
							<option value="17">Instituto Tecnológico de Mexicali</option>
							<option value="18">Instituto Tecnológico de Ciudad Cuauhtémoc</option>
							<option value="19">Tecnológico de Baja California - Tijuana</option>
							<option value="20">Centro de Estudios Superiores del Noroeste, S.C.</option>
							<option value="21">Instituto Tecnológico Superior de Cananea</option>
							<option value="22">Instituto Tecnológico de Huatabampo</option>
							<option value="23">Instituto Tecnológico de Parral</option>
							<option value="24">Universidad de Occidente</option>
							<option value="25">Instituto Tecnológico de Ensenada</option>
							<option value="26">Universidad Tecnológica de Tijuana</option>
							<option value="27">Instituto de Estudios Superiores de Guasave, A.C.</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="fcd">FAC/DEPTO/DIVISION:</label></td>
					<td><input type="text" name="facultad" id="fcd" /></td>
				</tr>
				<tr>
					<td><label for="dir">Nombre del Director:</label></td>
					<td><input type="text" name="director" id="dir" /></td>
				</tr>
				<tr>
					<td><label for="afi">No. de Afiliacion:</label></td>
					<td><input type="text" name="Noafi" id="afi" /></td>
				</tr>
				<tr>
					<td colspan="2"><b>Información del asesor del equipo participante:</b></td>
				</tr>
				<tr>
					<td><label for="asesor">Nombre del Asesor:</label></td>
					<td><input type="text" name="asesor" id="asesor"></td>
				</tr>
				<tr>
					<td><label for="grado">Grado Academico:</label></td>
					<td><input type="text" name="grado" id="grado"></td>
				</tr>
				<tr>
					<td><label for="email">Correo Electronico:</label></td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
				<tr>
					<td><label for="tel">Telefono:</label></td>
					<td><input type="text" name="tel" id="tel"></td>
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
					<td><input type="text" name="nombre2" id="nombre"></td>
				</tr>
				<tr>
					<td><label for="matricula">Matricula:</label></td>
					<td><input type="text" name="matricula2" id="matricula"></td>
				</tr>
				<tr>
					<td><label for="carrera">Carrera:</label></td>
					<td><input type="text" name="carrera2" id="carrera"></td>
				</tr>
				<tr>
					<td><label for="semestre">Semestre:</label></td>
					<td>
						<select name="semestre2" id="semestre" >
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
					<td><input type="text" name="nombre3" id="nombre"></td>
				</tr>
				<tr>
					<td><label for="matricula">Matricula:</label></td>
					<td><input type="text" name="matricula3" id="matricula"></td>
				</tr>
				<tr>
					<td><label for="carrera">Carrera:</label></td>
					<td><input type="text" name="carrera3" id="carrera"></td>
				</tr>
				<tr>
					<td><label for="semestre">Semestre:</label></td>
					<td>
						<select name="semestre3" id="semestre" >
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
					<td><input type="text" name="nombre4" id="nombre"></td>
				</tr>
				<tr>
					<td><label for="matricula">Matricula:</label></td>
					<td><input type="text" name="matricula4" id="matricula"></td>
				</tr>
				<tr>
					<td><label for="carrera">Carrera:</label></td>
					<td><input type="text" name="carrera4" id="carrera"></td>
				</tr>
				<tr>
					<td><label for="semestre">Semestre:</label></td>
					<td>
						<select name="semestre4" id="semestre" >
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
					<td colspan="2">Favor de Revisar que esten bien sus DATOS<br><input type="submit" name="submit" value="Registrar"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<br>
	<center><a href="gafete.php"><h3><u>Imprimir Gafetes</u></h3></a></center>
	<br>
		</section>
	</section>
</body>
</html>