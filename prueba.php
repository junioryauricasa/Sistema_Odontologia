<?php  
	require_once('class/class.php');
	error_reporting(0);
	if (isset($_POST) and $_POST["grabar"]=="si")
	{
		//print_r($_POST);
		$tra=new Odontologia();
		$tra->add();
		exit;	
	}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="" method="POST">
		<fildset>
			<legend>Registro</legend>
			<label for="nombre">Nombre:</label>
			<br>
			<input type="text" name="nombre" id="nombre">
			<br>
			<label for="password">Password:</label>
			<br>
			<input type="password" name="password" id="password">
			<input type="hidden" name="grabar" value="si">
			<br>
			<br>
			<input type="submit" value="Aceptar">
		</fildset>
	</form>
</body>
</html>