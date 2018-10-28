<?php
$emp_prim_nombre = $_POST['emp_primer_nombre'];
$emp_prim_apellido = $_POST['emp_primer_apellido'];
$emp_telefono = $_POST['emp_tel'];
$emp_ced = $_POST['emp_cedula'];
$emp_correo = $_POST['emp_correo'];

require("db.php");

mysqli_query($mysqli, "INSERT into tbl_personal(PrimerNombre, PrimerApellido,Telefono, Cedula, email)
        VALUES('',Upper('$emp_prim_nombre'),Upper('$emp_prim_apellido'),'$emp_telefono','$emp_ced','$emp_correo')");

echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
 echo "<script>location.href='../html/empleado.php'</script>";
?>
