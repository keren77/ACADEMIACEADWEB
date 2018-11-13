<?php
    session_start();
    if(!(isset($_SESSION['id']))) {
        header("Location: index.php");
  }
?>

<link rel="apple-touch-icon" href="apple-icon.png">
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" href="utilidades/assets/css/normalize.css">
<link rel="stylesheet" href="utilidades/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="utilidades/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="utilidades/assets/css/themify-icons.css">
<link rel="stylesheet" href="utilidades/assets/css/flag-icon.min.css">
<link rel="stylesheet" href="utilidades/assets/css/cs-skin-elastic.css">
<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="utilidades/assets/scss/style.css">
<link href="utilidades/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../img/logo_inicio.jpg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="../index.php"><img src="../img/logo_mini.jpg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../index.php"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <h3 class="menu-title">Gesti&oacute;n de Alumnos</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Alumnos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href= "../php/alumno.php">Registro de Alumnos</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Asistencia de Alumnos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-calendar"></i><a href="../acead/php/forms.php">Asistencia 1</a></li>
                            <li><i class="fa fa-calendar"></i><a href="../acead/php/forms.php">Asistencia 2</a></li>
                        </ul>
                    </li>


                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-check-square-o"></i>Matricula</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-check-square-o"></i><a href="../acead/php/forms.php">Pantalla de Matricula</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">GESTION DE PERSONAL</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Registro de Personal</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="menu-icon fa fa-user"></i><a href= "../php/empleado.php">Creacion de Personal</a></li>
                          <li><i class="menu-icon fa fa-user"></i><a href= "../php/nuevousuario.php">Creacion de Usuario</a></li>
                        </ul>
                    </li>
                   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Docentes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="../acead/php/forms.php">Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-calendar"></i>Horas Trabajadas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="../acead/php/forms.php">Docente</a></li>
                        </ul>
                    </li>
                     <h3 class="menu-title">GESTION ACADEMICA</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Modalidad</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-book"></i><a href="../acead/php/modalidad.php">"Registro Modalidad</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Clases</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-book"></i><a href="../acead/php/clases.php">Registro Clases</a></li>
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Historial Academico</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../cliente.php">Usuarios</a></li>
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Calificaciones</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../cliente.php">Usuarios</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">GESTION DE COBROS Y PAGOS</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Cobro de Mensualidad</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../cliente.php">Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Cobro Matricula</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../cliente.php">Usuarios</a></li>
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Planilla</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../cliente.php">Usuarios</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Administraci&oacute;n</h3><!-- /.menu-title -->
                   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../usuario.php">Usuarios</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Roles</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../roles.php">Roles</a></li>
                        </ul>
                    </li>


                    <li class="active">
                        <a href="../bitacora.php"> <i class="menu-icon fa fa-tasks"></i>Bitacora</a>

                    </li>

                     <li class="active">
                        <a href="../salir.php"> <i class="menu-icon fa fa-close"></i>Salir del Sistema</a>

                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
