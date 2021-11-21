<?php 
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
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="panel-administrador.php" aria-label=""> Inicio </a></li>
                    <li><a href="gestion-especialidades.php" aria-label=""> Gestión de Especialidades </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Registro de Especialidad </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Registro de Especialidad </h2>
				<hr class="red initial"/>				

				<form name="crear-registro" id="crear-registro" method="POST" action="includes/modelos/modelo-esp.php" accept-charset="utf-8">
                    
                    <div class="row">
                        <!--
                             <div class="col-md-4 col-md-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="esp_id">CLAVE*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" name="esp_id" value="" id="esp_id" data-validation="required" placeholder="Clave de Especialidad" maxlength="4" minlength="4" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        -->
                       

                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="esp_nombre">Nombre*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" name="esp_nombre" value="" id="esp_nombre" data-validation="required" placeholder="Nombre de Especialidad" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="esp_descripcion">Descripción*:</label>
                                <textarea class="form-control" name="esp_descripcion" id="esp_descripcion" placeholder="Área de texto" rows="4"></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="registro" value="nuevo">
                    </div>

                    <!-- BOTONES -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1"><hr></div>
                    </div>

                    <div class="clearfix col-md-10 col-md-offset-1">
                        <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                        <div class="pull-right">
                            <a href="gestion-especialidades.php"><button type="button" class="btn btn-default" role="button" aria-label="bottón Atras">Cancelar</button></a>
                            <button type="submit" class="btn btn-primary" role="button">Registrar</button>
                        </div>
                    </div>

                </form>


			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>