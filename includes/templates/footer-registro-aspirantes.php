    <script>
        // Initialize page URL
        var base_url = '#';
        var form_current_url = '#';
        // $gmx = $;
        $gmx(document).ready(function () {
            // Prepare navigation menu
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });
        });
    </script>

	<!-- Script required by childs -->
	<!-- Form validation CDN -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<!-- DatePicker CDN -->
	<script src="https://cdn.datos.gob.mx/assets/js/jquery-ui-datepicker.min.js"></script>
	<!-- Chosen CDN -->
	<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
	<!-- Load JS service -->
	<script src="https://plantel.ambikon.com.mx/assets/js/service.js"></script>

	<script>
        var current_step = 0;
        var api_url = base_url + 'api/aspirantes/';
        var next_url = base_url + 'aspirantes';
        var carreras = [{ "id": "1", "clave": "333400001-", "nombre": "CONTABILIDAD", "direccion_url": "contabilidad", "activo": "1" }, { "id": "2", "clave": "353200001-", "nombre": "CONSTRUCCI\u00d3N", "direccion_url": "mantenimiento_industrial", "activo": "1" }, { "id": "3", "clave": "344100002-", "nombre": "PROGRAMACI\u00d3N", "direccion_url": "programacion", "activo": "1" }, { "id": "4", "clave": "321300002-", "nombre": "MEDIOS DE COMUNICACI\u00d3N", "direccion_url": "trabajo_social", "activo": "1" }, { "id": "5", "clave": "351700001-", "nombre": "SOPORTE Y MANTENIMIENTO", "direccion_url": "mantenimiento_de_computo", "activo": "1" }, { "id": "6", "clave": "371400001-", "nombre": "LABORATORISTA CLINICO", "direccion_url": "laboratorio_clinico", "activo": "1" }]
        $gmx(document).ready(function () {
            // Date calendar initialize
            $('#date').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
                yearRange: '-80:-10',
            });
        });
    </script>

	<!-- Load form JS -->
	<script src="https://plantel.ambikon.com.mx/assets/js/form_utils.js"></script>
	<script src="https://plantel.ambikon.com.mx/assets/js/form_steps.js"></script>
	<script src="https://plantel.ambikon.com.mx/assets/js/form_validate.js"></script>