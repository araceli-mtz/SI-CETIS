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

    <?php
        $id = $_GET['id'] ;

        if(!filter_var($id, FILTER_VALIDATE_INT)) {
          die("Error!");
        }
        ?>
        <?php
          //Realiza la conexión
		  require_once('includes/funciones/bd_conexion.php');

          $sql = "SELECT * FROM especialidades WHERE esp_id = $id ";
          $resultado = $conn->query($sql);
          $especialidad = $resultado->fetch_assoc();
    ?>

    <!--Contenido-->
    <div class="container">
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="panel-administrador.php" aria-label=""> Inicio </a></li>
                    <li><a href="gestion-especialidades.php" aria-label=""> Gestión de Especialidades </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Editar Especialidad </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Editar Especialidad </h2>
				<hr class="red initial"/>				

				<form action="includes/modelos/modelo-esp.php" name="editar-registro" id="editar-registro" method="POST">
                    
                    <div class="row">
                        <div class="col-md-3 col-md-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="esp_id">CLAVE*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" name="esp_id" value="<?php echo $especialidad['esp_id'];?>" id="esp_id" data-validation="required" placeholder="Clave de Especialidad" maxlength="4" minlength="4" class="form-control" disabled/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="esp_nombre">Nombre*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" name="esp_nombre" value="<?php echo $especialidad['esp_nombre'];?>" id="esp_nombre" data-validation="required" placeholder="Nombre de Especialidad" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label" for="esp_estatus">Estatus*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <select id="esp_estatus" name="esp_estatus" data-validation="required" class="form-control">
                                        <?php
                                        if($especialidad['estatus']==="1"){ ?>
                                            <option selected="true" value="1">Activa</option>
                                            <option value="0">Baja</option>
                                        <?php } elseif ($especialidad['estatus']==="0") { ?>
                                            <option value="1">Activa</option>
                                            <option selected="true" value="0">Baja</option>
                                        <?php } else { ?>
                                            <option value="2" selected="true" disabled="disabled" >-- Seleccione --</option>
                                            <option value="1">Activa</option>
                                            <option value="0">Baja</option>
                                        <?php } ?>
                                    </select>

                                    <input type="hidden" name="registro" value="editar">
                                    <input type="hidden" name="esp_id" value="<?php echo $especialidad['esp_id'];?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="esp_descripcion">Descripción*:</label>
                                <textarea class="form-control" name="esp_descripcion" id="esp_descripcion" placeholder="Área de texto" rows="4"><?php echo $especialidad['esp_descripcion'];?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- BOTONES -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1"><hr></div>
                    </div>

                    <div class="clearfix col-md-10 col-md-offset-1">
                        <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                        <div class="pull-right">
                            <a href="gestion-especialidades.php"><button type="button" class="btn btn-default" role="button" aria-label="bottón Atras">Cancelar</button></a>
                            <button type="submit" class="btn btn-primary" role="button">Actualizar</button>
                        </div>
                    </div>

                </form>


			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>