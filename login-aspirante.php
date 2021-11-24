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
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="#" aria-label=""> Aspirantes </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Acceder como Aspirante </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Inicio Sesión - Aspirante </h2>
				<hr class="red initial"/>

				<p class="text-justify">Ingresa tu CURP para comenzar tus trámites. Si tienes dudas sobre el procedimiento, puedes comunicarte con tu plantel.</p>

                <div class="col-md-6 col-md-offset-3">

                <form name="login" id="login" method="POST" action="includes/modelos/modelo-login.php" accept-charset="utf-8">
                    
                        <div class="col-md-12" >
                            <div class="form-group">
                                <label class="control-label" for="curp">CURP *:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-lock" aria-hidden="true" ></span>
                                    <input type="text" name="curp" value="" id="curp" placeholder="Ingresa tu CURP" data-validation="required" class="form-control"/>
                                </div> 
                                
                                <input type="hidden" name="registro" value="login-asp">
                            </div>
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
                                <button type="submit" class="btn btn-primary" role="button" aria-label="bottón Enviar">Enviar</button>
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