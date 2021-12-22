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
    $id = $_GET['id'];

    if (!filter_var($id, FILTER_VALIDATE_INT)) {
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
            <li class=active><a href="#" role="button" aria-label=""> <?php echo $especialidad2['esp_nombre']; ?> </a></li>
          </ol>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
        
        <h2> <?php echo $especialidad2['esp_nombre']; ?> </h2>
        <hr class="red initial" />


          <!-- Zoom buttons -->
          <div aria-hidden="true" class="hidden-xs font-changer internal" tabindex="-1" style="left: 49.5px;">
            <button class="inc-font font-modifier" onclick="increaseFont()">Aa+</button>
            <button class="dec-font font-modifier" onclick="decreaseFont()">Aa-</button>
          </div>
          
          <!-- News content -->
          <div class="row" id="news">
            <!-- information -->
            <div class="col-md-8 col-xs-12 pull-left" tabindex="0">
              <div class="information">
                <h3 style="text-align:justify;">Justificación de la carrera</h3>
                <p style="text-align:justify;"><?php echo $especialidad2['esp_descripcion']; ?></p>
              </div>

              <iframe frameborder="0" height="430" src="<?php echo 'pdf/'.$especialidad2['esp_id'].'.pdf'?>" width="100%"></iframe>
      
            </div>

            <!-- meta data -->
            <div class="col-md-4 col-xs-12 pull-right">

              <section class="border-box">
                <dl>
                  <img src="img/<?php echo $especialidad2['esp_id'];?>.jpg" style="max-width: 295px;"alt="">
                  <dt><br><br></dt>
                  <dt><span class="icon-font-user"></span>Autor:</dt>
                  <dd>Autor</dd>

                  <dt><span class="icon-font-calendar-o"></span>Fecha de publicación:</dt>
                  <dd>10 de enero de 2019</dd>

                  <dt><span class="icon-font-users-1"></span>Dirigido a:</dt>
                  <dd>Todo público</dd>
                </dl>
              </section>

              <div class="text-center top-buffer">
                <h5>Archivo de plan de estudios</h5>

                <a type="button" class="btn btn-primary" href="<?php echo 'pdf/'.$especialidad2['esp_id'].'-Plan.pdf'?>" download="<?php echo $especialidad2['esp_nombre']; ?>">
                  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                  Descargar plan de estudio
                </a>
              </div>
            </div>

          </div>

          <!-- Prinf tool -->
          <div class="row">
            <div class="col-md-12">
              <hr />
              <div class="print">
                <button type="button" class="btn btn-link" onclick="print()">
                  <span class="icon-printing"></span>
                  Imprime la página completa
                </button>
                <p class="small">
                  La legalidad, veracidad y la calidad de la información es estricta responsabilidad de la dependencia, entidad o empresa productiva del Estado que la proporcionó en virtud de sus atribuciones y/o facultades normativas.
                </p>
              </div>
            </div>
          </div>
        </div>

  </main>

  <?php include 'includes/templates/footer.php'; ?>