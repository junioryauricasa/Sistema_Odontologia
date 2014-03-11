<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facultad de Odontologia</title>
	<link rel="icon" type="image/png" href="img/favicon_logo.ico" />
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.leanModal.min.js"></script>
	<style>
		#contenido{
			height: 600px;
		}
		p{
			margin: 0 auto;
			margin-top: 100px;
			margin-left: 100px;
			padding: 20px;
			width: 800px;
			font-size: 16px;
			text-align: justify;
			position: absolute;
		}
		h1{
			margin-left: 400px;
			margin-top: 50px;
			position: absolute;
		}
		table{
			width: 600px;
			position: absolute;
			margin-top: 400px;
			margin-left: 200px;
		}
	</style>
	<script>
		$(document).ready(function() {
			//$( "#header" ).hide();
			//$( "#header" ).fadeIn(6000);
			$('#loginform').submit(function(e){
		    	return false;
		  	});
		  
		  	$('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
		});
	</script>
</head>
<body>
	<div class="header">
		<h2>
			<img src="img/uabc.jpg" alt="Logo_uabc" width="25" heigth="25">
			Universidad Autónoma de Baja California - Facultad Odontologia
			<img src="img/logo_odonto.png" alt="Logo_Odonto" width="20" heigth="20">
		</h2>
	</div>
	<div id="wrapper">
		<div id="contenido">
			<h1>BIENVENIDO</h1>
				<p>
					Las organizaciones buscan a través de las TIC’s reducir costos de producción de bienes y servicios e incrementar su competitividad, para lograrlo, los gobiernos tendrán que invertir en educación, investigación e infraestructura.
					<br><br>
					La evidencia empírica nos ha demostrado que las TIC’s pueden mejorar el rendimiento de una empresa y hacerla más competitiva comercializando sus productos o servicios internaionalmente.
					<br><br>
					En los últimos 10 años se han realizado varios estudios destinados a analizar el impacto económico que las TIC´s proporcionan y la finalidad de este proyecto es medir el nivel de adopción de TIC’s en las PYMES del sector manufacturero en Baja California
					<br><br>
					<table>
						<tr>
							<td align="left"><a href="#loginmodal" class="flatbtn" id="modaltrigger">Login</a></td>
							<td align="right"><a href="parte.php" class="flatbtn">Registrate</a></td>
						</tr>
					</table>
				</p>
		</div>
		<!-- Ventana Dialog -->
		<div id="loginmodal" style="display:none;">
		  <h1>User Login</h1>
		  <form id="loginform" name="loginform" method="POST" action="index.html">
		    <label for="username">Email:</label>
		    <input type="text" name="username" id="username" class="input_medio" tabindex="1">
		     
		    <label for="password">Password:</label>
		    <input type="password" name="password" id="password" class="input_medio" tabindex="2">
		     
		    <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="hidemodal" value="Login" tabindex="3"></div>
		  </form>
		</div>
		<!-- Fin Ventana Dialog -->
	</div>
</body>
</html>