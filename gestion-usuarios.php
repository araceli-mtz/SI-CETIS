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
					<li class=active><a href="#" role="button" aria-label=""> Gestión de Usuarios </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Gestión de Usuarios </h2>
				<hr class="red initial"/>

				<div class="row">
					<div class="col-lg-8 col-md-6 col-sm-6"></div>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<a href="registro-usuario.php"><button class="btn btn-primary btn-md active pull-right" type="button"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo</button></a>
					</div>

				</div>

				<div class="row">
					<p></p>
				</div>

				<?php 
					try {
						//Realiza la conexión
						require_once('includes/funciones/bd_conexion.php');
						//Consulta usuarios
						$sql = " SELECT * FROM usuarios WHERE estatus = 1 and usuario_id > 0 ";
						$resultado = $conn->query($sql);
					} catch (\Exception $e) {
						echo $e->getMessage();
					}
            	?>

				<div class="table-responsive">
					<table class="table table-bordered">
					<thead>
						<tr>
							<th class="center">Usuario</th>
							<th class="center">Nombre</th>
							<th class="center">Apellido Paterno</th>
							<th class="center">Apellido Materno</th>
							<th class="center">Cargo</th>
							<th colspan="2" class="center">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php while($usuario = $resultado->fetch_assoc() ) {?>
						<tr>
							<td class="center"><?php echo $usuario['usuario_usuario'];?></td>
							<td><?php echo $usuario['usuario_nombre'];?></td>
							<td><?php echo $usuario['usuario_app'];?></td>
							<td><?php echo $usuario['usuario_apm'];?></td>
							<td class="center">
								<?php if($usuario['usuario_tipousuario_id'] === '1'){ ?>
                                    ADMINISTRADOR DE SISTEMA
                                <?php } elseif ($usuario['usuario_tipousuario_id'] === '2') { ?>
                                    PERSONAL ADMINISTRATIVO
                                <?php } else { ?>
								<?php }?>
							</td>
							<td class="center"><a href="editar-usuario.php?id=<?php echo $usuario['usuario_id']; ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
							<td class="center"><button type="button" class="btn btn-primary borrar_registro" data-tipo="user" data-id="<?php echo $usuario['usuario_id']; ?>"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
						<?php } //while de fetch assoc ?>
					</tbody>
					<?php $conn->close(); //Cierra la conexión ?>
					</table>
              	</div>
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>