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
				$sql = " SELECT asp_id, usuario_usuario, usuario_nombre, usuario_app, usuario_apm, estatus_proceso FROM aspirantes INNER JOIN usuarios on asp_id_usuario = usuario_id where aspirantes.estatus = 1 AND aspirantes.estatus_proceso >= 1 AND aspirantes.estatus_proceso <= 2 ";
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
							<th class="center" colspan="2">ACCIONES</th>
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
								<?php
								if($aspirante['estatus_proceso'] == 1){
									?>
									<td class="center"><a href="info-aspirante-admon.php?id=<?php echo $aspirante['usuario_usuario'] ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button></a></td>
									<td class="center"><a href="#"><button type="button" class="btn btn-primary disabled"><span class="glyphicon icon-printing"></span></button></a></td>
									<td class="center" style="color: #cc6600; font-weight: bold">SIN VERIFICAR</td>
									<?php
								}else{
									?>
									<td class="center"><a href="#"><button type="button" class="btn btn btn-default"><span class="glyphicon icon-printing"></span></button></a></td>
									<td class="center"><button type="button" class="btn btn-primary actualizar_registro" data-tipo="asp" data-id="<?php echo $aspirante['asp_id']; ?>"><span class="glyphicon glyphicon glyphicon-ok"></span></button></td>
									<td class="center" style="color: #4A90E2; font-weight: bold">PAGO PENDIENTE</td>
									<?php
								}
								?>
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