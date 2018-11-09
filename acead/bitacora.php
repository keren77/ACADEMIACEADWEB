<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BITACORA CEAD-ACADEMIA</title>
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="img/logo_inicio.jpg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="img/logo_inicio.jpg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <h3 class="menu-title">Accesos</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Modificaciones</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Productos y Servicios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Registros</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Facturas</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Devoluciones</a></li>
                        </ul>
                    </li>

                   
				<h3 class="menu-title">Administraci&oacute;n</h3><!-- /.menu-title -->
                  
					
                   
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                       

                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                        </a>

                        <div class="user-menu dropdown-menu">
                                
                        </div>
                    </div>



                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

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
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Administraci&oacute;n</a></li>
							<li><a href="#" class="active">Bitacora</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

                <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bit&aacute;cora</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Accion</th>
                                                <th>Descripcion</th>
                                                <th>Usuario</th>
                                                <th>Objeto</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                                 require_once 'C:\xampp\htdocs\cead-academia\config\db.php';
                                                 $objeto_conector = new basedatos();
                                                $sql= 'select Fecha, Accion, Descripcion, Id_usuario, Id_objeto from tbl_bitacora;';
                                                
                                                try{
                                                    $objeto_conector->abrir_conexion();
                                                 $result = mysqli_query($objeto_conector->CONECTOR(), $sql);
                                                 
                                                 //aqi se llenan las filas de la tabla con los resultados obtenidos en la consulta
                                                 while ($row = mysqli_fetch_array($result)){
                                                     echo "
                                                            <tr>
                                                                    <td>".$row[0]."</td>
                                                                    <td>".$row[1]."</td>
                                                                    <td>".$row[2]."</td>
                                                                    <td>".$row[3]."</td>
                                                                    <td>".$row[4]."</td>
                                                            </tr>";                                                    
                                                 }
                                                 $objeto_conector->cerrar_connexion();
                                                    
                                                } catch(Exception $e){
                                                    echo 'Error:' .$e;
                                                
                                                }
                                                           
                                           ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->

        </div><!-- .content -->


    </div><!-- /#right-panel -->


    <!-- Right Panel -->
		<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Nuevo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
							<div class="row">
									<div class="col-sm-12">
									<div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Rol</label></div>
										<div class="col-12 col-md-9"><input type="text" id="rol" name="text-input" placeholder="Usuario" class="form-control"></div>
									  </div>
									 
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
									
									  <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Descripci&oacute;n</label></div>
										<div class="col-12 col-md-9"><input type="text" id="nombre" name="text-input" placeholder="Descripci&oacute;n" class="form-control"></div>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="row form-group">
										<div class="col col-md-3"><label for="select" class=" form-control-label">Estado del Rol</label></div>
										<div class="col-12 col-md-9">
										  <select name="select" id="estado_civil" class="form-control">
											<option value="0">Escoja una opci&oacute;n</option>
											<option value="1">Activo</option>
											<option value="2">Inactivo</option>
										  </select>
										</div>
									  </div>
									</div>
								</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

		<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Modificar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
							<div class="row">
									<div class="col-sm-12">
									<div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Rol</label></div>
										<div class="col-12 col-md-9"><input type="text" id="rol" name="text-input" disabled="" placeholder="Administraci&oacute;n" class="form-control"></div>
									  </div>
									 
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
									
									  <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Descripci&oacute;n</label></div>
										<div class="col-12 col-md-9"><input type="text" id="nombre" name="text-input" disabled="" placeholder="Descripci&oacute;n" class="form-control"></div>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="row form-group">
										<div class="col col-md-3"><label for="select" class=" form-control-label">Pantalla</label></div>
										<div class="col-12 col-md-9">
										  <select name="select" id="estado_civil" class="form-control">
											<option value="0">Facturaci&oacute;n</option>
											<option value="1">Clientes</option>
											<option value="2">Proveedores</option>
										  </select>
										</div>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="row form-group">
										<div class="col col-md-3"><label class=" form-control-label">Acceso</label></div>
										<div class="col col-md-9">
										  <div class="form-check">
											<div class="checkbox">
											  <label for="checkbox1" class="form-check-label ">
												<input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Visualizar
											  </label>
											</div>
											<div class="checkbox">
											  <label for="checkbox2" class="form-check-label ">
												<input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Guardar
											  </label>
											</div>
											<div class="checkbox">
											  <label for="checkbox3" class="form-check-label ">
												<input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Actualizar
											  </label>
											</div>
											<div class="checkbox">
											  <label for="checkbox3" class="form-check-label ">
												<input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Eliminar
											  </label>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	<!--<script src="assets/js/bootstrap-datetimepicker.js"></script>-->
	
	    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

<script>
$(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
</script>

</body>
</html>
