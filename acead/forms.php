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
            Pantalla en mantenimiento
    

        <div class="card-footer">

        </div>
    </div>
</div>

<script type="text/javascript">
$("#RegPass").keypress(function(tecla) {
            if(tecla.charCode == 32) return false;
        });
        $("#RegEmail").keypress(function(tecla) {
                    if(tecla.charCode == 32) return false;
                });
                $("#RegUsuario").keypress(function(tecla) {
                            if(tecla.charCode == 32) return false;
                        });
                        $("#RegPassConfirm").keypress(function(tecla) {
                                    if(tecla.charCode == 32) return false;
                                });                    
</script>
