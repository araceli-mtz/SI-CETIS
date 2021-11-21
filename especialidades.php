<?php 
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra.php'; ?>

	<?php
        $id = $_GET['id'] ;

        if(!filter_var($id, FILTER_VALIDATE_INT)) {
          die("Error!");
        }
        ?>
        <?php
		  //Realiza la conexión
		  require_once('includes/funciones/bd_conexion.php');

          $sql_esp = "SELECT * FROM especialidades WHERE esp_id = $id ";
          $esp_detalle = $conn->query($sql_esp);
          $especialidad2 = $esp_detalle->fetch_assoc();
    ?>

    <!--Contenido-->
    <div class="container">
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="#" aria-label=""> Oferta Educativa </a></li>
					<li class=active><a href="#" role="button" aria-label=""> <?php echo $especialidad2['esp_nombre'];?> </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> <?php echo $especialidad2['esp_nombre'];?> </h2>
				<hr class="red initial"/>

				<p class="text-justify"><?php echo $especialidad2['esp_descripcion'];?></p>
                
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>