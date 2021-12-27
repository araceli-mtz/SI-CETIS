<?php 
  	include 'includes/funciones/sesion_admin.php';
	include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra-interna-admin.php'; ?>

    <!--Contenido-->
    <div class="container">
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="panel-administrador.php"><i class="icon icon-home"></i></a></li>
					<li><a href="panel-administrador.php" aria-label=""> Inicio </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Gestión de Periodos </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<br>
				<h2> Gestión de Periodos </h2>
				<hr class="red initial"/>

				<?php 
					try {
						//Realiza la conexión
						require_once('includes/funciones/bd_conexion.php');
						//Consulta periodo
						$sql = " SELECT * FROM periodo ORDER BY id_periodo DESC LIMIT 1 ";
						$resultado_periodo = $conn->query($sql);
          				$periodo = $resultado_periodo->fetch_assoc();
					} catch (\Exception $e) {
						echo $e->getMessage();
					}
				?>

				<form name="crear-periodo" id="editar-registro" method="POST" action="includes/modelos/modelo-periodo.php">
				
				<h4>Periodo de Pre-Registro</h4>
				<br>
				<div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="date">Fecha de Inicio*:</label>
                            <div class="input-group">
                            <span class="input-group-addon icon-font-calendar-o" aria-hidden="true" ></span>
                            <input type="text" name="fecha-inicio" id="date1" value="<?php echo $periodo['fecha_inicio'];?>" placeholder="Fecha Inicio" data-validation="required date" data-validation-format="yyyy-mm-dd" class="form-control"/>
                            </div>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="date">Fecha Fin*:</label>
                            <div class="input-group">
                            <span class="input-group-addon icon-font-calendar-o" aria-hidden="true" ></span>
                            <input type="text" name="fecha-fin" id="date2" value="<?php echo $periodo['fecha_fin'];?>" placeholder="Fecha Fin" data-validation="required date" data-validation-format="yyyy-mm-dd" class="form-control"/>
                            </div>
                        </div>
                    </div>

					<div class="col-md-4"> </div>
                </div>

                    <!-- BOTONES -->
                    <div class="row">
                        <div class="col-md-12"><hr></div>
                    </div>

                    <div class="clearfix col-md-12">
                        <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                        <div class="pull-right">
                            <a href="panel-administrador.php"><button type="button" class="btn btn-default" role="button" aria-label="bottón Atras">Cancelar</button></a>
                            <button type="submit" class="btn btn-primary" role="button" aria-label="bottón Siguiente">Actualizar</button>
                        </div>
						<input type="hidden" name="registro" value="editar">
						<input type="hidden" name="id_periodo" value="<?php echo $periodo['id_periodo'];?>">
                    </div>

                </form>
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>
<?php include 'includes/templates/footer-registro-aspirantes.php'; ?>