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
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="#" aria-label=""> Oferta Educativa </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Especialidad </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Nombre Especialidad </h2>
				<hr class="red initial"/>

				<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel debitis quidem in! Nam quae facilis minima fugiat hic magnam consectetur ipsam tempore iste vero. Nesciunt repellendus aperiam optio suscipit blanditiis?</p>
                
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>