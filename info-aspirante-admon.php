<?php 
  include 'includes/funciones/sesion_admon.php';
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra-interna-admon.php'; ?>

    <!--Contenido-->
    <div class="container">
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="panel-administrativo.php"><i class="icon icon-home"></i></a></li>
					<li><a href="panel-administrativo.php" aria-label=""> Inicio </a></li>
					<li><a href="gestion-aspirantes.php" role="button" aria-label=""> Gestión de Aspirantes </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Información del Aspirante </a></li>
				</ol>
			</div>
		</div>

		
		
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>