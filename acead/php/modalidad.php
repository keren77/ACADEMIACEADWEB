<!--
Descripcion:     pantalla para la creacion de usuaro
-->
<?php
include '../header.php';
include '../lateral.php';
include 'conexion.php';
?>
<head>
  <title>Modalidades y Clases</title>
</head>

<div class="content mt-3">
    <div class="card">

        <div class="card-header center">
           Registro de Modalidades
        </div>
        <div class="card-body card-block">
            <form action="" method="post" id="frmmodalidad" class

                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="RegModalidad" name="reg_modalidad" placeholder="Nombre de Modalidad a registrar" class="form-control" required="">

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm" name="botonagregar">
                      <i class="fa fa-dot-circle-o"></i> Crear Modalidad</a>
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Limpiar Formulario</a>
                    </button>

                </div>

        </div>
        </div>
</form>



<div class="content mt-3">
    <div class="card">

        <div class="card-header center">
           Registro de Clases
        </div>
        <div class="card-body card-block">
            <form action="" method="post" id="frmclases" class>

                <select name="select_modalidad" id="IdModalidad" class="form-control">
                                <option value="0" disabled="" selected="">Modalidad</option>
                                <?php
                                        $query = "SELECT * FROM tbl_modalidades";
                                        $result = $mysqli->query($query);
                                        while($row=mysqli_fetch_array($result)){ ?>
                                          <option value= "<?php echo $row['Id_Modalidad']; ?>"><?php echo $row['DescripModalidad'];?></option>
                                      <?php } ?>
                            </select>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="RegClase" name="reg_clase" placeholder="Nombre de clase a registrar" class="form-control" required="">

                    </div>
                </div>

                <p>Duración Clase: <input type="time" name="dur_clase" min="00:30"
                                 max="03:00"> <input type="submit" value="Seleccionar Hora"></p>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm" name="botonguardar">
                      <i class="fa fa-dot-circle-o"></i> Crear Clase</a>
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Limpiar Formulario</a>
                    </button>

                </div>
            </form>

        </div>

        <div class="card-footer">

        </div>
    </div>
</div>


<?php

    if (isset($_POST['botonagregar'])) {
      // code...
      $reg_modalidad = $_POST['reg_modalidad'];

     $sql = "INSERT INTO tbl_modalidades (DescripModalidad)
     VALUES (upper('$reg_modalidad'))";

     if ($mysqli->query($sql) === TRUE) {
         //echo "New record created successfully";
       } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
       }
       echo '<script>alert("La Modalidad se ha registrado exitosamente");href="..acead/modalidad.php";</script>';
        $mysqli->close();
           }
            ?>


<?php
if (isset($_POST['botonguardar'])) {

if (isset($_POST['select_modalidad'])){
    $select_modalidad = $_POST['select_modalidad'];
  }else {
      echo '<script>alert("Debe seleccionar una Modalidad");window.location="modalidad.php";</script>';
  }

  $reg_clase = $_POST['reg_clase'];
  $dur_clase = $_POST['dur_clase'];


if ($mysqli->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_Clases (DescripClase, Duracion, Id_Modalidad)
VALUES (upper('$reg_clase'), '$dur_clase', '$select_modalidad')";

if ($mysqli->query($sql) === TRUE) {
 //echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $mysqli->error;
}
echo '<script>alert("La Clase se ha registrado exitosamente");href="..acead/modalidad.php";</script>';
 $mysqli->close();
    }
    ?>






<!--<div class="row form-group">
                            <div class="col-12 col-md-3">
                              <select name="select" id="idmodalidad" class="form-control">
                                <option value="0">Modalidad</option>
                                <?php

                                    $query = "SELECT * FROM tbl_modalidades";
                                    $result = $mysqli->query($query);
                                    while($row=mysqli_fetch_array($result)){
                                       echo "<option value= '".$row['Id_Modalidad']."'>".$row['DescripModalidad']."</option>";
                                    }
                                ?>

                                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Crear Clase
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Limpiar Formulario
                    </button>
            </div>
            </form>
 </form>
 </form>-->
<script type="text/javascript">
                $("#RegUsuario").keypress(function(tecla) {
                            if(tecla.charCode == 32) return false;
                        });

</script>
