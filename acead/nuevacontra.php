<head>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recuperacion de Contraseña</title>
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
        <h3 class="text-center">Recuperacion de Contraseña</h3>
        <img src="" />
                          
                        

                          <tr><td>
               <div class="input-group col-md-12 my-2">
                              <input type="password"  maxlength="30" minlength="5" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,8}$" title="La contraseña debe tener entre 5 y 8 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial."required id="contrasena" name="auto_contrasena" placeholder="Nueva Contraseña" class="form-control pwd1">

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
<input type="password" class="form-control pwd" placeholder="Confirmar Nueva Contraseña" name="auto_user_password"  value="" autocomplete="off" required maxlength="30" minlength="5" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,8}$" title="La contraseña debe tener entre 5 y 8 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial.">

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
                            <center>
                            <div class="text-center my-4">
                          <div style="width: 330px; margin: 0 auto;">
                          <button id="autoregistro_boton" type="submit" class="btn btn-lg btn-info btn-block" name="botonautoregistro">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <span href="">Restablecer Contraseña</span>
                                            </center>

                                          </button>
</div></td></tr>

                                          </table>
                        </form>
                      </div>
                    </div>
                  </div>

<!-- Right Panel -->



      ?>

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
