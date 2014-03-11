<?php  
	error_reporting(E_ALL ^ E_NOTICE);

	$email=$_GET['email'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/validacion.js"></script>
		<link rel="shortcut icon" href="img/favicon_logo.ico">
		<script>
			$(document).ready(function() {
				$( ".contenido" ).hide();
				$( ".contenido" ).fadeIn(3000);
			});
			if(history.forward(1)){
				history.replace(history.forward(1));
			}
			jQuery(function($){
				$("#tel_p").mask("(999)999-9999");
				$("#tel_c").mask("(999)999-9999");
				$("#tel_t").mask("(999)999-9999");
			});
		</script>
	</head>
	<body>
		<!-- Header -->
		<header>
			<h1><img src="img/logo_uabc.png" alt=""></h1>
			<div class="texto">
				<h2><strong>Universidad Autónoma de Baja California</strong></h2>
				<h3>Facultad de Odontología</h3>
				<h3>Coordinación de Posgrado e Investigación</h3>
				<h3>Programa de seguimiento a Egresados</h3>
			</div>
			<h1><img src="img/logo_odonto.png" alt="Odontología" width="70"></h1>
			<div class="sombra"></div>
		</header>
		<!-- Main -->
		<section class="main">
			<!-- Formulario -->
			<div class="contenido">
				<p class="redaccion">
					<b>Instrucciones:</b> Agradecemos colocar una 'X' en el recuadro que corresponda a su respuesta,
					hacer un breve comentario cuando se le solicite aclarar alguna respuesta especifica y seguir las indicaciones en cada pregunta.
				</p>
				<form action="save2.php" method="POST">
					<fieldset>
						<legend>3.- DATOS DE POSGRADO</legend>
						<div class="row">
							<div class="columns2">
								<label>Institución donde curso la licenciatura: <small>requerido</small></label>
								<input type="text" name="institucion" id="institucion" placeholder="Institución donde curso la licenciatura" required>
								<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
					    	</div>
					    	<div class="columns2">
					    		<label>Programa de posgrado que cursó: <small>requerido</small></label>
					    		<select name="posgrado" id="posgrado" required>
					    		<option value="">-- Selecciona --</option>
					    		<option value="2">Especialidad en Endodoncia</option>
					    		<option value="3">Especialidad en Ortodoncia</option>
					    		<option value="4">Especialidad en Periodoncia</option>
					    		<option value="5">Especialidad en Prostodoncia</option>
					    		</select>
					    	</div>
						</div>
						<div class="row">
							<div class="columns2">
								<label>Fecha de Ingreso: <small>requerido</small></label>
								<input type="text" id="fecha_ingreso" name="fecha_ingreso" placeholder="Fecha de ingreso" required>
					    	</div>
					    	<div class="columns2">
					    		<label>Fecha de Egreso: <small>requerido</small></label>
					    		<input type="text" id="fecha_egreso" name="fecha_egreso" placeholder="Fecha de egreso" required>
					    	</div>
						</div>
						<div class="row">
							<table class="tabla">
								<tr>
									<td colspan="2">
										<label>Principal motivo por el cuál realizó el posgrado (Enumere del 1 al 5 conforme a sus preferencias):</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td colspan="6"></td>
												<td>1</td>
												<td>2</td>
												<td>3</td>
												<td>4</td>
												<td>5</td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Para mejorar mi preparación</label></td>
												<td><input type="radio" name="mot_1" id="mot_11" onClick="p11()" value="1" required></td>
												<td><input type="radio" name="mot_1" id="mot_12" onClick="p21()" value="2"></td>
												<td><input type="radio" name="mot_1" id="mot_13" onClick="p31()" value="3"></td>
												<td><input type="radio" name="mot_1" id="mot_14" onClick="p41()" value="4"></td>
												<td><input type="radio" name="mot_1" id="mot_15" onClick="p51()" value="5"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Para desarrollar mi actual ámbito laboral</label></td>
												<td><input type="radio" name="mot_2" id="mot_21" onClick="p12()" value="1" required></td>
												<td><input type="radio" name="mot_2" id="mot_22" onClick="p22()" value="2"></td>
												<td><input type="radio" name="mot_2" id="mot_23" onClick="p32()" value="3"></td>
												<td><input type="radio" name="mot_2" id="mot_24" onClick="p42()" value="4"></td>
												<td><input type="radio" name="mot_2" id="mot_25" onClick="p52()" value="5"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Para acceder a una beca económica</label></td>
												<td><input type="radio" name="mot_3" id="mot_31" onClick="p13()" value="1" required></td>
												<td><input type="radio" name="mot_3" id="mot_32" onClick="p23()" value="2"></td>
												<td><input type="radio" name="mot_3" id="mot_33" onClick="p33()" value="3"></td>
												<td><input type="radio" name="mot_3" id="mot_34" onClick="p43()" value="4"></td>
												<td><input type="radio" name="mot_3" id="mot_35" onClick="p53()" value="5"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Por status</label></td>
												<td><input type="radio" name="mot_4" id="mot_41" onClick="p14()" value="1" required></td>
												<td><input type="radio" name="mot_4" id="mot_42" onClick="p24()" value="2"></td>
												<td><input type="radio" name="mot_4" id="mot_43" onClick="p34()" value="3"></td>
												<td><input type="radio" name="mot_4" id="mot_44" onClick="p44()" value="4"></td>
												<td><input type="radio" name="mot_4" id="mot_45" onClick="p54()" value="5"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td align="left" colspan="6"><label for="">Otro, Especifique:</label></td>
												<td><input type="radio" name="mot_5" id="mot_51" onClick="p15()" value="1" required></td>
												<td><input type="radio" name="mot_5" id="mot_52" onClick="p25()" value="2"></td>
												<td><input type="radio" name="mot_5" id="mot_53" onClick="p35()" value="3"></td>
												<td><input type="radio" name="mot_5" id="mot_54" onClick="p45()" value="4"></td>
												<td><input type="radio" name="mot_5" id="mot_55" onClick="p55()" value="5"></td>
												<td><input type="text" name="mot_6" id="mot_61" placeholder="Especifique otro"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<div class="row">
							<div class="columns3">
								<label>Al momento de elegir el posgrado, la Facultad de Odontología Mexicali fue su: <small>requerido</small></label>
								<input type="radio" name="el_posgrado" id="el_posgrado" value="Primera eleccion" required><label>Primera elección</label>
								<input type="radio" name="el_posgrado" id="el_posgrado" value="Segunda eleccion"><label>Segunda elección</label>
								<input type="radio" name="el_posgrado" id="el_posgrado" value="Ultima eleccion"><label>Última elección</label>
								<input type="radio" name="el_posgrado" id="el_posgrado" value="Unica eleccion"><label>Única elección</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>¿El posgrado que eligió cubrió sus expectativas de formación? <small>requerido</small></label>
								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="100%" required><label>100%</label>
								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="75%"><label>75%</label>
								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="50%"><label>50%</label>
								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="25%"><label>25%</label>
								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="nada"><label>Nada</label>
							</div>
						</div>
						<div class="row">
							<table class="tabla">
								<tr>
									<td colspan="2">
										<label>¿Cómo valora las materias que cursó en el plan de estudios de su posgrado?</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td></td>
												<td style="padding-right:10px;"><label>Siempre</label></td>
												<td style="padding-right:10px;"><label>Casi siempre</label></td>
												<td style="padding-right:10px;"><label>Casi nunca</label></td>
												<td><label>Nunca</label></td>
											</tr>
											<tr>
												<td><label>Adecuadas en carga horaria</label></td>
												<td><input type="radio" name="val_pos1" id="val_pos1" value="Siempre" required></td>
												<td><input type="radio" name="val_pos1" id="val_pos1" value="Casi siemp"></td>
												<td><input type="radio" name="val_pos1" id="val_pos1" value="Casi nunca"></td>
												<td><input type="radio" name="val_pos1" id="val_pos1" value="Nunca"></td>
											</tr>
											<tr>
												<td><label>Adecuadas en la relación teoría y práctica</label></td>
												<td><input type="radio" name="val_pos2" id="val_pos2" value="Siempre" required></td>
												<td><input type="radio" name="val_pos2" id="val_pos2" value="Casi siemp"></td>
												<td><input type="radio" name="val_pos2" id="val_pos2" value="Casi nunca"></td>
												<td><input type="radio" name="val_pos2" id="val_pos2" value="Nunca"></td>
											</tr>
											<tr>
												<td><label>Congruencia entre la formación y la línea de investigación</label></td>
												<td><input type="radio" name="val_pos3" id="val_pos3" value="Siempre" required></td>
												<td><input type="radio" name="val_pos3" id="val_pos3" value="Casi siemp"></td>
												<td><input type="radio" name="val_pos3" id="val_pos3" value="Casi nunca"></td>
												<td><input type="radio" name="val_pos3" id="val_pos3" value="Nunca"></td>
											</tr>
											<tr>
												<td><label>Contenidos actualizados</label></td>
												<td><input type="radio" name="val_pos4" id="val_pos4" value="Siempre" required></td>
												<td><input type="radio" name="val_pos4" id="val_pos4" value="Casi siemp"></td>
												<td><input type="radio" name="val_pos4" id="val_pos4" value="Casi nunca"></td>
												<td><input type="radio" name="val_pos4" id="val_pos4" value="Nunca"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
					    </div>
					    <div class="row">
							<table class="tabla">
								<tr>
									<td colspan="2">
										<label>Valore los servicios del posgrado:</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td></td>
												<td style="padding-right:10px;"><label>Excelente</label></td>
												<td style="padding-right:10px;"><label>Bueno</label></td>
												<td style="padding-right:10px;"><label>Malo</label></td>
											</tr>
											<tr>
												<td><label>Promoción y difusión de convocatoria</label></td>
												<td><input type="radio" name="serv_1" id="serv_1" value="Excelente" required></td>
												<td><input type="radio" name="serv_1" id="serv_1" value="Bueno"></td>
												<td><input type="radio" name="serv_1" id="serv_1" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Proceso de Selección</label></td>
												<td><input type="radio" name="serv_2" id="serv_2" value="Excelente" required></td>
												<td><input type="radio" name="serv_2" id="serv_2" value="Bueno"></td>
												<td><input type="radio" name="serv_2" id="serv_2" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Curso propedéutico</label></td>
												<td><input type="radio" name="serv_3" id="serv_3" value="Excelente" required></td>
												<td><input type="radio" name="serv_3" id="serv_3" value="Bueno"></td>
												<td><input type="radio" name="serv_3" id="serv_3" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Tutorías</label></td>
												<td><input type="radio" name="serv_4" id="serv_4" value="Excelente" required></td>
												<td><input type="radio" name="serv_4" id="serv_4" value="Bueno"></td>
												<td><input type="radio" name="serv_4" id="serv_4" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Disponibilidad de material didáctico</label></td>
												<td><input type="radio" name="serv_5" id="serv_5" value="Excelente" required></td>
												<td><input type="radio" name="serv_5" id="serv_5" value="Bueno"></td>
												<td><input type="radio" name="serv_5" id="serv_5" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Acceso a los servicios de cómputo</label></td>
												<td><input type="radio" name="serv_6" id="serv_6" value="Excelente" required></td>
												<td><input type="radio" name="serv_6" id="serv_6" value="Bueno"></td>
												<td><input type="radio" name="serv_6" id="serv_6" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Programas de vinculación nacionales e internacionales</label></td>
												<td><input type="radio" name="serv_7" id="serv_7" value="Excelente" required></td>
												<td><input type="radio" name="serv_7" id="serv_7" value="Bueno"></td>
												<td><input type="radio" name="serv_7" id="serv_7" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Bases de datos actualizadas y del área</label></td>
												<td><input type="radio" name="serv_8" id="serv_8" value="Excelente" required></td>
												<td><input type="radio" name="serv_8" id="serv_8" value="Bueno"></td>
												<td><input type="radio" name="serv_8" id="serv_8" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Disponibilidad de material bibliográfico</label></td>
												<td><input type="radio" name="serv_9" id="serv_9" value="Excelente" required></td>
												<td><input type="radio" name="serv_9" id="serv_9" value="Bueno"></td>
												<td><input type="radio" name="serv_9" id="serv_9" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Actividades y eventos de difusión</label></td>
												<td><input type="radio" name="serv_10" id="serv_10" value="Excelente" required></td>
												<td><input type="radio" name="serv_10" id="serv_10" value="Bueno"></td>
												<td><input type="radio" name="serv_10" id="serv_10" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Programa de apoyo para la publicación científica</label></td>
												<td><input type="radio" name="serv_11" id="serv_11" value="Excelente" required></td>
												<td><input type="radio" name="serv_11" id="serv_11" value="Bueno"></td>
												<td><input type="radio" name="serv_11" id="serv_11" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Programa de apoyo para becas</label></td>
												<td><input type="radio" name="serv_12" id="serv_12" value="Excelente" required></td>
												<td><input type="radio" name="serv_12" id="serv_12" value="Bueno"></td>
												<td><input type="radio" name="serv_12" id="serv_12" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Programa de movilidad estudiantil Interinstitucional</label></td>
												<td><input type="radio" name="serv_13" id="serv_13" value="Excelente" required></td>
												<td><input type="radio" name="serv_13" id="serv_13" value="Bueno"></td>
												<td><input type="radio" name="serv_13" id="serv_13" value="Malo"></td>
											</tr>
											<tr>
												<td><label>Costos</label></td>
												<td><input type="radio" name="serv_14" id="serv_14" value="Excelente" required></td>
												<td><input type="radio" name="serv_14" id="serv_14" value="Bueno"></td>
												<td><input type="radio" name="serv_14" id="serv_14" value="Malo"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
					    </div>
					    <div class="row">
							<table class="tabla">
								<tr>
									<td colspan="2">
										<label>Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral,
										¿qué modificaciones al posgrado sugiere? (Enumere a partir del número uno en orden de prioridad):</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td colspan="6"></td>
												<td>1</td>
												<td>2</td>
												<td>3</td>
												<td>4</td>
												<td>5</td>
												<td>6</td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Enfatizar los aspectos prácticos en la mayoría de las materias</label></td>
												<td><input type="radio" name="mod_1" id="mod_1" value="1" required></td>
												<td><input type="radio" name="mod_1" id="mod_1" value="2"></td>
												<td><input type="radio" name="mod_1" id="mod_1" value="3"></td>
												<td><input type="radio" name="mod_1" id="mod_1" value="4"></td>
												<td><input type="radio" name="mod_1" id="mod_1" value="5"></td>
												<td><input type="radio" name="mod_1" id="mod_1" value="6"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Actualización de los contenidos</label></td>
												<td><input type="radio" name="mod_2" id="mod_2" value="1" required></td>
												<td><input type="radio" name="mod_2" id="mod_2" value="2"></td>
												<td><input type="radio" name="mod_2" id="mod_2" value="3"></td>
												<td><input type="radio" name="mod_2" id="mod_2" value="4"></td>
												<td><input type="radio" name="mod_2" id="mod_2" value="5"></td>
												<td><input type="radio" name="mod_2" id="mod_2" value="6"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Dar mayor peso a la investigación</label></td>
												<td><input type="radio" name="mod_3" id="mod_3" value="1" required></td>
												<td><input type="radio" name="mod_3" id="mod_3" value="2"></td>
												<td><input type="radio" name="mod_3" id="mod_3" value="3"></td>
												<td><input type="radio" name="mod_3" id="mod_3" value="4"></td>
												<td><input type="radio" name="mod_3" id="mod_3" value="5"></td>
												<td><input type="radio" name="mod_3" id="mod_3" value="6"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Complementar y enriquecer los contenidos con cursos y conferencias</label></td>
												<td><input type="radio" name="mod_4" id="mod_4" value="1" required></td>
												<td><input type="radio" name="mod_4" id="mod_4" value="2"></td>
												<td><input type="radio" name="mod_4" id="mod_4" value="3"></td>
												<td><input type="radio" name="mod_4" id="mod_4" value="4"></td>
												<td><input type="radio" name="mod_4" id="mod_4" value="5"></td>
												<td><input type="radio" name="mod_4" id="mod_4" value="6"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Reducir las materias teóricas</label></td>
												<td><input type="radio" name="mod_5" id="mod_5" value="1" required></td>
												<td><input type="radio" name="mod_5" id="mod_5" value="2"></td>
												<td><input type="radio" name="mod_5" id="mod_5" value="3"></td>
												<td><input type="radio" name="mod_5" id="mod_5" value="4"></td>
												<td><input type="radio" name="mod_5" id="mod_5" value="5"></td>
												<td><input type="radio" name="mod_5" id="mod_5" value="6"></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td align="left" colspan="6"><label for="">Otro, Especifique:</label></td>
												<td><input type="radio" name="mod_6" id="mod_6" value="1" required></td>
												<td><input type="radio" name="mod_6" id="mod_6" value="2"></td>
												<td><input type="radio" name="mod_6" id="mod_6" value="3"></td>
												<td><input type="radio" name="mod_6" id="mod_6" value="4"></td>
												<td><input type="radio" name="mod_6" id="mod_6" value="5"></td>
												<td><input type="radio" name="mod_6" id="mod_6" value="6"></td>
												<td><input type="text" name="mod_7" id="mod_7" placeholder="Especifique otro"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</fieldset>
					<div class="botones">
						<input type="submit" class="btn" value="Siguiente >>">
					</div>
				</form>
			</div>
			
		</section>
		<!-- Footer -->
		<footer>
			<p>Universidad Autónoma de Baja California | Facultad de Odontología Campus Mexicali - Mexicali Baja California Copyright 2014 ©</p>
		</footer>
		<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
		<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
		<script>
			$('#fecha_ingreso').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});

			$('#fecha_egreso').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});
		</script>
	</body>
</html>