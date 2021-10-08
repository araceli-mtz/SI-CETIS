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
						<tr>
							<td class="center">12345678</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td class="center">Lorem ipsum</td>
							<td class="center"><a href="editar-usuario.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
							<td class="center"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
						<tr>
							<td class="center">12345678</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td class="center">Lorem ipsum</td>
							<td class="center"><a href="editar-usuario.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
							<td class="center"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
						<tr>
							<td class="center">12345678</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td class="center">Lorem ipsum</td>
							<td class="center"><a href="editar-usuario.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
							<td class="center"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
						<tr>
							<td class="center">12345678</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td class="center">Lorem ipsum</td>
							<td class="center"><a href="editar-usuario.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
							<td class="center"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
						<tr>
							<td class="center">12345678</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td class="center">Lorem ipsum</td>
							<td class="center"><a href="editar-usuario.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
							<td class="center"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
						<tr>
							<td class="center">12345678</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td>Lorem ipsum</td>
							<td class="center">Lorem ipsum</td>
							<td class="center"><a href="editar-usuario.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
							<td class="center"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
						
					</tbody>
					</table>
              	</div>
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>