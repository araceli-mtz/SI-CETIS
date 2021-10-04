<div class="site-copyright text-center">
        <p>Centro de Estudios Tecnológicos Industrial y de Servicios No. 145</p>
        <p>Av. Las Palmas S/N, Colonia Jardines de Plaza Verde, Martínez de la Torre, Veracruz C.P. 93600</p>
    </div>
    

    <!-- Gob mx js -->
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <!-- bootbox code -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <!-- Menú desplegable -->
    <script>
    $gmx(document).ready( function( ) {
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
	<!-- Utils JS -->
	<script src="https://plantel.ambikon.com.mx/assets/js/utils.js"></script>

</body>

</html>