<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Screwdriver</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="description" content="Avalon Admin Theme">
	<meta name="author" content="The Red Team">

	<link href="assets/demo/avatar/logui.jpg" rel="icon">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,700' rel='stylesheet'
		type='text/css'>

	<!--[if lt IE 10]>
		<script src="assets/js/media.match.min.js"></script>
		<script src="assets/js/placeholder.min.js"></script>
	<![endif]-->

	<link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="assets/css/styles.css" type="text/css" rel="stylesheet"> <!-- Core CSS with all styles -->

	<link href="assets/plugins/jstree/dist/themes/avalon/style.min.css" type="text/css" rel="stylesheet">
	<!-- jsTree -->
	<link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet"> <!-- Code Prettifier -->
	<link href="assets/plugins/iCheck/skins/minimal/blue.css" type="text/css" rel="stylesheet"> <!-- iCheck -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
	<!--[if lt IE 9]>
		<link href="assets/css/ie8.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
		<script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- The following CSS are included as plugins and can be removed if unused-->

	<link href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">
	<!-- DateRangePicker -->
	<link href="assets/plugins/switchery/switchery.css" type="text/css" rel="stylesheet"> <!-- Switchery -->
	<link href="assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet"> <!-- FullCalendar -->
	<link href="assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet"> <!-- Calendar Plugin -->

	<link href="assets/plugins/datatables/dataTables.bootstrap.css" type="text/css" rel="stylesheet">
	<!-- Bootstrap Support for Datatables -->
	<link href="assets/plugins/datatables/dataTables.fontAwesome.css" type="text/css" rel="stylesheet">
	<!-- FontAwesome Support for Datatables -->
	<link href="assets/plugins/iCheck/skins/minimal/blue.css" type="text/css" rel="stylesheet"> 
	<link href="assets/plugins/iCheck/skins/minimal/_all.css" type="text/css" rel="stylesheet">                   <!-- Custom Checkboxes / iCheck -->
	<link href="assets/plugins/iCheck/skins/flat/_all.css" type="text/css" rel="stylesheet">
	<link href="assets/plugins/iCheck/skins/square/_all.css" type="text/css" rel="stylesheet">
	<link href="assets/plugins/gridforms/gridforms/gridforms.css" type="text/css" rel="stylesheet"> <!-- Gridforms -->
	<link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" type="text/css"
		rel="stylesheet"> <!-- Touchspin -->


</head>

<body class="infobar-offcanvas">
	
	<header id="topnav" class="navbar navbar-default navbar-fixed-top clearfix" role="banner" style="background-color:cornsilk;">

		<a id="leftmenu-trigger" class="" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
		<a class="navbar-brand"></a>
		
		<div class="yamm navbar-left navbar-collapse collapse in" >
			<ul class="nav navbar-nav" >				
				<li class="dropdown" id="widget-classicmenu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Facturacion y pagos<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Generar Factura</a></li>
						<li><a href="#">Historial de pagos</a></li>
						<li><a href="#">Estado de pagos</a></li>
						<li><a href="#">Actualizar Precios</a></li>		

					</ul>
				</li>
				<li class="dropdown" id="widget-classicmenu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion de Usuarios<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"></a></li>
						<li><a href="#">Asignar Roles/Permisos</a></li>
						<li><a href="#">Añadir Usuario</a></li>								
					</ul>
				</li>

				<li><a href="frontend/index.html" target="_blank"><strong>Reportes</strong></a></li>
				<li><a href="landing/index.html" target="_blank"><strong>Configuracion</strong></a></li>
			</ul>
		</div>

		<ul class="nav navbar-nav toolbar pull-right">
			<li class="dropdown">
				<a href="#" id="navbar-links-toggle" data-toggle="collapse"
					data-target="header>.navbar-collapse">&nbsp;</a>
			</li>

				

			<li class="dropdown">
				<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
					<span class="hidden-xs">Yuley Martinez</span>
					<img class="img-circle" src="assets/demo/avatar/avatar_06.png" alt="Dangerfield" />

				</a>
				<ul class="dropdown-menu userinfo">
					<li><a href="#"><span class="pull-left">Edit Profile</span> <i
								class="pull-right fa fa-pencil"></i></a></li>
					<li><a href="#"><span class="pull-left">Account Settings</span> <i
								class="pull-right fa fa-cogs"></i></a></li>
					<li><a href="#"><span class="pull-left">Help</span> <i
								class="pull-right fa fa-question-circle"></i></a></li>
					<li class="divider"></li>
					<li><a href="#"><span class="pull-left">Earnings</span> <i class="pull-right fa fa-money"></i></a>
					</li>
					<li><a href="#"><span class="pull-left">Statement</span> <i class="pull-right fa fa-file-o"></i></a>
					</li>
					<li><a href="#"><span class="pull-left">Withdrawals</span> <i
								class="pull-right fa fa-credit-card"></i></a></li>
					<li class="divider"></li>
					<li><a href="#"><span class="pull-left">Sign Out</span> <i
								class="pull-right fa fa-sign-out"></i></a></li>
				</ul>
			</li>

		</ul>

	</header>

	<div id="wrapper">
		<div id="layout-static">
			<div class="static-sidebar-wrapper sidebar-inverse">
				<div class="static-sidebar">
					<div class="sidebar">


						<div class="widget stay-on-collapse">
							<div class="widget-body welcome-box tabular">
								<div class="tabular-row">
									<div class="tabular-cell welcome-avatar">
										<a href="#"><img src="assets/demo/avatar/avatar_06.png" class="avatar"></a>
									</div>
									<div class="tabular-cell welcome-options">
										<span class="welcome-text">Bienvenido,</span>
										<a href="#" class="name">Yuley Martinez</a>
									</div>
								</div>
							</div>
						</div>
						<div class="widget stay-on-collapse" id="widget-sidebar">
							<span class="widget-heading">Explorar</span>
							<nav role="navigation" class="widget-body">
								<ul class="acc-menu">
									<li><a href="dashboard.php"><i class="fa fa-home"></i><span>Dashboard</span><span
												class="badge badge-dark"></span></a></li>
									<!-- <li><a href="#" id = "servicio" onclick="buscarContenido(alert('servicio'))"><i class="fa fa-wrench"></i><span>Servicio
												Tecnico</span><span class="badge badge-dark"></span></a></li> -->
									<li><a href="ingresaractivo.php"><i class="fa fa-tasks"></i><span>Gestion de inventario</span><span 
												class="badge badge-dark"></span></a></li>
									<li><a href="serviciotecnico.php" id="servicio" onclick="buscarContenido(alert('servicio'))"><i class="fa fa-wrench"></i><span>Gestion de Mantenimiento</span><span 
												class="badge badge-dark"></span></a></li>	
									<li><a href="clientes.php"><i class="fa fa-file-text"></i><span>Gestion de Clientes</span><span 
												class="badge badge-dark"></span></a></li>
									<li><a href="cotizaciones.php"><i class="fa fa-file-text"></i><span>Cotizaciones</span><span
												class="badge badge-dark"></span></a></li>
									<li><a href="Gestioncontratos.php"><i class="fa fa-calendar-o"></i><span>Gestion de Contratos</span><span 
												class="badge badge-dark"></span></a></li>
									<li><a href="facturas.php"><i class="fa fa-calendar-o"></i><span>Gestion de Facturas</span><span
												class="badge badge-dark"></span></a></li>
									<li><a href="dashboard.php"><i class="fa fa-calendar-o"></i><span>Gestion de Alquileres</span><span
												class="badge badge-dark"></span></a></li>
								</ul>
							</nav>
						</div>






					</div>


				</div>
			</div>

			<div class="static-content-wrapper">