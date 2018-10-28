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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/styleIrma.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
   <!-- Left Panel -->

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
        <h3 class="text-center">Registro Usuario</h3>
        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjY5LjI3MiwzMTAuMTk4Yzg2LjE3Ny0wLjAwNSwxMTcuMTg0LTg2LjI5MSwxMjUuMzAxLTE1Ny4xNjlDNDA0LjU3Miw2NS43MTUsMzYzLjI4MiwwLDI2OS4yNzIsMCAgICBDMTc1LjI3NCwwLDEzMy45NjMsNjUuNzEsMTQzLjk3LDE1My4wMjlDMTUyLjA5NSwyMjMuOTA3LDE4My4wOTMsMzEwLjIwNCwyNjkuMjcyLDMxMC4xOTh6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTQ1Ny43MDcsMzQ2LjExNWMyLjc3MywwLDUuNTI4LDAuMDgzLDguMjY0LDAuMjM1Yy00LjEwMS01Ljg1LTguODQ4LTExLjAxLTE0LjQwMy0xNS4xNTggICAgYy0xNi41NTktMTIuMzU5LTM4LjAwNS0xNi40MTQtNTYuOTY0LTIzLjg2NGMtOS4yMjktMy42MjUtMTcuNDkzLTcuMjI2LTI1LjI1MS0xMS4zMjYgICAgYy0yNi4xODQsMjguNzE1LTYwLjMyOSw0My43MzYtMTAwLjA5MSw0My43NGMtMzkuNzQ5LDAtNzMuODkxLTE1LjAyMS0xMDAuMDcyLTQzLjc0Yy03Ljc1OCw0LjEwMS0xNi4wMjQsNy43MDEtMjUuMjUxLDExLjMyNiAgICBjLTE4Ljk1OSw3LjQ1MS00MC40MDQsMTEuNTA1LTU2Ljk2NCwyMy44NjRjLTI4LjYzOCwyMS4zNzUtMzYuMDM5LDY5LjQ2LTQxLjg1NCwxMDIuMjZjLTQuNzk5LDI3LjA3Ni04LjAyMyw1NC43MDctOC45NjQsODIuMjA5ICAgIGMtMC43MjksMjEuMzAzLDkuNzg5LDI0LjI5LDI3LjYxMSwzMC43MjFjMjIuMzE1LDguMDQ4LDQ1LjM1NiwxNC4wMjMsNjguNTUyLDE4LjkyMWM0NC43OTcsOS40Niw5MC45NzMsMTYuNzI5LDEzNi45NSwxNy4wNTQgICAgYzIyLjI3OC0wLjE1OSw0NC42MDEtMS45NTYsNjYuNzkyLTQuODMzYy0xNi40MzEtMjMuODA3LTI2LjA2OC01Mi42NDUtMjYuMDY4LTgzLjY5NSAgICBDMzA5Ljk5NSw0MTIuMzc4LDM3Ni4yNTgsMzQ2LjExNSw0NTcuNzA3LDM0Ni4xMTV6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTQ1Ny43MDcsMzc1LjY1OGMtNjUuMjYyLDAtMTE4LjE3MSw1Mi45MDktMTE4LjE3MSwxMTguMTcxUzM5Mi40NDQsNjEyLDQ1Ny43MDcsNjEyczExOC4xNzItNTIuOTA5LDExOC4xNzItMTE4LjE3MSAgICBDNTc1Ljg3OCw0MjguNTY2LDUyMi45NjksMzc1LjY1OCw0NTcuNzA3LDM3NS42NTh6IE01MDkuNDA3LDUxNC4xMDNoLTMxLjQyNXYzMS40MjRjMCwxMS4xOTgtOS4wNzcsMjAuMjc2LTIwLjI3NCwyMC4yNzYgICAgYy0xMS4xOTgsMC0yMC4yNzYtOS4wNzgtMjAuMjc2LTIwLjI3NnYtMzEuNDI0aC0zMS40MjRjLTExLjE5OCwwLTIwLjI3Ni05LjA3Ny0yMC4yNzYtMjAuMjc2ICAgIGMwLTExLjE5OCw5LjA3Ny0yMC4yNzYsMjAuMjc2LTIwLjI3NmgzMS40MjR2LTMxLjQyNGMwLTExLjE5OCw5LjA3OC0yMC4yNzYsMjAuMjc2LTIwLjI3NmMxMS4xOTgsMCwyMC4yNzQsOS4wNzgsMjAuMjc0LDIwLjI3NiAgICB2MzEuNDI0aDMxLjQyNWMxMS4xOTgsMCwyMC4yNzYsOS4wNzgsMjAuMjc2LDIwLjI3NkM1MjkuNjgyLDUwNS4wMjcsNTIwLjYwNiw1MTQuMTAzLDUwOS40MDcsNTE0LjEwM3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
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
                        </div>
                        </tr>

                      <td>
                        <tr>
                                          <div class=".row">
                            <div class="col-12 col-md-6 my-2"><input type="text" id="idusuario" name="auto_usuario" placeholder="Usuario" class="form-control"style="text-transform:uppercase"></div>
                          <div class="col-12 col-md-6 my-2"><input type="email" id="" name="auto_email" placeholder="Correo Electronico" class="form-control"style="text-transform:lowercase"></div>
                          </div>
                        </td>
                        </tr>

             <!-- <tr>
                <td>
               <div class="text-center col-md-12 my-2">

                          <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                            </div>
                          </td>
                          </tr>-->
                          <tr><td>
               <div class="input-group col-md-12 my-2">
                              <input type="password"  maxlength="30" minlength="5" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,8}$" title="La contraseña debe tener entre 5 y 8 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial."required id="contrasena" name="auto_contrasena" placeholder="Contraseña" class="form-control pwd1">

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
<input type="password" class="form-control pwd" placeholder="Confirmar Contraseña" name="auto_user_password"  value="" autocomplete="off" required maxlength="30" minlength="5" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,8}$" title="La contraseña debe tener entre 5 y 8 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial.">

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
                        </td></tr>
  <tr><td>
                    <label class="text-left col-md-12 my-2" > Pregunta 1: </label>
                    <div class="text-center col-md-12 my-2">
                        <select name="auto_cbopregunta1" id="SelectLm" class="form-control-md form-control">
                            <option value="0" disabled="" selected="">Please select</option>
                            <option value="1">¿Cual es el nombre de tu primer mascota?</option>
                            <option value="2">¿Cual es el nombre de tu primer Jefe?</option>
                            <option value="3">¿Cual es el nombre de tu tio favorito?</option>
                            <option value="4">¿Cual es el nombre del colegio que cursaste?</option>
                            <option value="5">¿Cual es el nombre de tu deporte favorito?</option>
                        </select>
                    </div>
                </div>
                </td></tr>

                <tr><td>
              <div class="text-center col-md-12 my-2">
                             <input type="respuesta1" id="respuesta1" name="respuesta1" placeholder="Ingrese su respuesta" class="form-control">
                           </div>
                         </td></tr>

<tr><td>
                    <label class="text-left col-md-12 my-2" > Pregunta 2: </label>
                    <div class="text-center col-md-12 my-2">
                        <select name="auto_cbopregunta2" id="SelectLm" class="form-control-md form-control">
                            <option value="0" disabled="" selected="">Please select</option>
                            <option value="1">¿Cual es el nombre de tu primer mascota?</option>
                            <option value="2">¿Cual es el nombre de tu primer Jefe?</option>
                            <option value="3">¿Cual es el nombre de tu tio favorito?</option>
                            <option value="4">¿Cual es el nombre del colegio que cursaste?</option>
                            <option value="5">¿Cual es el nombre de tu deporte favorito?</option>
                        </select>
                    </div>
                </div>
                </td></tr>

                <tr><td>
            <div class="text-center col-md-12 my-2">
                           <input type="respuesta2" id="respuesta2" name="respuesta2" placeholder="Ingrese su respuesta" class="form-control">
                         </div>
                       </td></tr>
<tr><td>
                    <label class="text-left col-md-12 my-2" > Pregunta 3: </label>
                    <div class="text-center col-md-12 my-2">
                        <select name="auto_cbopregunta3" id="SelectLm" class="form-control-md form-control">
                            <option value="0" disabled="" selected="">Please select</option>
                            <option value="1">¿Cual es el nombre de tu primer mascota?</option>
                            <option value="2">¿Cual es el nombre de tu primer Jefe?</option>
                            <option value="3">¿Cual es el nombre de tu tio favorito?</option>
                            <option value="4">¿Cual es el nombre del colegio que cursaste?</option>
                            <option value="5">¿Cual es el nombre de tu deporte favorito?</option>
                        </select>
                    </div>
                </div>
                </td></tr>

                <tr><td>
              <div class="text-center col-md-12 my-2">
                             <input type="respuesta3" id="respuesta3" name="respuesta3" placeholder="Ingrese su respuesta" class="form-control">
                           </div>
                         </td></tr>

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
  <!--<script src="assets/js/bootstrap-datetimepicker.js"></script>-->


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

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "academiacead";

  $conn = new mysqli($servername, $username, $password , $dbname);

  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }


  $sql = "INSERT INTO tbl_personal (PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido,Telefono, Cedula, email, id_estadocivil, id_genero)
  VALUES (UPPER('$auto_prim_nombre'),UPPER('$auto_seg_nombre'), UPPER('$auto_prim_apellido'), UPPER('$auto_seg_apellido'),'$auto_telefono','$auto_cedula','$auto_email','1','2')";

  //$auto_usr_id = $sql = "SELECT id_empleado FROM tbl_personal where PrimerNombre = '$auto_prim_nombre' and PrimerApellido = '$auto_prim_apellido'";

  //$auto_usr_id= $sql3 = "SELECT MAX(id_empleado)FROM tbl_personal";

  $sql2 = "INSERT INTO tbl_usuarios(Usuario, NombreUsuario, Contrasena, PreguntasContestadas, CorreoElectronico, Id_Estado, Id_Rol, CreadoPor)
  VALUES (upper('$auto_usuario'), upper('$AUTO_CONC'), '$contr_encrypt', '3', '$auto_email','1','1', 'AUTOREGISTRO' )";



  if ($conn->query($sql)  === TRUE) {
   //echo "New record created successfully";
   if ($conn->query($sql2)  === TRUE) {}
     else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
  } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }

  $conn->close();

  echo '<script>alert("Usuario Registrado");window.location="login.php";</script>';
  }
              //require("registroempleados.php");

      ?>



<script>
jQuery( document ).ready(function() {
    //jQuery('.datepicker').datepicker();
  //jQuery('.selectpicker').selectpicker();
});
</script>


                  <!DOCTYPE html>
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
<body >
