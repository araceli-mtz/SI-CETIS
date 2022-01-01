<?php 
  include 'includes/funciones/sesion_admon.php';
  include 'includes/templates/header.php';
  //include 'includes/funciones/bd_conexion.php';

  $usuario = $_GET['id'];
?>

<body>
    <!-- Contenido -->
    <main class="page">
    
    <!--Barra de Navegación-->
    <?php include 'includes/templates/barra-interna-admon.php'; ?>

    <!--Contenido-->
    <div class="container">
        <!--Menú de navegación-->
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6">
				<ol class="breadcrumb" aria-label="historial de navegación">
					<li><a href="panel-administrativo.php"><i class="icon icon-home"></i></a></li>
					<li><a href="panel-administrativo.php" aria-label=""> Inicio </a></li>
					<li><a href="gestion-aspirantes.php" role="button" aria-label=""> Gestión de Aspirantes </a></li>
					<li class=active><a href="#" role="button" aria-label=""> Información del Aspirante </a></li>
				</ol>
			</div>
		</div>

        <?php
			//Realiza la conexión
			require_once('includes/funciones/bd_conexion.php');
			require_once('includes/funciones/consultas_asp.php');
		?>

		<!-- Formulario de datos -->
        <form name="" id="" method="POST" action="includes/modelos/modelo-asp.php" accept-charset="utf-8">
            
                <!--Info Gral-->
                <h3>Datos Generales del Aspirante</h3>
                <hr class="blue">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_curp">CURP*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input  disabled type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['usuario_usuario'];?>" id="asp_curp" data-validation="required" placeholder="Ingrese su CURP" maxlength="18" minlength="18" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" name="asp_nombre" value="<?php echo $aspirante['usuario_nombre'];?>" id="asp_nombre" data-validation="required" placeholder="Ingrese su nombre" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_app">Apellido Paterno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="asp_app" value="<?php echo $aspirante['usuario_app'];?>" id="asp_app" data-validation="required" placeholder="Ingrese su apellido paterno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="asp_apm">Apellido Materno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="asp_apm" value="<?php echo $aspirante['usuario_apm'];?>" id="asp_apm" data-validation="required" placeholder="Ingrese su apellido materno" maxlength="50" class="form-control"/>
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
                            <input type="text" name="date" value="<?php echo $aspirante['asp_fnac'];?>" id="date" placeholder="Seleccione su fecha de nacimiento" data-validation="required date" data-validation-format="yyyy-mm-dd" class="form-control"/>
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
                                    <?php
                                        if($aspirante['asp_sexo'] == 1){
                                            ?>
                                                <option value="1" selected>HOMBRE</option>
                                                <option value="2">MUJER</option>
                                            <?php
                                        } else {
                                            ?>
                                                <option value="1">HOMBRE</option>
                                                <option value="2" selected>MUJER</option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="form-group">
                            <label class="control-label" for="asp_correo">Correo electrónico*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-envelope" aria-hidden="true" ></span>
                                <input type="email" name="asp_correo" value="<?php echo $aspirante['asp_correo'];?>" id="asp_correo" placeholder="Ingrese su correo electrónico" data-validation="required email" class="form-control"/>
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
                                    <input type="text" name="asp_tel_fijo" value="<?php echo $aspirante['asp_tel'];?>" id="asp_tel_fijo" placeholder="Ingrese su número telefónico" maxlength="10"
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
                                    <input type="text" name="asp_tel_movil" value="<?php echo $aspirante['asp_cel'];?>" id="asp_tel_movil" placeholder="Ingrese su número telefónico" maxlength="10"
                                            data-validation="required number" class="form-control"/>
                                </div>
                        </div>
                    </div>
                </div>

            <!--Domicilio-->
             
                <h3>Domicilio actual del Aspirante</h3>
                <hr class="blue">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_cp">Codigo Postal*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" name="dom_cp" value="<?php echo $aspirante['asp_dir_cp'];?>" id="dom_cp" data-validation="required" placeholder="Código Postal" maxlength="5" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_edo">Estado*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="dom_edo" id="dom_edo" value="<?php echo $aspirante['asp_dir_edo'];?>" data-validation="required" placeholder="Ingrese su municipio" maxlength="60" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dom_mpio">Municipio*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" name="dom_mpio" id="dom_mpio" value="<?php echo $aspirante['asp_dir_mpio'];?>" data-validation="required" placeholder="Ingrese su municipio" maxlength="60" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" name="dom_col" value="<?php echo $aspirante['asp_dir_col'];?>" id="dom_col" data-validation="required" placeholder="Nombre de su colonia" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dom_calle">Calle<span class="form-text">*</span>:</label>
                            <input type="text" onkeyup="mayus(this);" name="dom_calle" id="dom_calle" value="<?php echo $aspirante['asp_dir_calle'];?>" class="form-control" data-validation="required" placeholder="Calle">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dom_num">Número<span class="form-text">*</span>:</label>
                            <input type="text" name="dom_num" id="dom_num" class="form-control" value="<?php echo $aspirante['asp_dir_num'];?>" data-validation="required" placeholder="No.">
                        </div>
                    </div>
                </div>


            <!--Padre o tutor-->
                <h3>Datos del del padre, madre o tutor</h3>
                <hr class="blue">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_curp">CURP del padre, madre o tutor*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['tutor_curp'];?>" id="tutor_curp" data-validation="required" placeholder="Ingrese su CURP" maxlength="18" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['tutor_nombre'];?>" id="tutor_nom" data-validation="required" placeholder="Ingrese el nombre" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_app">Apellido Paterno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['tutor_app'];?>" id="tutor_app" data-validation="required" placeholder="Ingrese el apellido paterno" maxlength="50" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="tutor_apm">Apellido Materno*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['tutor_apm'];?>" id="tutor_apm" data-validation="required" placeholder="Ingrese el apellido materno" maxlength="50" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['tutor_ocup'];?>" id="tutor_ocup" data-validation="required" placeholder="Ingrese la ocupación del tutor" maxlength="50" class="form-control"/>
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
                                    <input type="text" value="<?php echo $aspirante['tutor_tel'];?>" id="tutor_tel" placeholder="Ingrese su número telefónico" maxlength="10"
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
                                    <input type="text" value="<?php echo $aspirante['tutor_cel'];?>" id="tutor_cel" placeholder="Ingrese su número de celular" maxlength="10"
                                            data-validation="required number" class="form-control"/>
                                </div>
                        </div>
                    </div>
                </div>


            <!--Secundaria procedencia-->
                <h3>Información de Secundaria de procedencia</h3>
                <hr class="blue">
                <!--<p class="text-justify">Si proviene de una secundaria privada y el sistema no la reconoce, ingresa la clave: <b>SECPRIVADA</b>-->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_clave">Clave de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['sec_clave'];?>" id="sec_clave" data-validation="required" placeholder="Ingrese la clave de Secundaria" maxlength="10" class="form-control"/>
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
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['sec_nombre'];?>" id="sec_nombre" data-validation="required" placeholder="Ingrese la clave de Secundaria" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tipoesc">Tipo de Escuela*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <select id="sec_tipoesc" data-validation="required" class="form-control">
                                    <?php
                                     if($aspirante['sec_tipoesc']==1){
                                        ?>
                                        <option value="1">SECUNDARIA GENERAL</option>
                                        <?php
                                     }else if($aspirante['sec_tipoesc']==2){
                                        ?>
                                        <option value="2">SECUNDARIA TÉCNICA</option>
                                        <?php
                                     }else if($aspirante['sec_tipoesc']==3){
                                        ?>
                                        <option value="3">TELESECUNDARIA</option>
                                        <?php
                                     }else if($aspirante['sec_tipoesc']==4){
                                        ?>
                                        <option value="4">PARTICULAR</option>
                                        <?php
                                     }else{
                                        ?>
                                        <option value="5">OTRO</option>
                                        <?php
                                     }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tiposost">Tipo de Sostenimiento*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-paperclip" aria-hidden="true"></span>
                                <select id="sec_tiposost" data-validation="required" class="form-control">
                                    <?php
                                     if($aspirante['sec_tiposost']==1){
                                        ?>
                                        <option value="1">FEDERAL</option>
                                        <?php
                                     }else if($aspirante['sec_tiposost']==2){
                                        ?>
                                        <option value="2">ESTATAL</option>
                                        <?php
                                     }else{
                                        ?>
                                        <option value="3">PARTICULAR</option>
                                        <?php
                                     }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_edo">Estado*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" id="sec_edo" value="<?php echo $aspirante['sec_edo'];?>" data-validation="required" placeholder="Ingrese su municipio" maxlength="60" class="form-control"/>
                            </div>
                        
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_mpio">Municipio*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" id="sec_mpio" value="<?php echo $aspirante['sec_mpio'];?>" data-validation="required" placeholder="Ingrese su municipio" maxlength="60" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_loc">Localidad*:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['sec_loc'];?>" id="sec_loc" data-validation="required" placeholder="Ingrese la clave de Secundaria" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_dir">Director de Plantel:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-user" aria-hidden="true"></span>
                                <input type="text" onkeyup="mayus(this);" value="<?php echo $aspirante['sec_dir'];?>" id="sec_dir" placeholder="Ingrese el nombre director" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="sec_tel">Teléfono de Escuela:</label>
                            <div class="input-group">
                                <span class="input-group-addon icon-font-phone" aria-hidden="true"></span>
                                <input type="text" value="<?php echo $aspirante['sec_tel'];?>" id="sec_tel" placeholder="Ingrese su número telefónico" maxlength="10" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>


            <!--Especialidad-->
                <h3>Especialidad a Elegir</h3>
                <hr class="blue">

                <div class="row">  
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="esp_op1">Primera Opción*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="esp_op1" data-validation="required" class="form-control">
                                    <option value="<?php echo $asp_op1 ?>"><?php echo $especialidad1['esp_nombre'] ?></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="esp_op2">Segunda Opción*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="esp_op2" data-validation="required" class="form-control">
                                    <option value="<?php echo $asp_op2 ?>"><?php echo $especialidad2['esp_nombre'] ?></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="esp_op3">Tercera Opción*:</label>
                                <div class="input-group">
                                <span class="input-group-addon icon-font-location-arrow" aria-hidden="true"></span>
                                <select id="esp_op3" data-validation="required" class="form-control">
                                    <option value="<?php echo $asp_op3 ?>"><?php echo $especialidad3['esp_nombre'] ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <input type="hidden" name="registro" value="actualizar">
                    <input type="hidden" name="asp_curp" value="<?php echo $aspirante['usuario_usuario'];?>">
                    <input type="hidden" name="asp_id" value="<?php echo $aspirante['asp_id'];?>">
                
                </div>


                <!-- BOTONES -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-4"><hr></div>
                </div>
                <div class="clearfix">
                    <div class="pull-left text-muted text-vertical-align-button"></div>
                    <div class="pull-right">
                        <a href="gestion-aspirantes.php"><button type="button" class="btn btn-default" role="button" aria-label="bottón Atras" >Atras</button></a>
                        <button type="submit" class="btn btn-primary" role="button" aria-label="bottón Enviar">Verificar y Guardar</button>
                    </div>
                </div>
        </form>
		
	</div>
    
    </main>

<?php include 'includes/templates/footer.php'; ?>
<?php include 'includes/templates/footer-registro-aspirantes.php'; ?>