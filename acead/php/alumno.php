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
                            <li><a href="#">Gesti&oacute;n de Alumnos -</a></li>
                            <li><a href="#">Alumnos -</a></li>
                            <li class="active">Creaci&oacute;n de Alumnos</li>
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
                        <strong>Creaci&oacute;n de Alumno</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="alumno.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                          <div class="row form-group">
                            <div class="col-12 col-md-3">
                            <input type="text" id="AluPrimerNombre" name="alu_primer_nombre" placeholder="Primer Nombre" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos " class="form-control" style="text-transform:uppercase"></div>
                            <div class="col-12 col-md-3">
                            <input type="text" id="AluSegundoNombre" name="alu_segundo_nombre" placeholder="Segundo Nombre" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos " class="form-control" style="text-transform:uppercase"></div>
                          </div>


						  <div class="row form-group">
                            <div class="col-12 col-md-3">
                            <input type="text" id="AluPrimerApellido" name="alu_primer_apellido" placeholder="Primer Apellido" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos "class="form-control" style="text-transform:uppercase"></div>
                            <div class="col-12 col-md-3">
                            <input type="text" id="AluSegundoApellido" name="alu_segundo_apellido" placeholder="Segundo apellido" maxlength="20" minlength="3" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" title="No deje espacios en blanco ni introduzca datos númericos " class="form-control" style="text-transform:uppercase"></div>
                          </div>


                           <div class="row form-group">
                            <div class="col-12 col-md-3">
                            <input type="text" id="AluTelefono" name="alu_tel" maxlength="8" minlength="8" pattern="[0-9]{8}" placeholder="Tel&eacute;fono" class="form-control" title="Solo introduzca datos númericos ni deje espacios en blanco y minimo 8 datos "></div>
                            <div class="col-12 col-md-3">
                            <input type="text" id="AluIdentidad" name="alu_cedula" pattern="[0-9]{13}" placeholder="N&uacute;mero de Identidad (Sin guiones)" class="form-control"></div>
                          </div>


                          <div class="row form-group">

                           <div class="col-12 col-md-3">
                             <select name="cbo_alu_genero" class="form-control-gen form-control" id="selectgen">
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
                            <div class="col-12 col-md-6"><input type="email" id="AluEmail" name="alu_correo" placeholder="Correo Electronico"minlength="5" pattern="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$" class="form-control"></div>
                          </div>

						  <hr>

						   <div class="row form-group">
                          <div class="col-12 col-md-7"><textarea name="alu_direccion" id="Aludireccion" rows="3" placeholder="Direcci&oacute;n" class="form-control"></textarea></div>
                          </div>

                          <button type="submit" class="btn btn-primary btn-sm" name="botonagregar">
                            <i class="fa fa-dot-circle-o"></i> Crear Alumno</a>
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

      if (isset($_POST['cbo_alu_genero'])){
          $alu_genero = $_POST['cbo_alu_genero'];
        }else {
            echo '<script>alert("Debe seleccionar un GENERO");window.location="alumno.php";</script>';
        }


          if (isset($_POST['estado_civil'])){
              $alu_estadoc = $_POST['estado_civil'];
            }else {
                echo '<script>alert("Debe seleccionar un estado civil");window.location="alumno.php";</script>';
            }

      $alu_prim_nombre = $_POST['alu_primer_nombre'];
      $alu_seg_nombre = $_POST['alu_segundo_nombre'];
      $alu_prim_apellido = $_POST['alu_primer_apellido'];
      $alu_seg_apellido = $_POST['alu_segundo_apellido'];
      $alu_telefono = $_POST['alu_tel'];
      $alu_ced = $_POST['alu_cedula'];
      $alu_correo = $_POST['alu_correo'];
      $alu_direccion = $_POST['alu_direccion'];

  if ($mysqli->connect_error) {
     die("Connection failed: " . $mysqli->connect_error);
 }

 $sql2 = "SELECT MAX(Id_Alumno) FROM tbl_alumnos";
 $idtemp =  $mysqli->query($sql2);
 while($row = mysqli_fetch_array($idtemp)) {
 $cal = $row['MAX(Id_Alumno)']+1;
 }

 $sql = "INSERT INTO tbl_alumnos (PrimerNombre, PrimerApellido, SegundoNombre, SegundoApellido,Telefono, Cedula, email, id_estadocivil, id_genero)
 VALUES (upper('$alu_prim_nombre'),upper('$alu_prim_apellido'), upper('$alu_seg_nombre'), upper('$alu_seg_apellido'),'$alu_telefono','$alu_ced','$alu_correo', '$alu_estadoc','$alu_genero')";


 $sql3 = "INSERT INTO tbl_direcciones(Direccion, Id_alumno)
 VALUES (upper('$alu_direccion'),'$cal')";

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

 echo '<script>alert("El alumno ha sido registrado correctamente");window.location="alumno.php";</script>';
    }

        ?>

<script src="assets/js/main.js"></script>

<script type="text/javascript">
$("#AluPrimerNombre").keypress(function(tecla) {
            if(tecla.charCode == 32) return false;
        });
        $("#AluPrimerApellido").keypress(function(tecla) {
                    if(tecla.charCode == 32) return false;
                });
                $("#AluSegundoApellido").keypress(function(tecla) {
                            if(tecla.charCode == 32) return false;
                        });
                        $("#AluIdentidad").keypress(function(tecla) {
                                    if(tecla.charCode == 32) return false;
                                });

                                $("#AluTelefono").keypress(function(tecla) {
                                            if(tecla.charCode == 32) return false;
                                        });
                                        $("#AluEmail").keypress(function(tecla) {
                                                    if(tecla.charCode == 32) return false;
                                                });

</script>


</body>
</html>
