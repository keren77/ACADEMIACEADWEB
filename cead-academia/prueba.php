<?php
	$database = "localhost";
	$user = "root";
	$pass = "";

	$conn = new mysqli($database, $user, $pass);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Conexion EXITOSA !";
?>
