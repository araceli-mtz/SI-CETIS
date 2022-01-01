<?php 
  include 'includes/funciones/sesion_admin.php';
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra-interna-admin.php'; ?>

    <!--Contenido-->
    <div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="panel-administrador.php"><i class="icon icon-home"></i></a></li>
					<li class=active><a href="#" role="button" aria-label=""> Inicio </a></li>
				</ol>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="time text-center">
					<br>
						<span class="glyphicon glyphicon-user"></span>
						Bienvenido(a) <strong><?php echo $_SESSION['nombre']?></strong>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2> Panel Administrador </h2>
				<hr class="red initial"/>
			</div>

			<!--Menú-->
			<a href="gestion-usuarios.php"  class="module-btn text-center">
				<div class="col-md-4 col-sm-8 well panel-0">
					<div class="module-content">
						<span class="icon-user" aria-hidden="true"></span>
						<br><br>
						<h5>Gestión de Usuarios</h5>
					</div>
				</div>
			</a>

			<a href="gestion-especialidades.php"  class="module-btn text-center">
				<div class="col-md-4 col-sm-8 well panel-0">
					<div class="module-content">
						<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
						<br><br>
						<h5>Gestión de especialidades</h5>
					</div>
				</div>
			</a>

			<a href="gestion-periodo.php"  class="module-btn text-center">
				<div class="col-md-4 col-sm-8 well panel-0">
					<div class="module-content">
						<span class="icon-calendar" aria-hidden="true"></span>
						<br><br>
						<h5>Gestión de Periodos</h5>
					</div>
				</div>
			</a>

			<a href="gestion-pago.php"  class="module-btn text-center">
				<div class="col-md-4 col-sm-8 well panel-0">
					<div class="module-content">
						<span class="icon-calendar" aria-hidden="true"></span>
						<br><br>
						<h5>Gestión de Pagos</h5>
					</div>
				</div>
			</a>

			<!--
			<a href="#"  class="module-btn text-center">
				<div class="col-md-4 col-sm-8 well panel-0">
					<div class="module-content">
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						<h5>Ajustes</h5>
					</div>
				</div>
			</a>
			-->
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>