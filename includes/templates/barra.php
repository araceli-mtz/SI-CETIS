<!-- Menú de navegación -->
<div class="fixer">
    <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top" id="navegacion">
        <div class="container">
            <!--Header de Barra de navegación-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
                    <span class="sr-only">Interruptor de Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="logo" src="img/logo.svg">
                </a>
            </div>

            
            <?php 
                try {
                    //Realiza la conexión
                    require_once('includes/funciones/bd_conexion.php');
                    //Consulta especialidades
                    $sql = " SELECT esp_id, esp_nombre FROM especialidades WHERE estatus = 1 and esp_id > 0 ";
                    $resultado = $conn->query($sql);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }
            ?>

            <!--Sub Enlaces-->
            <div class="collapse navbar-collapse" id="subenlaces">
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a href="index.php" class="dropdown-toggle">
                            <span class="glyphicon glyphicon-home"></span>
                            Institución
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon icon-user"></span>
                            Aspirantes
                            <span class="caret visible-xs-inline-block"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Oferta educativa</a>
                                <ul class="dropdown-menu">
                                
                                <?php while($especialidad = $resultado->fetch_assoc() ) {?>
                                    <li><a href="especialidades.php?id=<?php echo $especialidad['esp_id'];?>"> <?php echo $especialidad['esp_nombre'];?> </a></li>
                                <?php } //while de fetch assoc ?>

                                
                                
                                </ul>
                                
                            </li>
                            <li><a href="proceso.php">Proceso de admisión</a></li>
                            <li><a href="login-aspirante.php">Acceder como aspirante</a></li>
                        </ul>
                    </li>

                    

                    <li class="dropdown">
                        <a href="login-personal.php" class="dropdown-toggle">
                            <span class="glyphicon glyphicon-log-in"></span>
                            Iniciar Sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>  
    </nav>	
</div>