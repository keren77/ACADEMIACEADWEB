<!--
Descripcion:     pantalla para la creacion de usuaro
-->
<?php
include '../header.php';
include '../lateral.php';
?>


<div class="content mt-3">
    <div class="card">

        <div class="card-header">
           Registro de Modalidades
        </div>
        <div class="card-body card-block">
            <form action="funciones.php" method="post" id="frmmodalidad" class
                    
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="RegUsuario" name="txtmodaliad" placeholder="Nombre de Modalidad a registrar" class="form-control" required="">
                        
                    </div>
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Crear Modalidad
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
