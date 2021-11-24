<?php
include 'includes/funciones/sesion_asp.php';
include 'includes/templates/header.php';

$id_usuario = $_SESSION['usuario']
//include 'includes/funciones/bd_conexion.php';
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
						<li><a href="panel-aspirante.php" role="button" aria-label=""> Inicio </a></li>
						<li class=active><a href="#" role="button" aria-label=""> Información de Aspirante </a></li>
					</ol>
				</div>
			</div>

			<?php
			//Realiza la conexión
			require_once('includes/funciones/bd_conexion.php');


			$sql_asp = "SELECT * FROM aspirantes INNER JOIN usuarios ON aspirantes.asp_id_usuario = usuarios.usuario_id WHERE usuario_usuario = '$id_usuario' ";
			$asp_detalle = $conn->query($sql_asp);
			$aspirante = $asp_detalle->fetch_assoc();

			?>


			<div class="row">
				<div class="col-md-12">
					<h2> Información de Aspirante </h2>
					<hr class="red initial" />

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">CURP:</label>
								<span class="form-control sin_borde"><?php echo $aspirante['usuario_usuario'];?></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Nombre(s):</label>
								<span class="form-control sin_borde"><?php echo $aspirante['usuario_nombre'];?></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Primer apellido:</label>
								<span class="form-control sin_borde"><?php echo $aspirante['usuario_app'];?></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Segundo apellido:</label>
								<span class="form-control sin_borde"><?php echo $aspirante['usuario_apm'];?></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Fecha de Nacimiento:</label>
								<span class="form-control sin_borde"><?php echo $aspirante['asp_fnac'];?></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Sexo:</label>
								<span class="form-control sin_borde">
									<?php
									if($aspirante['asp_sexo'] == 1){
										echo 'HOMBRE';
									} else {
										echo 'MUJER';
									}?>
								</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Correo Electrónico:</label>
								<span class="form-control sin_borde"><?php echo $aspirante['asp_correo'];?></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Número de teléfono Fijo:</label>
								<span class="form-control sin_borde"><?php echo $aspirante['asp_tel'];?></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Número de Teléfono Móvil</label>
								<span class="form-control sin_borde"><?php echo $aspirante['asp_cel'];?></span>
							</div>
						</div>
					</div>

				</div>

				<!--Menú-->
				<div class="col-md-12">

				</div>
			</div>
		</div>

	</main>

	<?php include 'includes/templates/footer.php'; ?>