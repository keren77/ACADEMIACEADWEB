<?php
include 'php/conexion.php';
if(!isset($_GET['user'])){
    header("Location: recuperar.php?error");
  }

  $bool=false;
  if(isset($_GET['error'])){
    $bool=true;
  }

  $user=$_GET['user'];
  $code=$_GET['code'];
  $consulta = "SELECT * FROM TBL_Usuarios WHERE Usuario='".$user."' AND code='".$code."'";

  $stmt = $mysqli->query($consulta);
  if(($row=mysqli_fetch_array($stmt))) {
    $id=$row['Id_usuario'];
    }
  else{
    header("Location: recuperar.php?error");
  }



 ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo_mini.jpg">

  <title>Recuperacion de Contraseña</title>


  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->


  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  <title></title>
</head>
<body class="text-center">

  <aside id="left-panel" class="left-panel">
<div class="col-lg-8">
      <div class="card">
          <div class="breadcrumbs">
            <div class="col-sm-8">
          </div>
      </div>
    <h3 class="text-center">Recuperacion de Contraseña</h3>

 <form action="php/generarnuevapass.php" method="GET">
                        <div class="input-group col-md-12 my-3" align>
                              <input  type="password" id="pas1" name="pas1" placeholder=" Ingrese su contraseña " class="" >
                            </div>
                            <div class="input-group col-md-12 my-2">
                              <input  type="password" id="pas2" name="pas2" placeholder=" Confirme su Contraseña " class="" >
                            </div>
                              <input  type="text" name="id"  hidden="true" value="<?php echo $id ?>">
                              <div class="checkbox mb-3">
                                <label>
                                  <input id="verpass2" type="checkbox" value="remember-me"> Ver Password
                                </label>
                              </div>

                            <?php
                           if($bool){  ?>

                                    <label style="color: red;">mensaje de error</label>

                                    <?php  } ?>

                          <button type="submit" class="" name="guardarpass">
                                              Generar Nueva Contraseña
                                          </button>

                                          <div class="text-center my-4">
                                      		<button type="button" class="btn btn-link"><a href="index.php">SALIR</a></button>
                                      	</div>


</form>
<script src="js/controlador.js"></script>

</body>
</html>
