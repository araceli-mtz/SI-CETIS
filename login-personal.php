<?php 
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra.php'; ?>

    <!--Contenido-->
    <div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li class=active><a href="#" role="button" aria-label=""> Acceder como Usuario </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Inicio Sesión - Personal </h2>
				<hr class="red initial"/>

				<div class="col-md-6 col-md-offset-3">
				<form name="login" id="login" method="POST" action="includes/modelos/modelo-login.php" accept-charset="utf-8">
					<div class="col-md-12" >
						<div class="form-group">
							<label class="control-label" for="usuario_id">Usuario *:</label>
							<div class="input-group">
								<span class="input-group-addon icon-user" aria-hidden="true" ></span>
								<input type="text" name="usuario_id" value="" id="usuario_id" placeholder="Ingresa tu usuario" maxlength="" data-validation="required" class="form-control"/>
							</div>			
						</div>
					</div>	

					<div class="col-md-12" >
						<div class="form-group">
							<label class="control-label" for="usuario_pass"> Contraseña *:</label>
							<div class="input-group">
								<span class="input-group-addon icon-font-lock" aria-hidden="true" ></span>
								<input type="password" name="usuario_pass" value="" id="usuario_pass" placeholder="Ingresa tu contraseña" data-validation="required" class="form-control" />
							</div>
						</div>

						<input type="hidden" name="registro" value="login">
					</div>

					<!-- FORM BUTTONS -->
					<div class="row">
						<div class="col-md-8 col-md-offset-4">
							<hr>
						</div>
					</div>

					<div class="clearfix">
						<div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
						<div class="pull-right">
							<a class="btn btn-link" target="_blank" role="button" aria-label="Abrir enlace privacidad" href="#">Aviso de privacidad</a>
							<button type="submit" class="btn btn-primary" role="button" aria-label="bottón Enviar">Enviar</button>
							<!--
							<a href="panel-administrador.php">
							<button type="button" class="btn btn-primary" role="button" aria-label="bottón Enviar">Enviar</button>
							</a>
							-->
						</div>
					</div>		
				</form>
				</div>
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>