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
					<li class=active><a href="#" role="button" aria-label=""> Proceso de Admisión </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<br>
				<div class="mensajes" id="alertas">
					<div class="alert alert-warning">
        				<strong>Advertencia:</strong><br>
        				El registro es personal e intransferible.<br>
        				Este registro no garantiza la permanencia del aspirante en el plantel hasta ser validado por la institución.
    				</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Proceso de Admisión </h2>
				<hr class="red initial"/>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1 well">
				<h3> <span class="icon-font-files"> Requisitos del registro </span></h3>
				<hr class="blue"/>
				<ol class="text-justify">
					<li>
						Debes tener tu CURP a la mano para poder realizar el registro. Si no la tienes puedes consultarla en el siguiente enlace:
						<br>
						<a type="button" class="btn btn-link" href="https://www.gob.mx/curp/" target="_blank">Consultar CURP</a>
						<br>
					</li>
				</ol>

				<h3> <span class="icon-font-check"> Proceso de Registro </span></h3>
				<hr class="purple"/>
				<ol class="text-justify">
					<li>
						Realizar el pre-registro desde la plataforma en el siguiente enlace:
						<br>
						<a type="button" class="btn btn-link" href="registro-aspirante.php" target="_blank">Registro en línea</a>
					</li>
					<li>
						Una vez has sido registrado, inicia tu sesión para subir tus documentos desde el menú <strong>Aspirantes -> Acceder como aspirante</strong>.
						<br><br>
					</li>
					<li>
						Una vez has cumplido con la documentación requerida podrás descargar tu ficha de examen dentro de la plataforma. 
					</li>
				</ol>
				<br>
				
				
				<div class="alert alert-info">
					<strong>Importante:</strong><br>
					En caso de presentar un error en el registro, los cambios se realizan al momento de tener su registro validado en el plantel.
				</div>
			</div>
    	</div>

	
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>