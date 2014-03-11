<?php   
	error_reporting(E_ALL ^ E_NOTICE);

	$msj=$_GET['msj'];
	if ($msj == 1) {
		$msj = "<div class='alert alert-success'>Gracias por Contestar la encuesta tu Informacion esta Segura</div>";
	}
	if ($msj == 2) {
		$msj = "<div class='alert alert-danger'>Error Intente mas Tarde</div>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="img/favicon_logo.ico">
		<style>
			.alert {
				padding: 15px;
			  	margin-bottom: 20px;
			  	border: 1px solid transparent;
			  	border-radius: 4px;
			}
			.alert-success {
			  	background-color: #dff0d8;
			  	border-color: #d6e9c6;
			  	color: #3c763d;
			}
			.alert-danger {
			  	background-color: #f2dede;
			  	border-color: #ebccd1;
			  	color: #a94442;
			}
		</style>
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
			<h1><img src="img/logo_odonto.png" alt="Odontolog" width="70"></h1>
			<div class="sombra"></div>
		</header>
		<!-- Main -->
		<section class="main">
			<!-- Mensaje de bienvenida -->
			<div class="mensaje">
				<h1 class="encabezado">Bienvenido</h1>
				<p class="redaccion">
					La Facultad de Odontología Mexicali (FOM) con el propósito establecer una relación recíproca, permanente y de vinculación con sus egresados,
					agradece, de antemano, el llenado del siguiente cuestionario.<br><br>

					La FOM garantiza la confidencialidad de la información que proporcione.
					
					<!-- La evidencia empírica nos ha demostrado que las TIC’s pueden mejorar el rendimiento
					de una empresa y hacerla más competitiva comercializando sus productos o servicios internaionalmente.<br><br>

					En los últimos 10 años se han realizado varios estudios destinados a analizar el impacto económico que las TIC´s proporcionan
					y la finalidad de este proyecto es medir el nivel de adopción de TIC’s en las PYMES del sector manufacturero en Baja California. -->
				</p>
			</div>
			<!-- Botones de registro y login -->
			<div class="botones">
				<a href="javascript:void(0);" onClick="show_popup();" class="btn">Login</a>
				<a href="form.php" class="btn">Registrate</a>
			</div>
			<?php echo $msj; ?>
		</section>
		<!-- Footer -->
		<footer>
			<p>Universidad Autónoma de Baja California | Facultad de Odontología Campus Mexicali - Mexicali Baja California Copyright 2014 ©</p>
		</footer>
	</body>
</html>
<?php
	$psswd = substr( md5(microtime()), 1, 10);
	$psswd2 = substr(microtime(), 1, 10);
	echo $psswd." ".$psswd2;

	$md5 = md5($psswd2);
	echo "<br>".$md5;
?>