<?php
	include '../acead/php/conexion.php';
	session_start();

	$username = $_SESSION['nombre'];

	if (!empty($_SESSION['nombre']))echo $username;
	else {
		echo "No hay";
	}

	$sql = "SELECT * FROM tbl_usuarios WHERE Usuario = '".$username."'";
	$stmt = $mysqli->query($sql);
	if($row=mysqli_fetch_array($stmt)){
		$_SESSION['id']=$row['Id_usuario'];
		echo $_SESSION['id'];
	}

/*session_start();
if(!(isset($_SESSION['id']))) {
    header("Location: index.php");
  }
  if(($_SESSION['estado'] !=1)){
  	header("Location: home.php");
  }
*/

  $preguntas=1;
  $consulta="SELECT valor FROM TBL_Parametros WHERE Parametro='ADMIN_PREGUNTAS'";
  $stmt = $mysqli->query($consulta);
  if($row=mysqli_fetch_array($stmt)){
    $preguntas=$row['valor'];
  }

  $consulta2="SELECT Id_Pregunta,Pregunta FROM TBL_Preguntas LIMIT ".$preguntas;
	$stmt1 = $mysqli->query($consulta2);
	$con=array();
	$n=0;
	while ($row=$stmt1->fetch_row()) {
		$con[$n]['id']=$row[0];
		$con[$n]['pregunta']=$row[1];
		$n++;
	}

	$stmt->close();
	$stmt1->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logo_mini.jpg">

    <title>Preguntas de seguridad</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>

  <body class="text-center">
  <div class="form-signin">
  <form action="respuesta.php" method="get">
   <div class="card mb-3">
            <div class="card-header" id="ingresar_actualizar">
              <i id="i_ingresar_actualizar" class="fas fa-plus"></i> <h2>Preguntas de seguridad</h2></div>
            <div class="card-body">

    		<?php for ($i=0; $i < $preguntas; $i++) {
    		?>
    		<div class="form-group">
                  <label ><?php echo $con[$i]['pregunta']; ?></label>
                  <input class="form-control" name="pregunta<?php echo $i ?>" id="pregunta<?php echo $i ?>" type="text" placeholder="Ingrese su respuesta">
            </div>
    		<?php } ?>
    		<button class="btn btn-lg btn-primary btn-block" id="btnEntrar" name= "botonguardar" type="submit" >Guardar</button>

		</div>
    </div>
    </form>
    </div>
    <script src="js/controlador.js"></script>
  </body>
</html>



<?php
include '../acead/php/conexion.php';

if(isset($_POST['botonguardar'])){

$txtpregunta = $_POST['pregunta'];
$idusuario = $_SESSION['id'];


if ($mysqli->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_preguntasusuario(Pregunta, Id_usuario, Id_Pregunta, FechaCreacion, CreadoPor)
VALUES (upper('$txtpregunta'), '$idusuario', $preguntas, '2018-01-01', '$username' ))";


if ($mysqli->query($sql) === TRUE) {
		//echo "New record created successfully";
} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
  echo '<script>alert("Preguntas Guardadas");window.location="home.php";</script>';
}

 ?>
