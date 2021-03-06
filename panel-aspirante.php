<?php 
  include 'includes/funciones/sesion_asp.php';
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
  $usuario =  $_SESSION['usuario'] ;
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra-interna-asp.php'; ?>

    <!--Contenido-->
    <div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="panel-aspirante.php"><i class="icon icon-home"></i></a></li>
					<li class=active><a href="#" role="button" aria-label=""> Inicio </a></li>
				</ol>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="time text-center">
					<br>
						<span class="glyphicon glyphicon-user"></span>
						Bienvenido(a) <strong><?php echo $_SESSION['nombre'] ?></strong>
					</span>
				</div>
			</div>
		</div>
		

		<div class="row">
			<div class="col-md-12">
				<h2> Panel Aspirante </h2>
				<hr class="red initial"/>
			</div>

			<!--Menú-->
			<div class="col-md-12">
				
				<a href="info-aspirante.php"  class="module-btn text-center">
					<div class="col-md-4 col-sm-8 well panel-0">
						<div class="module-content">
							<span class="glyphicon icon-infocircle" aria-hidden="true"></span>
							
							<h4>Paso 1</h4>
							<h5>Verifica tu información personal</h5>
						</div>
					</div>
				</a> 
				<form role="form" name="ficha-pre" id="ficha-pre" method="POST" action="ficha-preregistro.php" download="Reporte2Mayo2010">
					<div class="module-btn text-center">
						<div class="col-md-4 col-sm-8 well panel-0">
							<input type="hidden" name="id_aspirante" value="<?php echo $usuario?>"></input>
							<button type="submit">
								<div class="module-content">
									<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
									<h4>Paso 2</h4>
									<h5>Descargar comprobante de registro</h5>
								</div>
							</button>
						</div>
					</div>
				</form>

				<a href="#"  class="module-btn text-center">
					<div class="col-md-4 col-sm-8 well panel-0">
						<div class="module-content">
							<span class="icon-tramite" aria-hidden="true"></span>
							<h4>Paso 3</h4>
							<h5>Registrar pago de ficha de examen</h5>
						</div>
					</div>
				</a> 
				<a href="#"  class="module-btn text-center">
					<div class="col-md-4 col-sm-8 well panel-0">
						<div class="module-content">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
							<h4>Paso 4</h4>
							<h5>Cargar documentación de aspirante</h5>
						</div>
					</div>
				</a> 
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>