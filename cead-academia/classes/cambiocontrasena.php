//CAMBIO DE CONTRASEÑA DE CADA USUSARIO
<?php
function validarCambioPassusuario($idusr, $passActual,$pass_Nuevo,$pass_Repetir)
{
$usuario = $_POST['user_n']

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "academiacead";

  $conn = new mysqli($servername, $username, $password , $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

$idusr = $sql = "SELECT id_usuario from tbl_usuarios where Usuario = '$usuario'";

	global $mysqli;
	$stmt = $mysqli->prepare("SELECT tbl_usuarios.id_usuario, tbl_usuarios.contrasena, tbl_hist_contrasena.contrasena
    FROM tbl_hist_contrasena
    INNER JOIN tbl_usuarios ON tbl_hist_contrasena.id_usuario=tbl_usuarios.id_usuario WHERE ID_USUARIO = '$idusr' LIMIT 1");

  $stmt->bind_param('i', $idusr);
	$stmt->execute();
	$stmt->store_result();
	$rows = $stmt->num_rows;
	$stmt->bind_result($pass_Actual, $pass_Anterior);//ASIGNO EL RESULTADO A LAS VARIABLES
	$stmt->fetch();

			 if(password_verify($passActual, $pass_Actual) || $passActual == $pass_Actual)
				{

								 if($pass_Nuevo == $pass_Repetir)
									{

										if ($passActual == $pass_Nuevo) {
											$errors = "La contraseña nueva no puede ser igual a su contraseña actual.";
										}

										else {

												if (password_verify($pass_Nuevo, $pass_Anterior)  || $pass_Nuevo == $pass_Anterior) {
														$errors = "La contraseña nueva no puede ser igual a su contraseña anterior.";
												}

												else {

														if(password_hash($pass_Nuevo))
														{

														 global $mysqli;
														 $vparametro = 'ACTIVO';
														 $sentencia = $mysqli->prepare('SELECT f_seg_fecha_pass_venc(?) AS RESULTADO');
														 $sentencia->bind_param('s',$vparametro);
														 $sentencia->execute();
														 $sentencia->store_result();
														 $sentencia->bind_result($fechavenc);//ASIGNO EL RESULTADO A LAS VARIABLES
														 $sentencia->fetch();


															$pass_Nuevo = password_hash($pass_Nuevo);//encrpta la contraseña


															if ($mysqli->query("CALL sp_seg_tbl_seg_cambiopassusuarios('$vparametro', '$idusuario', '$pass_Nuevo', '$fechavenc', 1)"))
															{
															 $_SESSION['cc_Result'] = 'true';
															 $errors = true;
																// header("location: ../usuarios\consultar.php");
															}
															else {
																 $_SESSION['cc_Result'] = 'false';
																 $errors = false;
															}

														}
														else
														{
															 $errors = "La contraseña nueva debe de tener mínimo una letra mayúscula, una letra minúscula, un número y un caracter especial: @#$-%^*_+=";
														}

												}
										}

									}

									else
									{
										 $errors = "La contraseña nueva no coincide con la confirmación de contraseña.";
									}
				}

				else
			{
			 $errors = "La contraseña actual no coincide con la contraseña almacenada.";

			}

return $errors;


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  $conn->close();
}
 ?>
