<?php 
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra.php'; ?>

    <!--Contenido-->
    <div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="#" aria-label=""> Aspirantes </a></li>
		<li><a href="proceso.php" aria-label=""> Proceso de Admisión </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Registro de Datos </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Registro de Datos </h2>
				<hr class="red initial"/>
			</div>
		</div>

	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>