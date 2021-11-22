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
                    <li><a href="gestion-usuarios.php" aria-label=""> Gestión de Usuarios </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Registro de Usuario </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Registro de Usuarios </h2>
				<hr class="red initial"/>				

				<form name="crear-registro" id="crear-registro" method="POST" action="includes/modelos/modelo-user.php">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="user_usuario">Usuario*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="user_usuario" value="" id="user_usuario" data-validation="required" placeholder="Nombre de Usuario" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="user_pass">Contraseña*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="password" name="user_pass" value="" id="user_pass" data-validation="required" placeholder="Contraseña" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="user_pass2">Confirma Contraseña*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="password" name="user_pass2" value="" id="user_pass2" data-validation="required" placeholder="Confirma contraseña" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="user_nombre">Nombre*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="user_nombre" value="" id="user_nombre" data-validation="required" placeholder="Nombre" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="user_app">Apellido Paterno*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="user_app" value="" id="user_app" data-validation="required" placeholder="Apellido Paterno" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="user_apm">Apellido Materno*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="user_apm" value="" id="user_apm" data-validation="required" placeholder="Apellido Materno" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="user_tipousuario">Tipo de Usuario*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                    <select id="user_tipousuario" name="user_tipousuario" data-validation="required" class="form-control">
                                        <option selected="true" disabled="disabled">-- Seleccione --</option>
                                        <option value="1">Administrador del Sistema</option>
                                        <option value="2">Personal Administrativo</option>
                                    </select>

                                    <input type="hidden" name="registro" value="nuevo">
                                </div>
                            </div>

                    </div>

                    <!-- BOTONES -->
                    <div class="row">
                        <div class="col-md-12"><hr></div>
                    </div>

                    <div class="clearfix col-md-12">
                        <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                        <div class="pull-right">
                            <a href="gestion-usuarios.php"><button type="button" class="btn btn-default" role="button" aria-label="bottón Atras">Cancelar</button></a>
                            <button type="submit" class="btn btn-primary" role="button" aria-label="bottón Siguiente">Registrar</button>
                        </div>
                    </div>

                </form>


			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>