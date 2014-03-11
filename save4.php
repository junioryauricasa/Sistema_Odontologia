<?php  
	include("conex.php");

	$email         = $_POST['email'];
	$pub_pos1      = $_POST['pub_pos1'];
	$pub_pos2      = $_POST['pub_pos2'];
	$pub_pos3      = $_POST['pub_pos3'];
	$pub_pos4      = $_POST['pub_pos4'];
	$pub_pos5      = $_POST['pub_pos5'];
	$est_nom1      = $_POST['est_nom1'];
	$est_nom2      = $_POST['est_nom2'];
	$est_nom3      = $_POST['est_nom3'];
	$est_inst1     = $_POST['est_inst1'];
	$est_inst2     = $_POST['est_inst2'];
	$est_inst3     = $_POST['est_inst3'];
	$est_fecha1    = $_POST['est_fecha1'];
	$est_fecha2    = $_POST['est_fecha2'];
	$est_fecha3    = $_POST['est_fecha3'];
	$event_nom1    = $_POST['event_nom1'];
	$event_nom2    = $_POST['event_nom2'];
	$event_nom3    = $_POST['event_nom3'];
	$event_inst1   = $_POST['event_inst1'];
	$event_inst2   = $_POST['event_inst2'];
	$event_inst3   = $_POST['event_inst3'];
	$event_fecha1  = $_POST['event_fecha1'];
	$event_fecha2  = $_POST['event_fecha2'];
	$event_fecha3  = $_POST['event_fecha3'];
	$org_nom1  	   = $_POST['org_nom1'];
	$org_nom2  	   = $_POST['org_nom2'];
	$org_nom3  	   = $_POST['org_nom3'];
	$org_doc1  	   = $_POST['org_doc1'];
	$org_doc2  	   = $_POST['org_doc2'];
	$org_doc3  	   = $_POST['org_doc3'];
	$check_1  	   = $_POST['check_1'];
	$check_2  	   = $_POST['check_2'];
	$check_3  	   = $_POST['check_3'];
	$check_4  	   = $_POST['check_4'];
	$check_5  	   = $_POST['check_5'];
	$check_6  	   = $_POST['check_6'];
	$check_7  	   = $_POST['check_7'];
	$check_8  	   = $_POST['check_8'];
	$check_9  	   = $_POST['check_9'];
	$comentario    = $_POST['comentario'];

	$sql = mysql_query("INSERT INTO edu_continua(
		email,
		pub_pos1,pub_pos2,pub_pos3,pub_pos4,pub_pos5,
		est_nom1,est_nom2,est_nom3,
		est_inst1,est_inst2,est_inst3,
		est_fecha1,est_fecha2,est_fecha3,
		event_nom1,event_nom2,event_nom3,
		event_inst1,event_inst2,event_inst3,
		event_fecha1,event_fecha2,event_fecha3,
		org_nom1,org_nom2,org_nom3,
		org_doc1,org_doc2,org_doc3,
		check_1,check_2,check_3,check_4,check_5,check_6,check_7,check_8,check_9,
		comentario) 
		VALUES ('$email','$pub_pos1','$pub_pos2','$pub_pos3','$pub_pos4','$pub_pos5','$est_nom1','$est_nom2','$est_nom3','$est_inst1','$est_inst2','$est_inst3','$est_fecha1','$est_fecha2','$est_fecha3','$event_nom1','$event_nom2','$event_nom3','$event_inst1','$event_inst2','$event_inst3','$event_fecha1','$event_fecha2','$event_fecha3','$org_nom1','$org_nom2','$org_nom3','$org_doc1','$org_doc2','$org_doc3','$check_1','$check_2','$check_3','$check_4','$check_5','$check_6','$check_7','$check_8','$check_9','$comentario')",$conexion);
	//print_r($sql);


	if ($sql) {
		header("Location:index.php?msj=1.php");
	}
	else {
		header("Location:index.php");
	}
?>