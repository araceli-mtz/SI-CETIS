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
					<li><a href="#" aria-label=""> Aspirantes </a></li>
					<li><a href="proceso.php" aria-label=""> Proceso de Admisión </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Pre-registro de Datos </a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2> Pre-registro de Datos </h2>
				<hr class="red initial"/>
			</div>
		</div>

        <!-- Progreso de Registro -->
        <ul class="wizard-steps-extensive" id="wizard-steps">
            <li data-text="step" class="completed">
                <h5>1</h5><span>Datos Generales</span>
            </li>
            <li data-text="step" class="">
                <h5>2</h5><span>Domicilio</span>
            </li>
            <li data-text="step" class="">
                <h5>3</h5><span>Información del padre, madre o tutor</span>
            </li>
            <li data-text="step" class="">
                <h5>4</h5><span>Secundaria de procedencia</span>
            </li>
            <li data-text="step" class="">
                <h5>5</h5><span>Especialidad</span>
            </li>
            <li id="status">
                <i class="glyphicon glyphicon-ok-circle"></i>
            </li>
        </ul>

        <form action="" id="" method=""accept-charset="utf-8">
            
            <!--Info Gral-->
            <section class="tabs-step">

                <h3>Datos Generales del Aspirante</h3>
                <hr class="blue">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_curp">CURP*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="asp_curp" value="" id="asp_curp" data-validation="required" placeholder="Ingrese su CURP" maxlength="18" minlength="18" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_nombre">Nombre*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="asp_nombre" value="" id="asp_nombre" data-validation="required" placeholder="Ingrese su nombre" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_app">Apellido Paterno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="asp_app" value="" id="asp_app" data-validation="required" placeholder="Ingrese su apellido paterno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_apm">Apellido Materno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="asp_apm" value="" id="asp_apm" data-validation="required" placeholder="Ingrese su apellido materno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="date">Fecha de nacimiento*:</label>
                            <div class="input-group">
                            <span class="input-group-addon icon-font-calendar-o" aria-hidden="true" ></span>
                            <input type="text" name="date" value="" id="date" placeholder="Seleccione su fecha de nacimiento" data-validation="required date" data-validation-format="yyyy-mm-dd" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_edonac">Estado de nacimiento*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="asp_edonac" name="asp_edonac" data-validation="required" class="form-control">
                                    <option value="">Seleccione su estado</option>
                                    <option value="1">Estado 1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_mpionac">Municipio de nacimiento*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="asp_mpionac" name="asp_mpionac" data-validation="required" class="form-control">
                                    <option value="">Seleccione su municipio</option>
                                    <option value="1">Municipio 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_sexo">Sexo*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-male-female" aria-hidden="true"></span>
                                <select id="asp_sexo" name="asp_sexo" data-validation="required" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">HOMBRE</option>
                                    <option value="2">MUJER</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-4" >
                        <div class="form-group">
                            <label class="control-label" for="asp_correo">Correo electrónico*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-envelope" aria-hidden="true" ></span>
                                <input type="email" name="asp_correo" value="" id="asp_correo" placeholder="Ingrese su correo electrónico" data-validation="required email" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_tel">Número de teléfono*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                    <input type="text" name="asp_tel" value="" id="asp_tel" placeholder="Ingrese su número telefónico" maxlength="10"
                                            data-validation="required number" class="form-control"/>
                                </div>
                        </div>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-4"><hr></div>
                </div>
                <div class="clearfix">
                    <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                    <div class="pull-right">
                        <a class="btn btn-link" target="_blank" role="button" aria-label="Abrir enlace privacidad" href="#">Aviso de privacidad</a>
                        <button type="button" class="btn btn-primary" role="button" aria-label="bottón Siguiente">Siguiente</button>
                    </div>
                </div>
            </section>

            <!--Domicilio-->
            <section class="tabs-step">
                
                <h3>Domicilio actual del Aspirante</h3>
                <hr class="blue">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_cp">Codigo Postal*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="dom_cp" value="" id="dom_cp" data-validation="required" placeholder="Código Postal" maxlength="5" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_edo">Estado*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="dom_edo" name="dom_edo" data-validation="required" class="form-control">
                                    <option value="">Ingrese su código postal</option>
                                    <option value="1">Estado 1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_mpio">Municipio*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="dom_mpio" name="dom_mpio" data-validation="required" class="form-control">
                                    <option value="">Ingrese su código postal</option>
                                    <option value="1">Municipio 1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_loc">Localidad*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="dom_loc" name="dom_loc" data-validation="required" class="form-control">
                                    <option value="">Ingrese su código postal</option>
                                    <option value="1">Localidad 1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_col">Asentamiento (Colonia)*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="dom_col" value="" id="dom_col" data-validation="required" placeholder="Nombre de su colonia" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group clearfix">
                        
                        <div class="form-control-phone">
                            <label for="dom_calle">Calle<span class="form-text">*</span>:</label>
                            <input type="text" name="dom_calle" id="dom_calle" class="form-control" data-validation="required" placeholder="Calle">
                        </div>

                        <div class="form-control-lada">
                            <label for="dom_num">Número<span class="form-text">*</span>:</label>
                            <input type="text" name="dom_num" id="dom_num" class="form-control" data-validation="required" placeholder="No.">
                        </div>
                        </div>
                    </div>
                </div>

                <!-- BOTONES -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-4"><hr></div>
                </div>
                <div class="clearfix">
                    <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                    <div class="pull-right">
                        <a class="btn btn-link" target="_blank" role="button" aria-label="Abrir enlace privacidad" href="#">Aviso de privacidad</a>
                        <button type="button" class="btn btn-default" role="button" aria-label="bottón Atras" >Atras</button>
                        <button type="button" class="btn btn-primary" role="button" aria-label="bottón Siguiente">Siguiente</button>
                    </div>
                </div>
            </section>

            <!--Padre o tutor-->
            <section class="tabs-step">

                <h3>Datos del del padre, madre o tutor</h3>
                <hr class="blue">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_curp">CURP del padre, madre o tutor*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="tutor_curp" value="" id="tutor_curp" data-validation="required" placeholder="Ingrese su CURP" maxlength="18" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_nom">Nombre*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="tutor_nom" value="" id="tutor_nom" data-validation="required" placeholder="Ingrese el nombre" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_app">Apellido Paterno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="tutor_app" value="" id="tutor_app" data-validation="required" placeholder="Ingrese el apellido paterno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_apm">Apellido Materno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="tutor_apm" value="" id="tutor_apm" data-validation="required" placeholder="Ingrese el apellido materno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_ocup">Ocupación*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" name="tutor_ocup" value="" id="tutor_ocup" data-validation="required" placeholder="Ingrese la ocupación del tutor" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_tel">Número de teléfono*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                    <input type="text" name="tutor_tel" value="" id="tutor_tel" placeholder="Ingrese su número telefónico" maxlength="10"
                                            data-validation="required number" class="form-control"/>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_cel">Número de celular*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                    <input type="text" name="tutor_cel" value="" id="tutor_cel" placeholder="Ingrese su número de celular" maxlength="10"
                                            data-validation="required number" class="form-control"/>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- BOTONES -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-4"><hr></div>
                </div>
                <div class="clearfix">
                    <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                    <div class="pull-right">
                        <a class="btn btn-link" target="_blank" role="button" aria-label="Abrir enlace privacidad" href="#">Aviso de privacidad</a>
                        <button type="button" class="btn btn-default" role="button" aria-label="bottón Atras" >Atras</button>
                        <button type="button" class="btn btn-primary" role="button" aria-label="bottón Siguiente">Siguiente</button>
                    </div>
                </div>
            </section>

            <!--Secundaria procedencia-->
            <section class="tabs-step">

                <h3>Información de Secundaria de procedencia</h3>
                <hr class="blue">
                <p class="text-justify">Si proviene de una secundaria privada y el sistema no la reconoce, ingresa la clave: <b>SECPRIVADA</b>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_clave">Clave de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_clave" value="" id="sec_clave" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_nombre">Nombre de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_nombre" value="" id="sec_nombre" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tipoesc">Tipo de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_tipoesc" value="" id="sec_tipoesc" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tiposost">Tipo de Sostenimiento*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_tiposost" value="" id="sec_tiposost" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_edo">Estado*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_edo" value="" id="sec_edo" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_mpio">Municipio*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_mpio" value="" id="sec_mpio" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_loc">Localidad*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_loc" value="" id="sec_loc" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_dir">Director de Plantel*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="sec_dir" value="" id="sec_dir" data-validation="required" placeholder="Ingrese el nombre director" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tel">Teléfono de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                <input type="text" name="sec_tel" value="" id="sec_tel" placeholder="Ingrese su número telefónico" maxlength="10"
                                        data-validation="required number" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_promedio">Promedio general*:
                                <span class="glyphicon glyphicon-question-sign"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Debe estar basado en una escala general del 0 al 10"
                                    data-original-title="Debe estar basado en una escala general del 0 al 10">
                                </span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true" ></span>
                                <input type="number" name="sec_promedio" value="" id="sec_promedio" placeholder="Ingrese su promedio general" step="0.1" data-validation="required number" data-validation-allowing="range[0;10],float" class="form-control"  />
                            </div>			
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" >
                        <div class="form-group">
                            <label class="control-label" for="sec_adeudos">¿Adeudas materias?*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-user" aria-hidden="true" ></span>
                                <select id="sec_adeudos" name="sec_adeudos" data-validation="required" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    <option value="0">NO</option>
                                    <option value="1">SI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BOTONES -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-4"><hr></div>
                </div>
                <div class="clearfix">
                    <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                    <div class="pull-right">
                        <a class="btn btn-link" target="_blank" role="button" aria-label="Abrir enlace privacidad" href="#">Aviso de privacidad</a>
                        <button type="button" class="btn btn-default" role="button" aria-label="bottón Atras" >Atras</button>
                        <button type="button" class="btn btn-primary" role="button" aria-label="bottón Siguiente">Siguiente</button>
                    </div>
                </div>
            </section>

            <!--Especialidad-->
            <section class="tabs-step">

                <h3>Especialidad a elegir</h3>
                <hr class="blue">

                <div class="row">  

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="esp_op1">Primera Opción*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="esp_op1" name="esp_op1" data-validation="required" class="form-control">
                                    <option value="">Seleccione su primera opción</option>
                                    <option value="1">Opción 1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="esp_op2">Segunda Opción*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="esp_op2" name="esp_op2" data-validation="required" class="form-control">
                                    <option value="">Seleccione su segunda opción</option>
                                    <option value="1">Opción 2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="esp_op3">Tercera Opción*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="esp_op3" name="esp_op3" data-validation="required" class="form-control">
                                    <option value="">Seleccione su tercera opción</option>
                                    <option value="1">Opción 3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- BOTONES -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-4"><hr></div>
                </div>
                <div class="clearfix">
                    <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                    <div class="pull-right">
                        <a class="btn btn-link" target="_blank" role="button" aria-label="Abrir enlace privacidad" href="#">Aviso de privacidad</a>
                        <button type="button" class="btn btn-default" role="button" aria-label="bottón Atras" >Atras</button>
                        <button type="submit" class="btn btn-primary" role="button" aria-label="bottón Enviar" >Enviar</button>
                    </div>
                </div>
            </section>

        </form>

	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>
<?php include 'includes/templates/footer-registro-aspirantes.php'; ?>
