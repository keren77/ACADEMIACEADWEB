<?php
  $bool=false;
  if(isset($_GET['error'])){
    $bool=true;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo_mini.jpg">

  <title>Recuperacion de Contraseña</title>
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/flag-icon.min.css">

  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->


  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  </head>
<bodyclass="text-center">

  <aside id="left-panel" class="left-panel">
<div class="col-lg-8">
      <div class="card">
          <div class="breadcrumbs">
            <div class="col-sm-8">
          </div>
      </div>
    <h3 class="text-center">Recuperacion de Contraseña</h3>

 <form action="php/recuperar.php" method="GET">
   <div class="input-group col-md-12 my-3">
                              <input  type="text" name="user" placeholder=" Ingrese su Usuario" class="" >
</div>

                            <?php if($bool){  ?>

                                    <label style="color: red;">Este usuario no ser ha encontrado</label>

                                    <?php  } ?>

                          <button type="submit" class="" >
                                              Generar Nueva Contraseña
                                          </button>

                                          <div class="text-center my-4">
                                          <button type="button" class="btn btn-link"><a href="index.php">SALIR</a></button>
                                        </div>


</form>

</body>
</html>
