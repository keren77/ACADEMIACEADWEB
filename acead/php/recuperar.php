<?php
	include 'conexion.php';
	include '../PHPMailer/PHPMailerAutoload.php';
	if(!isset($_GET['user'])){
		header("Location: ../recuperar.php?error");
	}

	$user=$_GET['user'];

	$consulta = "SELECT code,CorreoElectronico  FROM TBL_Usuarios WHERE Usuario='".$user."'";

	$stmt = $mysqli->query($consulta);

	if(($row=mysqli_fetch_array($stmt))) {
		$code=$row['code'];
		$correo=$row['CorreoElectronico'];

		//Envio de correo
		///////////////////////////////////////////////////////////////////////////////////////////////////////////
		$email_address = $correo;

	$email_subject = "Recuperacion de contrasena: ";

	$email_body= "<p>Hola <b>".$user."</b> Su Link de recuperacion de contrasena es el siguiente:</p>
							</p> http://localhost/acead/nuevacontra.php?user=".$user."&code=".$code."</p>";


$mail=new PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug = 0;

$mail->Debugoutput = 'html';

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = "academiacead@gmail.com";

$mail->Password = "academia2018";

$mail->setFrom('academiacead@gmail.com', 'Academia Cead');

$mail->addAddress($email_address, $user);

$mail->Subject = $email_subject;
$mail->MsgHTML($email_body);


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message enviado!";
}




		////////////////////////////////////////////////////////////////////////////////////////////////////////////




	}
	else{
		header("Location: ../recuperar.php?error");
	}
	$mysqli->close();




 ?>
