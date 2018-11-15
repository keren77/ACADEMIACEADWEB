<?php
include 'conexion.php';

if(isset($_GET['pas1'])){
	$pas1=$_GET['pas1'];
}
if(isset($_GET['pas2'])){
	$pas2=$_GET['pas2'];
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
}

//echo $pas1.$pas2.$id;

$raiz= $pas1.$pas2.$id;
//echo md5($raiz);


if ($pas1 === $pas2){

}else{
    echo '<script>alert("Las contraseñas no coinciden");</script>';
}

$contr_encrypt = password_hash($pas1,1);

if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
}

$sql = "UPDATE tbl_usuarios SET Contrasena = '$contr_encrypt' WHERE Id_usuario = '$id'";

if ($mysqli->query($sql)  === TRUE) {
 //echo "New record created successfully";
}
else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}

echo '<script>alert("Su contraseña ha sido modificada.");window.location="../index.php";</script>';

 ?>
