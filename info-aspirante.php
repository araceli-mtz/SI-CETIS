<?php
include 'includes/funciones/sesion_asp.php';
include 'includes/templates/header.php';

$usuario = $_SESSION['usuario']
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
			require_once('includes/funciones/consultas_asp.php');

			?>

			<div class="row">
				<div class="col-md-12">
					<h2> Información de Aspirante </h2>
					<hr class="red initial" />

					<h3>Información General</h3>
					<hr class="blue">
					<div>
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

					<h3>Domicilio</h3>
					<hr class="blue">
					<div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Código Postal:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['asp_dir_cp'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Estado</label>
									<span class="form-control sin_borde"><?php echo $aspirante['asp_dir_edo'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Municipio</label>
									<span class="form-control sin_borde"><?php echo $aspirante['asp_dir_mpio'];?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Colonia o Localidad:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['asp_dir_col'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Calle</label>
									<span class="form-control sin_borde"><?php echo $aspirante['asp_dir_calle'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Número</label>
									<span class="form-control sin_borde"><?php echo $aspirante['asp_dir_num'];?></span>
								</div>
							</div>
						</div>	
					</div>
					
					<h3>Información del padre, madre o tutor</h3>
					<hr class="blue">
					<div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">CURP:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['tutor_curp'];?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Nombre(s):</label>
									<span class="form-control sin_borde"><?php echo $aspirante['tutor_nombre'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Apellido paterno:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['tutor_app'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Apellido Materno:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['tutor_apm'];?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Ocupación:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['tutor_ocup'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Número de teléfono fijo:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['tutor_tel'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Número de teléfono móvil</label>
									<span class="form-control sin_borde"><?php echo $aspirante['tutor_cel'];?></span>
								</div>
							</div>
						</div>
					</div>
					
					<h3>Secundaria de Procedencia</h3>
					<hr class="blue">
					<div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Clave de Escuela:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['sec_clave'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Nombre de Escuela:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['sec_nombre'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Tipo de Escuela:</label>
									<span class="form-control sin_borde"><?php echo $tipoesc ?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Tipo de Sostenimiento:</label>
									<span class="form-control sin_borde"><?php echo $tiposost ?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Estado:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['sec_edo'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Municipio:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['sec_mpio'];?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Localidad</label>
									<span class="form-control sin_borde"><?php echo $aspirante['sec_loc'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Director del Plantel:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['sec_dir'];?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Teléfono de Escuela:</label>
									<span class="form-control sin_borde"><?php echo $aspirante['sec_tel'];?></span>
								</div>
							</div>
						</div>
					</div>
					
					<h3>Elección de especialidad</h3>
					<hr class="blue">
					<div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Primera Opción:</label>
									<span class="form-control sin_borde"><?php echo $especialidad1['esp_nombre'] ?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Segunda Opción</label>
									<span class="form-control sin_borde"><?php echo $especialidad2['esp_nombre'] ?></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Tercera Opción</label>
									<span class="form-control sin_borde"><?php echo $especialidad3['esp_nombre'] ?></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			
		</div>

	</main>

	<?php include 'includes/templates/footer.php'; ?>