<!--
Descripcion:     pantalla para la creacion de usuaro
-->
<?php
include '../header.php';
include '../lateral.php';

session_start();
if(!(isset($_SESSION['id']))) {
    header("Location: index.php");
}
?>


<div class="content mt-3">
    <div class="card">

        <div class="card-header">
           Registro de Clases
        </div>
        <div class="card-body card-block">
            <form action="funciones.php" method="post" id="frmclases" class

                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="RegUsuario" name="txtclase" placeholder="Nombre de clase a registrar" class="form-control" required="">

                    </div>
                </div>

                <p>Duración Clase: <input type="time" name="eta" min="00:30"
                                 max="03:00"> <input type="submit" value="Seleccionar Hora"></p>



                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Crear Clase
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

<script type="text/javascript">
                $("#RegUsuario").keypress(function(tecla) {
                            if(tecla.charCode == 32) return false;
                        });

</script>
