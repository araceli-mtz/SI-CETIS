<?php
require_once('pruebas/vendor/autoload.php');
ini_set('date.timezone','America/Mexico_City');
$fecha = date("d-m-Y", time());
$mpdf = new \Mpdf\Mpdf([]);

$css = file_get_contents('css/style-ficha.css');
$usuario = $_POST['id_aspirante'];

//Realiza la conexión
require_once('includes/funciones/bd_conexion.php');
//Consulta
require_once('includes/funciones/consultas_asp.php');    

$plantilla = '
<body>
    <header class="clearfix">
        <table>
            <tr>
                <td style="width: 25%;" class="logo-cetis2"></td>
                <td style="width: 80%;" class="remove alineacion">
                    <div class="negrita">Subsecretaría de Educación Media Superior</div>
                    <div>Dirección General de Educación Tecnológica Industrial y de Servicios</div>
                    <div>Centro de Estudios Tecnológicos Industrial y de Servicios No. 145</div>
                    <div>"Manuel Ávila Camacho"</div>
                </td>
                <td style="width: 20%;" class="logo-cetis"></td>
            </tr>
        </table>

        <h1>COMPROBANTE DE PRE-REGISTRO</h1>
    </header>
    <main class="fondo">
        <table class="ancho">
            <tr>
                <td style="width: 50%;"><span>FECHA DE REGISTRO:</span> '. $date .'</td>
                <td style="width: 50%; text-align: right;"><span>CURP: </span>'.$aspirante['usuario_usuario'].'</td>
            </tr>
        </table>

        <h2>Datos generales</h2>
        <table class="ancho">
            <tr>
                <td class="datos">'.$aspirante['usuario_nombre'].'</td>
                <td class="datos">'.$aspirante['usuario_app'].'</td>
                <td class="datos">'.$aspirante['usuario_apm'].'</td>
            </tr>
            <tr>
                <td class="linea"><span>Nombre</span></td>
                <td class="linea"><span>Apellido Paterno</span></td>
                <td class="linea"><span>Apellido Materno</span></td>
            </tr>
        </table>

        <table class="ancho">
            <tr>
                <td class="datos">'.$aspirante['asp_correo'].'</td>
                <td class="datos">'.$aspirante['asp_tel'].'</td>
                <td class="datos">'.$aspirante['asp_cel'].'</td>
            </tr>
            <tr>
                <td class="linea"><span>Correo Electrónico</span></td>
                <td class="linea"><span>Teléfono</span></td>
                <td class="linea"><span>Celular</span></td>
            </tr>
        </table>

        <h2>Seleccion de Carrera</h2>
        <table class="ancho">
            <tr>
                <td class="datos">'.$especialidad_op1.'</td>
                <td class="datos">'.$especialidad_op2.'</td>
                <td class="datos">'.$especialidad_op3.'</td>
            </tr>
            <tr>
                <td class="linea"><span>Primera Opción</span></td>
                <td class="linea"><span>Segunda Opción</span></td>
                <td class="linea"><span>Tercera Opción</span></td>
            </tr>
        </table>

        <h2>Padre, Madre o Tutor</h2>
        <table class="ancho">
            <tr>
                <td class="datos">'.$aspirante['tutor_nombre'].'</td>
                <td class="datos">'.$aspirante['tutor_app'].'</td>
                <td class="datos">'.$aspirante['tutor_apm'].'</td>
            </tr>
            <tr>
                <td class="linea"><span>Nombre</span></td>
                <td class="linea"><span>Apellido Paterno</span></td>
                <td class="linea"><span>Apellido Materno</span></td>
            </tr>
        </table>
        <table class="ancho">
            <tr>
                <td class="datos">'.$aspirante['tutor_ocup'].'</td>
                <td class="datos">'.$aspirante['tutor_tel'].'</td>
                <td class="datos">'.$aspirante['tutor_cel'].'</td>
            </tr>
            <tr>
                <td class="linea"><span>Ocupación</span></td>
                <td class="linea"><span>Teléfono</span></td>
                <td class="linea"><span>Celular</span></td>
            </tr>
        </table>

        <h2>Dirección</h2>
        <table class="ancho">
            <tr>
                <td class="datos">'.$aspirante['asp_dir_calle'].'</td>
                <td class="datos">'.$aspirante['asp_dir_num'].'</td>
                <td class="datos">'.$aspirante['asp_dir_col'].'</td>
            </tr>
            <tr>
                <td class="linea"><span>Calle</span></td>
                <td class="linea"><span>Número</span></td>
                <td class="linea"><span>Colonia o Localidad</span></td>
            </tr>

        </table>
        <table class="ancho">
            <tr>
                <td class="datos">'.$aspirante['asp_dir_mpio'].'</td>
                <td class="datos">'.$aspirante['asp_dir_edo'].'</td>
                <td class="datos">'.$aspirante['asp_dir_cp'].'</td>
            </tr>
            <tr>
                <td class="linea"><span>Municipio</span></td>
                <td class="linea"><span>Estado</span></td>
                <td class="linea"><span>Código Postal</span></td>
            </tr>
        </table>

        <h2>Secundaria de Procedencia</h2>
        <table class="ancho">
            <tr>
                <td style="width: 30%; text-align: center;">'.$aspirante['sec_clave'].'</td>
                <td style="width: 70%; text-align: center">'.$aspirante['sec_nombre'].'</td>
            </tr>
            <tr>
                <td style="width: 30%;" class="linea"><span>Clave</span></td>
                <td style="width: 70%;" class="linea"><span>Nombre</span></td>
            </tr>
        </table>
        <table class="ancho">
            <tr>
                <td class="datos">'.$tipoesc.'</td>
                <td class="datos">'.$tiposost.'</td>
                <td class="datos">'.$aspirante['sec_dir'].'</td>
            </tr>
            <tr>
                <td class="linea"><span>Tipo</span></td>
                <td class="linea"><span>Sostenimiento</span></td>
                <td class="linea"><span>Director de la Escuela</span></td>
            </tr>
        </table>
    </main>
    <footer>
        Centro de Estudios Tecnológicos Industrial y de Servicios No. 145
        <br>
        Av. Las Palmas S/N, Colonia Jardines de Plaza Verde, Martínez de la Torre, Veracruz C.P. 93600.
    </footer>
</body>
';

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();

?>