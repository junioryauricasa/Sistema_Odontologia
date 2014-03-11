<?php  
	include("conex.php");

	$email         = $_POST['email'];
	$trabaja       = $_POST['trabaja'];
	$ejerce        = $_POST['ejerce'];
	$emp_1         = strtoupper($_POST['emp_1']);
	$puesto_1      = strtoupper($_POST['puesto_1']);
	$sector_1      = strtoupper($_POST['sector_1']);
	$dom_1         = strtoupper($_POST['dom_1']);
	$tel_1         = $_POST['tel_1'];
	$emp_2         = strtoupper($_POST['emp_2']);
	$puesto_2      = strtoupper($_POST['puesto_2']);
	$sector_2      = strtoupper($_POST['sector_2']);
	$dom_2         = strtoupper($_POST['dom_2']);
	$tel_2         = $_POST['tel_2'];
	$emp_3         = strtoupper($_POST['emp_3']);
	$puesto_3      = strtoupper($_POST['puesto_3']);
	$sector_3      = strtoupper($_POST['sector_3']);
	$dom_3         = strtoupper($_POST['dom_3']);
	$tel_3         = $_POST['tel_3'];
	$prep_posgrado = $_POST['prep_posgrado'];
	$aspecto_1     = $_POST['aspecto_1'];
	$aspecto_2     = $_POST['aspecto_2'];
	$aspecto_3     = $_POST['aspecto_3'];
	$aspecto_4     = $_POST['aspecto_4'];
	$aspecto_5     = $_POST['aspecto_5'];
	$aspecto_6     = $_POST['aspecto_6'];


	$sql = mysql_query("INSERT INTO datos_laborales(email,trabaja,ejerce,emp_1,emp_2,emp_3,puesto_1,puesto_2,puesto_3,sector_1,sector_2,sector_3,dom_1,dom_2,dom_3,tel_1,tel_2,tel_3,prep_posgrado,aspecto_1,aspecto_2,aspecto_3,aspecto_4,aspecto_5,aspecto_6) 
		VALUES ('$email','$trabaja','$ejerce','$emp_1','$emp_2','$emp_3','$puesto_1','$puesto_2','$puesto_3','$sector_1','$sector_2','$sector_3','$dom_1','$dom_2','$dom_3','$tel_1','$tel_2','$tel_3','$prep_posgrado','$aspecto_1','$aspecto_2','$aspecto_3','$aspecto_4','$aspecto_5','$aspecto_6')",$conexion);
	//print_r($sql);


	if ($sql) {
		header("Location:form4.php?email=$email");
	}
	else {
		header("Location:form3.php?email=$email");
	}
?>