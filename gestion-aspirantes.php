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
					<li class=active><a href="#" role="button" aria-label=""> Gestión de Aspirantes </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Gestión de Aspirantes </h2>
				<hr class="red initial"/>

				<div class="table-responsive">
					<table class="table table-bordered">
					<thead>
						<tr>
							<th class="center">CURP</th>
							<th class="center">NOMBRE</th>
							<th class="center">APELLIDO PATERNO</th>
							<th class="center">APELLIDO MATERNO</th>
							<th class="center">ACCIONES</th>
							<th class="center">ESTATUS</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>MALA980928MVZRNR05</td>
							<td>ARACELI</td>
							<td>MARTINEZ</td>
							<td>LUNA</td>
							<td class="center"><a href="info-aspirante-admon.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button></a></td>
							<td class="center">REGISTRADO</td>
						</tr>
					</tbody>
					</table>
              	</div>
				
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>