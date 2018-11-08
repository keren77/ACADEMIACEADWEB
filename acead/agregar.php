<?php
/*
{
include '../acead/php/conexion.php';


if ($mysqli->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$sql1 = "SELECT MAX(id_empleado) FROM tbl_personal";
//$idtemp = $mysqli->query($sql1);
$idtemp =  $mysqli->query($sql1);

while($row = mysqli_fetch_array($idtemp)) {
$cal = $row['MAX(id_empleado)']+1;
//print_r($row);
}
$sql2 = "INSERT INTO tbl_personal(PrimerNombre, SegundoNombre,PrimerApellido, SegundoApellido,Telefono,Cedula,Email, CreadoPor, Id_Departamento, Id_estado, Id_genero)
VALUES(".$_GET['InputNombre1'].", ".$_GET['InputNombre2'].", ".$_GET['InputApellido1'].", ".$_GET['InputApellido2'].", ".$_GET['InputTelefono'].", ".$_GET['InputCedula'].", ".$_GET['InputEmail'].", 'AUTOREGISTRO', '1', ".$_GET['SelectCivil'].", ".$_GET['SelectSexo']." ) ";

/*$sql3 = "INSERT INTO tbl_usuarios(usuario, contrasena, PreguntasContestadas, CorreoElectronico, id_estado, id_rol, id_empleado, CreadoPor)
VALUES( '3', '$auto_email', '1', '1', '$cal', 'AUTOREGISTRO')";
*/
/*if ($mysqli->query($sql2) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $mysqli->error;
}
echo '<script>alert("Personal Registrado");window.location="index.php";</script>';
}
*/
//".$_GET['catId'].",
?>
