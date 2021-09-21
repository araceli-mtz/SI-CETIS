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
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li class=active><a href="#" role="button" aria-label=""> Inicio </a></li>
				</ol>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="time text-center">
					<br>
						<span class="glyphicon glyphicon-user"></span>
						Bienvenido(a) <strong>USUARIO</strong>
					</span>
				</div>
			</div>
		</div>
		

		<div class="row">
			<div class="col-md-12">
				<h2> Panel Aspirante </h2>
				<hr class="red initial"/>
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>