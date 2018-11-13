<head>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Usuario</title>
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

    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/styleIrma.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


</head>
   <!-- Left Panel -->

   <style type="text/css">
.rowIrmaX {
  margin-right: -15px;
  margin-left: 200px;
  margin-top: 15px; }
.tblGrande{
  width: 100%;
  height: 100%;}
.col-lg-8{
  margin-left: 165px;}
   </style>

    <aside id="left-panel" class="left-panel">
<div class="col-lg-8">
                   <div class="card">
                   <div class="breadcrumbs">
            <div class="col-sm-8">
            </div>
        </div>
        <h3 class="text-center">Registro Usuario</h3>

                          <div class="card-body card-block">
                        <form action="" method="post" class="">
                          <table class="tblGrande">
                            <tr>
                              <td>
                            <div class="col-12 col-md-6 my-2"><input type="text" id="PrimerNombre" name="auto_prim_nombre" placeholder="Primer Nombre" class="form-control" required style="text-transform:uppercase"></div>
                            <div class="col-12 col-md-6 my-2"><input type="text" id="SegundoNombre" name="auto_seg_nombre" placeholder="Segundo Nombre" class="form-control"style="text-transform:uppercase" ></div>
                          </div>
                        </tr>
                        </td>
                        <tr>
                          <td>
                                          <div class=".row">
                            <div class="col-12 col-md-6 my-2"><input type="text" id="PrimerApellido" name="auto_prim_apellido" placeholder="Primer Apellido" class="form-control"required style="text-transform:uppercase"></div>
                          <div class="col-12 col-md-6 my-2"><input type="text" id="SegundoApellido" name="auto_seg_apellido" placeholder="Segundo apellido" class="form-control" style="text-transform:uppercase"></div>
                          </div>
                        </tr>
                        </td>

                        <tr>
                          <td>
                        <div class="col-12 col-md-6 my-2"><input type="text" id="Identidad" name="auto_cedula" placeholder="Numero de Identidad" class="form-control" pattern="[0-9]{13}"></div>
                        <div class="col-12 col-md-6 my-2"><input type="text" id="Telefono" name="auto_telefono" placeholder="Numero de Telefono" class="form-control"  maxlength="8" minlength="8" pattern="[0-9]{8}"></div>
                        <div class="col-12 col-md-6 my-2"><input type="email" id="AutoEmail" name="auto_email" placeholder="Correo Electronico" class="form-control"></div>
                        <div class="col-12 col-md-6 my-2"><input type="text" id="AutoUsuario" name="auto_usuario" placeholder="Usuario" class="form-control" required></div>
                        </div>
                        </tr>

                      <td>
                        <tr>
                                          <div class=".row">
                        </td>
                        </tr>
                          </tr>-->
                          <tr><td>

               <div class="input-group col-md-12 my-2">
                    <input type="password"  id="AutoPass" maxlength="30" minlength="5" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,8}$" title="La contraseña debe tener entre 5 y 8 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial."required id="contrasena" name="auto_contrasena" placeholder="Contraseña" class="form-control pwd1">
                              <span class="input-group-btn">
                                          <button class="btn btn-default reveal1" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                        </span>
                                        <script type="text/javascript">
                                              $(".reveal1").mousedown(function() {
                                              $(".pwd1").replaceWith($('.pwd1').clone().attr('type', 'text'));
                                          })
                                          .mouseup(function() {
                                            $(".pwd1").replaceWith($('.pwd1').clone().attr('type', 'password'));
                                          })
                                          .mouseout(function() {
                                            $(".pwd1").replaceWith($('.pwd1').clone().attr('type', 'password'));
                                          });
                                        </script>
                                      </div>
                                    </td></tr>
                                    <tr><td>

              <div class="input-group col-md-12 my-2">
                <input type="password" id="AutoPassConfirm" class="form-control pwd" placeholder="Confirmar Contraseña" name="auto_user_password"  value="" autocomplete="off" required maxlength="30" minlength="5" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,8}$" title="La contraseña debe tener entre 5 y 8 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial.">
                <span class="input-group-btn">
            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
          </span>
          <script type="text/javascript">
          $(".reveal").mousedown(function() {
            $(".pwd").replaceWith($('.pwd').clone().attr('type', 'text'));
          })
          .mouseup(function() {
            $(".pwd").replaceWith($('.pwd').clone().attr('type', 'password'));
          })
          .mouseout(function() {
            $(".pwd").replaceWith($('.pwd').clone().attr('type', 'password'));
          });
        </script>
      </div>
      <tr><td>
                         <div class="text-Left form-group">
                             <label for="Fecha" class="text-Left col-sm-3 control-label">Fecha de Vencimiento</label>
                               <div class="col-sm-5">
                               <?php
                                $fecha = date_create(date_default_timezone_get());
                                date_add($fecha, date_interval_create_from_date_string('30 days'));
                                echo date_format($fecha, 'Y-m-d');
                                ?>

                             </div>
                         </div>
                         </td></tr>

                         <tr><td>
                         <div class="form-group">
                             <label for="Fecha" class="col-sm-3 control-label">Fecha de Edición</label>
                             <div class="col-sm-5">
                                 <?php date_default_timezone_set('America/El_Salvador'); echo date('d-m-Y  - g:ia') ?>
                             </div>
                         </div>
                         </td></tr>

                          <tr><td>
                            <center>
                            <div class="text-center my-4">
                          <div style="width: 330px; margin: 0 auto;">
                          <button id="autoregistro_boton" type="submit" class="btn btn-lg btn-info btn-block" name="botonautoregistro">
                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <span href="">Registrarse</span>
                                            </center>
                                          </button>
                                          <div class="text-center my-4">
                                          <button type="button" class="btn btn-link"><a href="index.php">SALIR</a></button>
                                        </div>
                                      </div></td></tr>

                          </table>
                        </form>
                      </div>
                    </div>
                  </div>

<!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <!--<script src="js/controlador.js"></script>-->

  <?php
  //REGISTRO EN LA BD
  if (isset($_POST['botonautoregistro'])) {
    // code...
    $auto_prim_nombre = $_POST['auto_prim_nombre'];
    $auto_seg_nombre = $_POST['auto_seg_nombre'];
    $auto_prim_apellido = $_POST['auto_prim_apellido'];
    $auto_seg_apellido = $_POST['auto_seg_apellido'];
    $auto_cedula = $_POST['auto_cedula'];
    $auto_telefono = $_POST['auto_telefono'];
    $auto_usuario = $_POST['auto_usuario'];
    $auto_email = $_POST['auto_email'];
    $auto_contrasena = $_POST['auto_contrasena'];
    $auto_confirmar_conrasena = $_POST['auto_user_password'];
    $AUTO_CONC = $auto_prim_nombre . " " . $auto_prim_apellido;

    if ($auto_contrasena === $auto_confirmar_conrasena){

    }else{
        echo '<script>alert("Las contraseñas no coinciden");window.location="autoregistro.php";</script>';
    }
$contr_encrypt = password_hash($auto_contrasena,1);

include '../acead/php/conexion.php';

if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
}

$sql3 = "SELECT MAX(id_empleado) FROM tbl_personal";
//$idtemp = $mysqli->query($sql1);
$idtemp =  $mysqli->query($sql3);

while($row = mysqli_fetch_array($idtemp)) {
$cal = $row['MAX(id_empleado)']+1;
//print_r($row);
//echo $row['MAX(id_empleado)'];
echo $cal;
//print_r($cal);
}

  $sql = "INSERT INTO tbl_personal (PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido,Telefono, Cedula, email, id_estadocivil, id_genero)
  VALUES (UPPER('$auto_prim_nombre'),UPPER('$auto_seg_nombre'), UPPER('$auto_prim_apellido'), UPPER('$auto_seg_apellido'),'$auto_telefono','$auto_cedula','$auto_email','1','2')";

  $sql3 = "SELECT MAX(id_empleado) FROM tbl_personal";
  //$idtemp = $mysqli->query($sql1);
  $idtemp =  $mysqli->query($sql3);

  while($row = mysqli_fetch_array($idtemp)) {
  $cal = $row['MAX(id_empleado)']+1;
  //print_r($row);
  //echo $row['MAX(id_empleado)'];
  echo $cal;
  //print_r($cal);
}

  $sql2 = "INSERT INTO tbl_usuarios(Usuario, Contrasena, PreguntasContestadas, CorreoElectronico, id_empleado, Id_Estado, Id_Rol, CreadoPor)
  VALUES (upper('$auto_usuario'), '$contr_encrypt', '3', '$auto_email','$cal','1','1', 'AUTOREGISTRO' )";

  $sql4 = "INSERT INTO tbl_direcciones(Direccion, id_empleado)
  VALUES (upper('$emp_direccion'),'$cal')";


  if ($mysqli->query($sql)  === TRUE) {
   //echo "New record created successfully";
 }
 else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
   if ($mysqli->query($sql2)  === TRUE) {
   }
   else {
    echo "Error: " . $sql2 . "<br>" . $mysqli->error;
  }
  if ($mysqli->query($sql3)  === TRUE) {
}
else {
      echo "Error: " . $sql3 . "<br>" . $mysqli->error;
    }
if ($mysqli->query($sql4)  === TRUE) {
    }
else {
      echo "Error: " . $sql4 . "<br>" . $mysqli->error;
      }


  $mysqli->close();

  echo '<script>alert("Personal Registrado");window.location="index.php";</script>';
  }
              //require("registroempleados.php");

      ?>
<script type="text/javascript">
$("#PrimerNombre").keypress(function(tecla) {
            if(tecla.charCode == 32) return false;
        });
        $("#PrimerApellido").keypress(function(tecla) {
                    if(tecla.charCode == 32) return false;
                });
                $("#SegundoApellido").keypress(function(tecla) {
                            if(tecla.charCode == 32) return false;
                        });
                        $("#Identidad").keypress(function(tecla) {
                                    if(tecla.charCode == 32) return false;
                                });

                                $("#Telefono").keypress(function(tecla) {
                                            if(tecla.charCode == 32) return false;
                                        });
                                        $("#AutoEmail").keypress(function(tecla) {
                                                    if(tecla.charCode == 32) return false;
                                                });
                                                $("#AutoUsuario").keypress(function(tecla) {
                                                            if(tecla.charCode == 32) return false;
                                                        });
                                                        $("#AutoPass").keypress(function(tecla) {
                                                                    if(tecla.charCode == 32) return false;
                                                                });
                                                                $("#AutoPassConfirm").keypress(function(tecla) {
                                                                            if(tecla.charCode == 32) return false;
                                                                        });
</script>


    </body>
    </html>
