$(document).ready(function() {
    'use strict';
    //Nuevo registro
    $('#crear-registro').on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exitoso') {
                    alert("Usuario registrado correctamente n.n");
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                } else {
                    alert("El usuario ya existe");
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                }    
            }
        })
    });

});