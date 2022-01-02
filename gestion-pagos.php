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
                        <li class=active><a href="#" role="button" aria-label=""> Gestión de Pagos </a></li>
                    </ol>
                </div>
            </div>

            
            <?php
                //Realiza la conexión
		        require_once('includes/funciones/bd_conexion.php');

                $sql = "SELECT * FROM pagos WHERE id_pago = 1 ";
                $resultado = $conn->query($sql);
                $pago = $resultado->fetch_assoc();

                ini_set('date.timezone','America/Mexico_City');
                $anio_Actual = date("Y", time());
                $siguiente_Anio = $anio_Actual+1;

                $fechaActual = date("Y-m-d", time());
            ?>

            <div class="row">
                <div class="col-md-12">
                    <h2> Registro de Datos de Pago </h2>
                    <hr class="red initial" />

                    <form name="actualizar_registro" id="editar-registro" method="POST" action="includes/modelos/modelo-pagos.php">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label" for="">Concepto de pago*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-money" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="pago_concepto" value="<?php echo $pago['pago_concepto'];?>" id="concepto_pago" class="form-control chosen-select" data-validation="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="pago_importe">Importe del concepto*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-font-dollar" aria-hidden="true"></span>
                                    <input type="number" name="pago_importe" value="<?php echo $pago['pago_importe'];?>" id="" data-validation="required number" data-validation-allowing="range[1;10000],float" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="">Banco*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-infocircle" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="pago_banco" value="<?php echo $pago['pago_banco'];?>" id="" data-validation="required" placeholder="" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="">No. de Cuenta*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-infocircle" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="pago_cuenta" value="<?php echo $pago['pago_cuenta'];?>" id="" data-validation="required" placeholder="" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="">Cuenta CLABE:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-infocircle" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" name="pago_clabe" value="<?php echo $pago['pago_clabe'];?>" id="" data-validation="required" placeholder="" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="">Lugar*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-infocircle" aria-hidden="true"></span>
                                    <input type="text" name="pago_lugar" onkeyup="mayus(this);" value="<?php echo $pago['pago_lugar'];?>" id="" data-validation="required" placeholder="" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="">Ciclo Escolar*:</label>
                                <div class="input-group">
                                    <span class="input-group-addon icon-infocircle" aria-hidden="true"></span>
                                    <input type="text" onkeyup="mayus(this);" value="<?php echo $anio_Actual.'-'.$siguiente_Anio?>" id="" data-validation="required" placeholder="" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOTONES -->
                    <div class="row">
                        <div class="col-md-12"><hr></div>
                    </div>

                    <input type="hidden" name="registro" value="editar">

                    <div class="clearfix col-md-12">
                        <div class="pull-left text-muted text-vertical-align-button">* Campos obligatorios</div>
                        <div class="pull-right">
                            <a href="panel-administrador.php"><button type="button" class="btn btn-default" role="button" aria-label="bottón Atras">Cancelar</button></a>
                            <button type="submit" class="btn btn-primary" role="button" aria-label="bottón Siguiente">Actualizar</button>
                            
                        </div>
                    </div>
                
                    </form>
                </div>

            </div>

    </main>

    <?php include 'includes/templates/footer.php'; ?>