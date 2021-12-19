<?php
require_once('pruebas/vendor/autoload.php');
ini_set('date.timezone','America/Mexico_City');
$fecha = date("d-m-Y", time());
$mpdf = new \Mpdf\Mpdf([]);

$css = file_get_contents('css/style-ficha.css');

//plantilla
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
                <td style="width: 50%;"><span>FECHA DE REGISTRO:</span> 12/12/2021</td>
                <td style="width: 50%; text-align: right;"><span>CURP: </span>MALA980928MVZRNR05</td>
            </tr>
        </table>

        <h2>Datos generales</h2>
        <table class="ancho">
            <tr>
                <td class="datos">ARACELI</td>
                <td class="datos">MARTINEZ</td>
                <td class="datos">LUNA</td>
            </tr>
            <tr>
                <td class="linea"><span>Nombre</span></td>
                <td class="linea"><span>Apellido Paterno</span></td>
                <td class="linea"><span>Apellido Materno</span></td>
            </tr>
        </table>

        <table class="ancho">
            <tr>
                <td class="datos">aracelimtzluna098@gmail.com</td>
                <td class="datos">2251043162</td>
                <td class="datos">2251043162</td>
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
                <td class="datos">INFORMÁTICA</td>
                <td class="datos">CONTABILIDAD</td>
                <td class="datos">ADMINISTRACIÓN DE RECURSOS HUMANOS</td>
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
                <td class="datos">LEONILA</td>
                <td class="datos">LUNA</td>
                <td class="datos">RUPALDA</td>
            </tr>
            <tr>
                <td class="linea"><span>Nombre</span></td>
                <td class="linea"><span>Apellido Paterno</span></td>
                <td class="linea"><span>Apellido Materno</span></td>
            </tr>
        </table>
        <table class="ancho">
            <tr>
                <td class="datos">AMA DE CASA</td>
                <td class="datos">2251046589</td>
                <td class="datos">2245896454</td>
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
                <td class="datos">TRIGAL</td>
                <td class="datos">9</td>
                <td class="datos">PREDIO CHIHUAHUA</td>
            </tr>
            <tr>
                <td class="linea"><span>Calle</span></td>
                <td class="linea"><span>Número</span></td>
                <td class="linea"><span>Colonia o Localidad</span></td>
            </tr>

        </table>
        <table class="ancho">
            <tr>
                <td class="datos">TLAPACOYAN</td>
                <td class="datos">VERACRUZ</td>
                <td class="datos">93650</td>
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
                <td style="width: 30%; text-align: center;">30DST0154F</td>
                <td style="width: 70%; text-align: center">ESCUELA SECUNDARIA TÉCNICA INDUSTRIAL NO. 154</td>
            </tr>
            <tr>
                <td style="width: 30%;" class="linea"><span>Clave</span></td>
                <td style="width: 70%;" class="linea"><span>Nombre</span></td>
            </tr>
        </table>
        <table class="ancho">
            <tr>
                <td class="datos">SECUNDARIA TÉCNICA</td>
                <td class="datos">FEDERAL</td>
                <td class="datos">JUAN LOPEZ GARCÍA</td>
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