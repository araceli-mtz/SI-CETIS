<?php 
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra-interna.php'; ?>

    <!--Contenido-->
    <div class="container">
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="panel-administrador.php" aria-label=""> Inicio </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Gestión de Periodos </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Gestión de Periodos </h2>
				<hr class="red initial"/>

				
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>