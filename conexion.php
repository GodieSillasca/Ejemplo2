<?php 
	//echo "Hola kubos";
	//Para hacer la conexion
	//(SERVER[IP],DB_USER,PASS_DB,NOMBRE_DB)
	$mysqli = new mysqli("localhost","root","","claseprebes");
	if (mysqli_connect_errno()) {
		echo "Fallo chavo su conexion a la base", mysql_connect_error();
		exit();
	}
	//echo "\nEstas conectado papu!";
	
?>