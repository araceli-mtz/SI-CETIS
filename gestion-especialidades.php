<?php 
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra-interna.php'; ?>

    <!--Contenido-->
    <div class="container">
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="index.php"><i class="icon icon-home"></i></a></li>
					<li><a href="panel-administrador.php" aria-label=""> Inicio </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Gestión de Especialidades </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Gestión de Especialidades </h2>
				<hr class="red initial"/>
				
			<table class="table table-responsive table-bordered table-striped">
				<tr>
					<th>Clave</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th colspan="2">Acciones</th>
				</tr>
				
				<tr>
					<td>01CO</td>
					<td>Contabilidad</td>
					<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dolore nihil rem nisi atque obcaecati dolor repellat similique ipsum voluptatum beatae unde, ducimus blanditiis expedita harum ea veniam est perspiciatis!</td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></td>
					<td><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
				</tr>
				<tr>
					<td>02OF</td>
					<td>Ofimática</td>
					<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum, hic placeat fugiat perferendis beatae, facilis tempora aliquam neque obcaecati animi sed a minus? Sunt eaque voluptatum laboriosam porro deleniti. Repellendus!</td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></td>
					<td><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
				</tr>
				<tr>
					<td>03EL</td>
					<td>Electricidad</td>
					<td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, suscipit commodi? Natus tempore ipsa quae eveniet reiciendis? Ratione est, eos vitae enim corporis aspernatur voluptatum dolorem at impedit provident consectetur.</td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></td>
					<td><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
				</tr>
				<tr>
					<td>04LQ</td>
					<td>Laboratorista Químico</td>
					<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, blanditiis nam sed beatae ex ipsa quos, unde temporibus in praesentium nemo, nobis id facere cumque minima nostrum nulla quis ullam.</td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></td>
					<td><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span></button></td>
				</tr>
				<tr>
					<td>05RH</td>
					<td>Recursos Humanos</td>
					<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur labore iste expedita, impedit repudiandae non veniam amet distinctio temporibus eveniet velit delectus totam quae laborum sed quam sint ea.</td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button></td>
					<td><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></td>
				</tr>
			</table>
				
			</div>
		</div>
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>