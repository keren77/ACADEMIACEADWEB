<?php
/*
session_start();
require_once 'class.user.php';
$user = new USER();

if($user->is_logged_in()!="")
{
  $user->redirect('recuperar.php');
}

if(isset($_POST['btn-submit']))
{
  $user1 = $_POST['NombreUsuario'];
  
  $stmt = $user->runQuery("SELECT Id_usuario,CorreoElectronico FROM tbl_usuarios WHERE NombreUsuario=:NombreUsuario LIMIT 1");
  $stmt->execute(array(":NombreUsuario"=>$user1));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);  
  if($stmt->rowCount() == 1)
  {
    $id = base64_encode($row['Iid_usuario']);
       $email = $row['CorreoElectronico']; 
    $code = md5(uniqid(rand()));
    
    $stmt = $user->runQuery("UPDATE tbl_usuarios SET token=:token WHERE CorreoElectronico=:CorreoElectronico");
    $stmt->execute(array(":token"=>$code,"CorreoElectronico"=>$email));
    
    $message=  "
           Bendiciones Estimad@ , 
           <br /><br />
           Usted ha recibido una solicitud para restablecer su contraseña del sistema de Información Iglesia Familia de la Fe, si no ha realizado esta solicitud ignore este correo.
           <br /><br />
           Haz click en el siguiente enlace para poder cambiar tu contraseña 'http://localhost/cead-academia/nuevacontra.php?id=$id&code=$code'

            <img src= 'https://scontent.ftgu2-1.fna.fbcdn.net/v/t1.0-9/32073982_1818909318167509_8631119359818858496_n.jpg?_nc_cat=0&oh=4205ea549cb56033300ae8bd6d3140f6&oe=5B9B569D' 
         
           <br /><br />
          
           ";

        
          
    $subject = "Familia de la Fe";
    
    $user->send_mail($email,$message,$subject);
    
    $msg = "<div class='alert alert-success'>
          <button class='close' data-dismiss='alert'>&times;</button>
          Se ha enviado un correo a $email.
                    De click en el enlace para generar una nueva contraseña.
          </div>";
  }
  else
  {
    $msg = "<div class='alert alert-danger'>
          <button class='close' data-dismiss='alert'>&times;</button>
          <strong>Error!</strong> Este correo no pertenece a ningun usuario. 
          </div>";
  }
}*/
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
        <h3 class="text-center">¿¡Olvido su Contraseña!?</h3>
        <img src="" />
                          <div class="card-body card-block">
                        <form action="" method="post" class="">
                          <table class="tblGrande">

                          <div class="input-icon right">
                                

                              <input  type="text" name="NombreUsuario" placeholder=" ingrese su usuario" class="form-control" required style="text-transform:uppercase;">
                            </div>
                        
                       
                          </div>
                        </td></tr>
   <tr><td>
             


               


                  
             

                            <center>
                            <div class="text-center my-4">
                          <div style="width: 330px; margin: 0 auto;">
                          <button id="autoregistro_boton" type="submit" class="btn btn-lg btn-info btn-block" name="botonautoregistro">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <a href="index.php">Generar Nueva Contraseña</a>
                                            </center>

                                          </button>
</div></td></tr>
                                  <a href="index.php" >ATRAS</a>

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