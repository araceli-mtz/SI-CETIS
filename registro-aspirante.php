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

        <!-- Formulario de datos -->
        <form name="crear-registro" id="crear-registro" method="POST" action="includes/modelos/modelo-asp.php" accept-charset="utf-8">
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
                                <input type="text" onkeyup="mayus(this);" name="asp_curp" value="" id="asp_curp" data-validation="required" placeholder="Ingrese su CURP" maxlength="18" minlength="18" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" name="asp_nombre" value="" id="asp_nombre" data-validation="required" placeholder="Ingrese su nombre" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_app">Apellido Paterno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="asp_app" value="" id="asp_app" data-validation="required" placeholder="Ingrese su apellido paterno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_apm">Apellido Materno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="asp_apm" value="" id="asp_apm" data-validation="required" placeholder="Ingrese su apellido materno" maxlength="50" class="form-control"/>
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
                            <label class="control-label" for="asp_sexo">Sexo*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-male-female" aria-hidden="true"></span>
                                <select id="asp_sexo" name="asp_sexo" data-validation="required" class="form-control">
                                    <option selected="true" value="" disabled="disabled">-- Seleccione --</option>
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
                </div>
                

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_tel_fijo">Número de teléfono fijo*:
                                <span class="glyphicon glyphicon-question-sign"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="En caso de no contar con teléfono fijo, deberás anotar el de un familiar, vecino o conocido."
                                    data-original-title="En caso de no contar con teléfono fijo, deberás anotar el de un familiar, vecino o conocido.">
                                </span>
                            </label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                    <input type="text" name="asp_tel_fijo" value="" id="asp_tel_fijo" placeholder="Ingrese su número telefónico" maxlength="10"
                                            data-validation="required number" class="form-control"/>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_tel_movil">Número de teléfono móvil*:
                                <span class="glyphicon glyphicon-question-sign"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="En caso de no contar con teléfono móvil, deberás registrar el del tutor."
                                    data-original-title="En caso de no contar con teléfono móvil, deberás registrar el del tutor.">
                                </span>
                            </label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                    <input type="text" name="asp_tel_movil" value="" id="asp_tel_movil" placeholder="Ingrese su número telefónico" maxlength="10"
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
                                    <option value="">Selecciona un estado</option>
                                    <option value="1">Aguascalientes</option>
                                    <option value="2">Baja California</option>
                                    <option value="3">Baja California Sur</option>
                                    <option value="4">Campeche</option>
                                    <option value="5">Coahuila de Zaragoza</option>
                                    <option value="6">Colima</option>
                                    <option value="7">Chiapas</option>
                                    <option value="8">Chihuahua</option>
                                    <option value="9">Distrito Federal</option>
                                    <option value="10">Durango</option>
                                    <option value="11">Guanajuato</option>
                                    <option value="12">Guerrero</option>
                                    <option value="13">Hidalgo</option>
                                    <option value="14">Jalisco</option>
                                    <option value="15">México</option>
                                    <option value="16">Michoacán de Ocampo</option>
                                    <option value="17">Morelos</option>
                                    <option value="18">Nayarit</option>
                                    <option value="19">Nuevo León</option>
                                    <option value="20">Oaxaca</option>
                                    <option value="21">Puebla</option>
                                    <option value="22">Querétaro</op    tion>
                                    <option value="23">Quintana Roo</option>
                                    <option value="24">San Luis Potosí</option>
                                    <option value="25">Sinaloa</option>
                                    <option value="26">Sonora</option>
                                    <option value="27">Tabasco</option>
                                    <option value="28">Tamaulipas</option>
                                    <option value="29">Tlaxcala</option>
                                    <option value="30">Veracruz de Ignacio de la Llave</option>
                                    <option value="31">Yucatán</option>
                                    <option value="32">Zacatecas</option>
                                    <option value="33">Otro</option>       
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
                            <label class="control-label" for="dom_col">Colonia o Localidad*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="dom_col" value="" id="dom_col" data-validation="required" placeholder="Nombre de su colonia" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dom_calle">Calle<span class="form-text">*</span>:</label>
                            <input type="text" onkeyup="mayus(this);" name="dom_calle" id="dom_calle" class="form-control" data-validation="required" placeholder="Calle">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dom_num">Número<span class="form-text">*</span>:</label>
                            <input type="text" name="dom_num" id="dom_num" class="form-control" data-validation="required" placeholder="No.">
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
                                <input type="text" onkeyup="mayus(this);" name="tutor_curp" value="" id="tutor_curp" data-validation="required" placeholder="Ingrese su CURP" maxlength="18" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" name="tutor_nom" value="" id="tutor_nom" data-validation="required" placeholder="Ingrese el nombre" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_app">Apellido Paterno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="tutor_app" value="" id="tutor_app" data-validation="required" placeholder="Ingrese el apellido paterno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_apm">Apellido Materno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="tutor_apm" value="" id="tutor_apm" data-validation="required" placeholder="Ingrese el apellido materno" maxlength="50" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" name="tutor_ocup" value="" id="tutor_ocup" data-validation="required" placeholder="Ingrese la ocupación del tutor" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_tel">Número de teléfono fijo*:
                                <span class="glyphicon glyphicon-question-sign"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="En caso de no contar con teléfono fijo, deberás anotar el de un familiar, vecino o conocido."
                                    data-original-title="En caso de no contar con teléfono fijo, deberás anotar el de un familiar, vecino o conocido.">
                                </span>
                            </label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                    <input type="text" name="tutor_tel" value="" id="tutor_tel" placeholder="Ingrese su número telefónico" maxlength="10"
                                            data-validation="required number" class="form-control"/>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_cel">Número de teléfono móvil*:
                                <span class="glyphicon glyphicon-question-sign"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="En caso de no contar con teléfono móvil, deberás anotar el de un familiar, vecino o conocido."
                                    data-original-title="En caso de no contar con teléfono móvil, deberás anotar el de un familiar, vecino o conocido.">
                                </span>
                            </label>
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
                        <button type="button" class="btn btn-primary" role="button" aria-label="bottón Siguien te">Siguiente</button>
                    </div>
                </div>
            </section>

            <!--Secundaria procedencia-->
            <section class="tabs-step">
                <h3>Información de Secundaria de procedencia</h3>
                <hr class="blue">
                <!--<p class="text-justify">Si proviene de una secundaria privada y el sistema no la reconoce, ingresa la clave: <b>SECPRIVADA</b>-->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_clave">Clave de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="sec_clave" value="" id="sec_clave" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" name="sec_nombre" value="" id="sec_nombre" data-validation="required" placeholder="Ingrese la clave de Secundaria" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tipoesc">Tipo de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <!--
                                <input type="text" onkeyup="mayus(this);" name="sec_tipoesc" value="" id="sec_tipoesc" data-validation="required" placeholder="Ingrese la clave de Secundaria" class="form-control"/>
                                -->
                                <select name="sec_tipoesc" id="sec_tipoesc" data-validation="required" class="form-control">
                                    <option selected="true" value="" disabled="disabled">-- Seleccione --</option>
                                    <option value="1">SECUNDARIA GENERAL</option>
                                    <option value="2">SECUNDARIA TÉCNICA</option>
                                    <option value="3">TELESECUNDARIA</option>
                                    <option value="4">PARTICULAR</option>
                                    <option value="5">OTRO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tiposost">Tipo de Sostenimiento*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <!--
                                <input type="text" onkeyup="mayus(this);" name="sec_tiposost" value="" id="sec_tiposost" data-validation="required" placeholder="Ingrese la clave de Secundaria" class="form-control"/>
                                -->
                                <select name="sec_tiposost"id="sec_tiposost" data-validation="required" class="form-control">
                                    <option selected="true" value="" disabled="disabled">-- Seleccione --</option>
                                    <option value="1">FEDERAL</option>
                                    <option value="2">ESTATAL</option>
                                    <option value="3">PARTICULAR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_edo">Estado*:</label>
                            <select name="sec_edo" id="sec_edo" data-validation="required" class="form-control">
                                <option value="">Selecciona un estado</option>
                                <option value="1">Aguascalientes</option>
                                <option value="2">Baja California</option>
                                <option value="3">Baja California Sur</option>
                                <option value="4">Campeche</option>
                                <option value="5">Coahuila de Zaragoza</option>
                                <option value="6">Colima</option>
                                <option value="7">Chiapas</option>
                                <option value="8">Chihuahua</option>
                                <option value="9">Distrito Federal</option>
                                <option value="10">Durango</option>
                                <option value="11">Guanajuato</option>
                                <option value="12">Guerrero</option>
                                <option value="13">Hidalgo</option>
                                <option value="14">Jalisco</option>
                                <option value="15">México</option>
                                <option value="16">Michoacán de Ocampo</option>
                                <option value="17">Morelos</option>
                                <option value="18">Nayarit</option>
                                <option value="19">Nuevo León</option>
                                <option value="20">Oaxaca</option>
                                <option value="21">Puebla</option>
                                <option value="22">Querétaro</op    tion>
                                <option value="23">Quintana Roo</option>
                                <option value="24">San Luis Potosí</option>
                                <option value="25">Sinaloa</option>
                                <option value="26">Sonora</option>
                                <option value="27">Tabasco</option>
                                <option value="28">Tamaulipas</option>
                                <option value="29">Tlaxcala</option>
                                <option value="30">Veracruz de Ignacio de la Llave</option>
                                <option value="31">Yucatán</option>
                                <option value="32">Zacatecas</option>
                                <option value="33">Otro</option>       
                            </select>
                        
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_mpio">Municipio*:</label>
                            <select name="sec_mpio" id="sec_mpio" data-validation="required" class="form-control">
                                <option value="">Selecciona un municipio</option>
                                <option value="1">Martínez de la Torre</option>       
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_loc">Localidad*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="sec_loc" value="" id="sec_loc" data-validation="required" placeholder="Ingrese la clave de Secundaria" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_dir">Director de Plantel:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="sec_dir" value="" id="sec_dir" placeholder="Ingrese el nombre director" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tel">Teléfono de Escuela:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                <input type="text" name="sec_tel" value="" id="sec_tel" placeholder="Ingrese su número telefónico" maxlength="10" class="form-control"/>
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
                        <button type="button" class="btn btn-primary" role="button" aria-label="bottón Siguien te">Siguiente</button>
                    </div>
                </div>
            </section>

            <!--Especialidad-->
            <section class="tabs-step">
                <h3>Especialidad a Elegir</h3>
                <hr class="blue">

                <div class="row">  
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="esp_op1">Primera Opción*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="esp_op1" name="esp_op1" data-validation="required" class="form-control">
                                    <option value="">Seleccione su primera opción</option>
                                    <option value="1">ADMINISTRACIÓN DE RECURSOS HUMANOS</option>
                                    <option value="2">CONTABILIDAD</option>
                                    <option value="3">ELECTRICIDAD</option>
                                    <option value="4">LABORATORISTA QUÍMICO</option>
                                    <option value="5">OFIMÁTICA</option>
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
                                    <option value="1">ADMINISTRACIÓN DE RECURSOS HUMANOS</option>
                                    <option value="2">CONTABILIDAD</option>
                                    <option value="3">ELECTRICIDAD</option>
                                    <option value="4">LABORATORISTA QUÍMICO</option>
                                    <option value="5">OFIMÁTICA</option>
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
                                    <option value="1">ADMINISTRACIÓN DE RECURSOS HUMANOS</option>
                                    <option value="2">CONTABILIDAD</option>
                                    <option value="3">ELECTRICIDAD</option>
                                    <option value="4">LABORATORISTA QUÍMICO</option>
                                    <option value="5">OFIMÁTICA</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="registro" value="nuevo">
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
