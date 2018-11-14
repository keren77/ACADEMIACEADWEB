<!doctype html>
<?php
include '../header.php';
include '../lateral.php';
include 'conexion.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Inicio</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                          <li><a href="#">Gesti&oacute;n de Personal -</a></li>
                          <li><a href="#">Registro de Personal -</a></li>
                          <li class="active">Creaci&oacute;n de Empleado</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Creaci&oacute;n de Empleado</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="empleado.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                          <div class="row form-group">
                            <div class="col-12 col-md-3">
                            <input type="text" id="EmpPrimerNombre" name="emp_primer_nombre" placeholder="Primer Nombre" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos " class="form-control" style="text-transform:uppercase"></div>
                            <div class="col-12 col-md-3">
                            <input type="text" id="EmpSegundoNombre" name="emp_segundo_nombre" placeholder="Segundo Nombre" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos " class="form-control" style="text-transform:uppercase"></div>
                          </div>


						  <div class="row form-group">
                            <div class="col-12 col-md-3">
                            <input type="text" id="EmpPrimerApellido" name="emp_primer_apellido" placeholder="Primer Apellido" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos "class="form-control" style="text-transform:uppercase"></div>
                            <div class="col-12 col-md-3">
                            <input type="text" id="EmpSegundoApellido" name="emp_segundo_apellido" placeholder="Segundo apellido" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos " class="form-control" style="text-transform:uppercase"></div>
                          </div>


                           <div class="row form-group">
                            <div class="col-12 col-md-3">
                            <input type="text" id="EmpTelefono" name="emp_tel" maxlength="8" minlength="8" pattern="[0-9]{8}" placeholder="Tel&eacute;fono" class="form-control" title="Solo introduzca datos númericos ni deje espacios en blanco y minimo 8 datos "></div>
                            <div class="col-12 col-md-3">
                            <input type="text" id="EmpIdentidad" name="emp_cedula" pattern="[0-9]{13}" placeholder="N&uacute;mero de Identidad (Sin guiones)" class="form-control"></div>
                          </div>


                          <div class="row form-group">

                           <div class="col-12 col-md-3">
                             <select name="cbo_emp_genero" class="form-control-gen form-control" id="selectgen">
                               <option value="0" disabled="" selected="">Genero</option>
                              <!-- <option value="1">Fem</option> -->
                               <?php
                               $query = "SELECT * FROM tbl_genero";
                               $result = $mysqli->query($query);
                               while($row=mysqli_fetch_array($result)){ ?>
                              <option value= "<?php echo $row['Id_genero'];?>"><?php echo $row['Descripcion'];?></option>
                            <?php } ?>
                              </select>
                           </div>
                         </div>


                           <div class="row form-group">

                            <div class="col-12 col-md-3">
                              <select name="estado_civil" id="estado_civil" class="form-control">
                                <option value="0">Estado Civil</option>
                                <?php
                                    $query = "SELECT * FROM tbl_estadocivil";
                                    $result = $mysqli->query($query);
                                    while($row=mysqli_fetch_array($result)){ ?>
                                      <option value= "<?php echo $row['Id_estadocivil'];?>"><?php echo $row['Descripcion'];?></option>
                                    <?php } ?>

                              </select>
                            </div>
                          </div>


						  <div class="row form-group">
                            <div class="col-12 col-md-6"><input type="email" id="EmpEmail" name="emp_correo" placeholder="Correo Electronico"minlength="5" pattern="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$" class="form-control"></div>
                          </div>

						  <hr>

						   <div class="row form-group">
                          <div class="col-12 col-md-7"><textarea name="Empdireccion" id="Empdireccion" rows="3" placeholder="Direcci&oacute;n" class="form-control"></textarea></div>
                          </div>

                          <button type="submit" class="btn btn-primary btn-sm" name="botonagregar">
                            <i class="fa fa-dot-circle-o"></i> Crear Empleado</a>
                          </button>

                          <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Limpiar Formulario
                          </button>
                        </form>
                      </div>
                      <div class="card-footer">
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <?php

    if (isset($_POST['botonagregar'])) {
      // code...

      if (isset($_POST['cbo_emp_genero'])){
          $emp_genero = $_POST['cbo_emp_genero'];
        }else {
            echo '<script>alert("Debe seleccionar un GENERO");window.location="empleado.php";</script>';
        }


          if (isset($_POST['estado_civil'])){
              $emp_estadoc = $_POST['estado_civil'];
            }else {
                echo '<script>alert("Debe seleccionar un estado civil");window.location="empleado.php";</script>';
            }

      $emp_prim_nombre = $_POST['emp_primer_nombre'];
      $emp_seg_nombre = $_POST['emp_segundo_nombre'];
      $emp_prim_apellido = $_POST['emp_primer_apellido'];
      $emp_seg_apellido = $_POST['emp_segundo_apellido'];
      $emp_telefono = $_POST['emp_tel'];
      $emp_ced = $_POST['emp_cedula'];
      $emp_correo = $_POST['emp_correo'];
      $emp_direccion = $_POST['Empdireccion'];

  if ($mysqli->connect_error) {
     die("Connection failed: " . $mysqli->connect_error);
 }

 $sql2 = "SELECT MAX(Id_Empleado) FROM tbl_personal";
 $idtemp =  $mysqli->query($sql2);
 while($row = mysqli_fetch_array($idtemp)) {
 $cal = $row['MAX(Id_Empleado)']+1;
 }

 $sql = "INSERT INTO tbl_personal (PrimerNombre, PrimerApellido, SegundoNombre, SegundoApellido,Telefono, Cedula, email, id_estadocivil, id_genero)
 VALUES (upper('$emp_prim_nombre'),upper('$emp_prim_apellido'), upper('$emp_seg_nombre'), upper('$emp_seg_apellido'),'$emp_telefono','$emp_ced','$emp_correo', '$emp_estadoc','$emp_genero')";


 $sql3 = "INSERT INTO tbl_direcciones(Direccion, Id_Empleado)
 VALUES (upper('$emp_direccion'),'$cal')";

 if ($mysqli->query($sql)  === TRUE) {
  //echo "New record created successfully";
}
else {
 echo "Error: " . $sql . "<br>" . $mysqli->error;
}
  //if ($mysqli->query($sql2)  === TRUE) {
  //}
  //else {
  // echo "Error: " . $sql2 . "<br>" . $mysqli->error;
 //}
 if ($mysqli->query($sql3)  === TRUE) {
}
else {
     echo "Error: " . $sql3 . "<br>" . $mysqli->error;
   }

 $mysqli->close();

 echo '<script>alert("El empleado ha sido creado");window.location="empleado.php";</script>';
    }

        ?>

<script src="assets/js/main.js"></script>

<script type="text/javascript">
$("#EmpPrimerNombre").keypress(function(tecla) {
            if(tecla.charCode == 32) return false;
        });
        $("#EmpPrimerApellido").keypress(function(tecla) {
                    if(tecla.charCode == 32) return false;
                });
                $("#EmpSegundoApellido").keypress(function(tecla) {
                            if(tecla.charCode == 32) return false;
                        });
                        $("#EmpIdentidad").keypress(function(tecla) {
                                    if(tecla.charCode == 32) return false;
                                });

                                $("#EmpTelefono").keypress(function(tecla) {
                                            if(tecla.charCode == 32) return false;
                                        });
                                        $("#EmpEmail").keypress(function(tecla) {
                                                    if(tecla.charCode == 32) return false;
                                                });

</script>


</body>
</html>
