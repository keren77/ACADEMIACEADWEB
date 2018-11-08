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
            Datos para el registro de usuarios
        </div>
        <div class="card-body card-block">
            <form action="funciones.php" method="post" id="frmusuario" class>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Seleccione Empleado para crear usuario</label></div>
                    <div class="col-12 col-md-9">
                        <!-- AQUI VA EL SELECT DINAMICO CON PHP-->
                        <select name="cbousuario" id="selectLg" class="form-control-lg form-control" required="">
                            <option value="0" disabled="" selected="">Elegir una opcion</option>

                            <?php
                            include 'conexion.php';

                                $query = "SELECT * FROM tbl_personal";
                                $result = $mysqli->query($query);
                                while($row=mysqli_fetch_array($result)){
                                   echo "<option value= '".$row['id_empleado']."'>".$row['PrimerNombre']." ".$row['PrimerApellido']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="RegUsuario" name="txtusuario" placeholder="Nombre de Usuario a registrar" class="form-control" required="">
                        <div class="input-group-addon">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="input-group">
                        <input type="password" id="RegPass" name="txtcontraseña1" placeholder="Contraseña" class="form-control" required="" required maxlength="30" minlength="5" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{5,8}$" title="La contraseña debe tener entre 5 y 8 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial.">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" id="RegPassConfirm" name="txtconfirmacontraseña" placeholder="Confirma contraseña" class="form-control" required="">
                        <div class="input-group-addon">
                            <i class="fa fa-shield"></i>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="cc-exp" class="control-label mb-1">Fecha de Vencimiento</label>
                    <input id="cc-exp" name="txtfechavencimiento" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" required="">
                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                </div>

                <div class="form-group"><label for="exampleInputEmail2" class="px-1  form-control-label">Correo</label><input type="email" id="RegEmail" name="txtcorreo" placeholder="jane.doe@example.com" required="" class="form-control"></div>

                <div class="row col-md-12">

                    <div class="col-12 col-md-12">
                        <select name="cboroles" id="SelectLm" class="form-control-md form-control" required="">
                            <option value="0" disabled="" selected="">Rol de Usuario</option>
                            <?php
                            include 'conexion.php';

                                $query = "SELECT * FROM tbl_roles";
                                $result = $mysqli->query($query);
                                while($row=mysqli_fetch_array($result)){
                                   echo "<option value= '".$row['id_rol']."'>".$row['Rol']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Crear Usuario
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
