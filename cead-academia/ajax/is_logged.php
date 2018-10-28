<?php	
	session_start();
	if (!isset($_SESSION['id_estado']) AND $_SESSION['id_estado'] != 1) {
        header("location: ../login.php");
		exit;
    }