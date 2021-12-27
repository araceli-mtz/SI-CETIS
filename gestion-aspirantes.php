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

		<?php 
			try {
				//Realiza la conexión
				require_once('includes/funciones/bd_conexion.php');
				//Consulta especialidades
				$sql = " SELECT asp_id, usuario_usuario, usuario_nombre, usuario_app, usuario_apm FROM aspirantes INNER JOIN usuarios on asp_id_usuario = usuario_id where aspirantes.estatus = 1 ";
				$resultado_asp = $conn->query($sql);
			} catch (\Exception $e) {
				echo $e->getMessage();
			}
		?>

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
					<?php while($aspirante = $resultado_asp->fetch_assoc() ) {?>
							<tr>
								<td><?php echo $aspirante['usuario_usuario'] ?></td>
								<td><?php echo $aspirante['usuario_nombre'] ?></td>
								<td><?php echo $aspirante['usuario_app'] ?></td>
								<td><?php echo $aspirante['usuario_apm'] ?></td>
								<td class="center"><a href="info-aspirante-admon.php?id=<?php echo $aspirante['asp_id'] ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button></a></td>
								<td class="center">REGISTRADO</td>
							</tr>
							<?php } //while de fetch assoc ?>
					</tbody>
						<?php $conn->close(); //Cierra la conexión ?>
					</table>
              	</div>
				
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>