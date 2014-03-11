<?php  
	include("conex.php");

	$email        = $_POST['email'];
	$inst         = $_POST['institucion'];
	$posgrado     = $_POST['posgrado'];
	$f_ingreso    = $_POST['fecha_ingreso'];
	$f_egreso     = $_POST['fecha_egreso'];
	$mot_1        = $_POST['mot_1'];
	$mot_2        = $_POST['mot_2'];
	$mot_3        = $_POST['mot_3'];
	$mot_4        = $_POST['mot_4'];
	$mot_5        = $_POST['mot_5'];
	$mot_6        = $_POST['mot_6'];
	$el_posgrado  = $_POST['el_posgrado'];
	$exp_posgrado = $_POST['exp_posgrado'];
	$val_pos1     = $_POST['val_pos1'];
	$val_pos2     = $_POST['val_pos2'];
	$val_pos3     = $_POST['val_pos3'];
	$val_pos4     = $_POST['val_pos4'];
	$serv1        = $_POST['serv_1'];
	$serv2        = $_POST['serv_2'];
	$serv3        = $_POST['serv_3'];
	$serv4        = $_POST['serv_4'];
	$serv5        = $_POST['serv_5'];
	$serv6        = $_POST['serv_6'];
	$serv7        = $_POST['serv_7'];
	$serv8        = $_POST['serv_8'];
	$serv9        = $_POST['serv_9'];
	$serv10       = $_POST['serv_10'];
	$serv11       = $_POST['serv_11'];
	$serv12       = $_POST['serv_12'];
	$serv13       = $_POST['serv_13'];
	$serv14       = $_POST['serv_14'];
	$mod_1        = $_POST['mod_1'];
	$mod_2        = $_POST['mod_2'];
	$mod_3        = $_POST['mod_3'];
	$mod_4        = $_POST['mod_4'];
	$mod_5        = $_POST['mod_5'];
	$mod_6        = $_POST['mod_6'];
	$mod_7        = $_POST['mod_7'];


	$sql = mysql_query("INSERT INTO datos_posgrado(email,institucion,posgrado,fecha_ingreso,fecha_egreso,mot_1,mot_2,mot_3,mot_4,mot_5,mot_6,el_posgrado,exp_posgrado,val_pos1,val_pos2,val_pos3,val_pos4,serv_1,serv_2,serv_3,serv_4,serv_5,serv_6,serv_7,serv_8,serv_9,serv_10,serv_11,serv_12,serv_13,serv_14,mod_1,mod_2,mod_3,mod_4,mod_5,mod_6,mod_7) 
		VALUES ('$email','$inst','$posgrado','$f_ingreso','$f_egreso','$mot_1','$mot_2','$mot_3','$mot_4','$mot_5','$mot_6','$el_posgrado','$exp_posgrado','$val_pos1','$val_pos2','$val_pos3','$val_pos4','$serv1','$serv2','$serv3','$serv4','$serv5','$serv6','$serv7','$serv8','$serv9','$serv10','$serv11','$serv12','$serv13','$serv14','$mod_1','$mod_2','$mod_3','$mod_4','$mod_5','$mod_6','$mod_7')",$conexion);
	//print_r($sql);


	if ($sql) {
		header("Location:form3.php?email=$email");
	}
	else {
		header("Location:form3.php");
	}
?>