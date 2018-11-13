<?php
include '../acead/php/conexion.php';
require '../acead/php/funcs.php';


$errors = array();

if(!empty($_POST)){
  $email = $mysqli->real_escape_string($_POST['email']);

  if(!isEmail($email)){
    $errors[] = "Debe ingresar un correo electronico valido";
}
    if(emailExiste($email)){
      $user_id = getValor('id_usuario', 'CorreoElectronico', $email);
      $usuario = getValor('usuario', 'CorreoElectronico', $email);

      $token = generaTokenPass($email);

      $url = 'http://'.$_SERVER["SERVER_NAME"].
      '/acead/nuevacontra.php?userid='.$user_id.'&token='.$token;

      $asunto = 'Recuperar Contraseña - Academia CEAD';
      $cuerpo = "Buen  dia $usuario: <br /><br />Se ha solicitado un reinicio de Contrase&ntilde;a.
      <br/><br/>Para restaurar la Contrase&ntilde;a,
      visita la siguiente direcci&oacute;n: <a href='$url'>$url<a/>";

      if(enviarEmail($email, $usuario, $asunto , $cuerpo)){
        echo "Hemos enviado un correo electronico a la direccion $email
        para restablecer su contrasena";
        echo "<a href='index.php'>Iniciar Sesion</a>";
        //echo '<script>alert("Hemos enviado un correo electronico a la direccion $email
        //para restablecer su contrasena");window.location="index.php";</script>';
        exit;

      }else {
          $errors[] = "Error al enviar correo";
      }
    }
    else {
      $errors[] = "Correo no existe";
    }
}


?>

<head>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Olvido Su Contraseña</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/styleIrma.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <html lang="es">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <!-- CS<link rel="stylesheet" href="css/style.css">S  -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
      <style type="text/css">
     .rowIrmaX {
        margin-right: -15px;
        margin-left: 200px;
        margin-top: 15px;
}
.tblGrande{
  width: 100%;
  height: 100%;
}
.col-lg-8{
  margin-left: 165px;
}
   </style>


    <aside id="left-panel" class="left-panel">
      <div class="col-lg-8">
                   <div class="card">
                   <div class="breadcrumbs">
            <div class="col-sm-8">
            </div>
        </div>
        <h3 class="text-center">¿¡Olvido su Contraseña!?</h3>
        <img src="" />
                          <div class="card-body card-block">
                        <form action="" method="post" class="">
                          <table class="tblGrande">
                          <div class="input-icon right">

                              <input  type="email" name="email" placeholder=" Ingrese su correo electronico" class="form-control" required>
                            </div>
                          </div>
                        </td></tr>
                        <tr><td>
                            <center>
                            <div class="text-center my-4">
                          <div style="width: 330px; margin: 0 auto;">
                          <button id="autoregistro_boton" type="submit" class="btn btn-lg btn-info btn-block" name="botonautoregistro">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <a href="">Generar Nueva Contraseña</a>
                                            </center>
                                          </button>
                                        </div></td></tr>
                                  <a href="index.php" >ATRAS</a>
                                          </table>
                        </form>
                        <?php echo resultBlock($errors); ?>

                      </div>
                    </div>
                  </div>

<!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  <!--<script src="assets/js/bootstrap-datetimepicker.js"></script>-->

<body >
