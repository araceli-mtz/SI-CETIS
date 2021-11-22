<?php
    session_start();
	if(isset($_GET['cerrar_sesion'])){
		session_destroy();
	}

  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <?php include 'includes/templates/barra.php'; ?>

        <!-- Slider -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/banner.jpg" alt="Cetis 145" width="100%">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    
        <!-- Nombre del plantel -->
        <h1 class="site-title">
            Centro de Estudios Tecnológicos Industrial y de Servicios No. 145
        </h1>
    
        <div class="container">
            <section id="inicio">
                <div class="row">
                    <div class="col-md-10">
                        <h3>¿Quiénes somos?</h3>
                        <hr class="brown initial"/>
                        <p style="text-align:justify;">El Centro de Estudios Tecnológico tiene como objetivo fomentar una educación integral, contribuyendo a la articulación y flexibilidad del sistema educativo, acorde con los intereses de los estudiantes y las necesidades de desarrollo del país, la Secretaria de Educación Publica a través de la Subsecretaria de Educación e Investigación Tecnológicas, con pleno respeto al federalismo educativo.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="" alt="" width="100%">
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php include 'includes/templates/footer.php'; ?>