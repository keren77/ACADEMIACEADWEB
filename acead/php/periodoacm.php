<!--
Descripcion:     pantalla para la creacion de usuaro
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<script type="text/javascript" src="custom_table_edit.js"></script>

<?php
include '../header.php';
include '../lateral.php';
?>


<div class="content mt-3">
    <div class="card">

        <div class="card-header">
           Periodo Academico
        <div class="card-body card-block">
            <form method="post" id="frmperiodo" class
                    
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="EmpPeriodoAcm" name="emp_periodo_acm" placeholder="Periodo Academico"form-control" required="">
                        
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm" name="botonagregar">
                        <i class="fa fa-dot-circle-o"></i> Crear Periodo
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Limpiar Formulario
                    </button>

                </div>
            </form>

        </div>

        <div class="card-footer">

        </div>
    </div>
</div>

    <?php
    include 'conexion.php';

    if (isset($_POST['botonagregar'])) {
      // code...
      $emp_periodo_acm = $_POST['emp_periodo_acm'];


  if ($mysqli->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 $sql = "INSERT INTO tbl_periodoacademico(DescripPeriodo)
 VALUES (upper('$emp_periodo_acm'))";

 if ($mysqli->query($sql) === TRUE) {
     //echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $mysqli->error;
 }

echo '<script>alert("Periodo Academico Registrado");href="..acead/home.php";</script>';
 $mysqli->close();
    }
        ?>            
</script>


<table id="data_table" class="table table-striped">
<thead>
<tr>
<th>Id</th>
<th>Descripcion</th>
</tr>
</thead>
<tbody>
<?php
include 'conexion.php';
$sql_query = "SELECT Id_PeriodoAcm, DescripPeriodo FROM tbl_periodoacademico LIMIT 10";
$result = $mysqli->query($query);;
while( $tbl_periodoacademico = mysqli_fetch_assoc($resultset)){
?>
<tr id="<?php echo $tbl_periodoacademico ['Id_PeriodoAcm']; ?>">
<td><?php echo $tbl_periodoacademico ['Id_PeriodoAcm']; ?></td>
<td><?php echo $tbl_periodoacademico ['DescripPeriodo']; 

} ?>
</tr>
</tbody>
</table>
