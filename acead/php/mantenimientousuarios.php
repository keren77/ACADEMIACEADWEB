<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mantenimiento de Usuarios</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../assets/scss/style.css">

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
                <a class="navbar-brand" href="./"><img src="../img/logo_inicio.jpg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../img/logo_inicio.jpg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../home.php"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>

				<h3 class="menu-title">Administraci&oacute;n</h3><!-- /.menu-title -->
                   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="usuario.php">Usuarios</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Roles</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="roles.php">Roles</a></li>
                        </ul>
                         <li class="active">
                        <a href="../home.php"> <i class="menu-icon fa fa-dashboard"></i>Salir</a>
                    </li>
                    </li>


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
                            <li><a href="#" class="active">Mantenimiento</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

                <div class="content mt-3">
            <div class="animated fadeIn">
			<div class="row">
				<div class="col-md-12">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo">
                          Edicion
                      </button>
				</div>
			</div>
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Usuarios Existentes</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Descripci&oacute;n</th>
                        <th>Estado</th>
						<th>Acci&oacute;n</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>1</td>
						<td>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar">
							  Modificar
						  </button>
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Eliminar">
                              Eliminar
                          </button>
						</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>prueba</td>
                        <td>1</td>
						<td>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar">
							  Modificar
						  </button>
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Eliminar">
                              Eliminar
                          </button>
						</td>
                      </tr>
					

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
											<option value="0">Mantenimiento</option>
											<option value="1">Roles</option>
											<option value="2">Usuarios</option>
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
												<input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">1
											  </label>
											</div>
											<div class="checkbox">
											  <label for="checkbox2" class="form-check-label ">
												<input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> 2
											  </label>
											</div>
											<div class="checkbox">
											  <label for="checkbox3" class="form-check-label ">
												<input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> 3
											  </label>
											</div>
                                            <div class="checkbox">
                                              <label for="checkbox3" class="form-check-label ">
                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> 4
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
    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
	<!--<script src="assets/js/bootstrap-datetimepicker.js"></script>-->

<script>
jQuery( document ).ready(function() {
    //jQuery('.datepicker').datepicker();
	//jQuery('.selectpicker').selectpicker();
});
</script>

</body>
</html>
