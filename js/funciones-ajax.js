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

//Editar Registro
$('#editar-registro').on('submit', function(e) {
    e.preventDefault();
    //console.log("");
    var datos = $(this).serializeArray();
    $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success: function(data) {
            console.log(data);
            var resultado = data;
            if (resultado.respuesta == 'exitoso') {
                alert("Actualizado correctamente");
                setTimeout(function() {
                    location.reload();
                }, 500);
            } else {
                alert("Error");
            }
        }
    })
});

// Eliminar un registro
$('.borrar_registro').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    var tipo = $(this).attr('data-tipo');
    
    $.ajax({
        type: 'post',
        data: {
            user_id: id,
            registro: 'eliminar'
        },
        url: 'includes/modelos/modelo-' + tipo + '.php',
        success: function(data) {
            console.log(data);
            var resultado = JSON.parse(data);
            if (resultado.respuesta == 'exitoso') {
                //jQuery('[data-id="' + resultado.id_eliminado + '"]').parents('tr').remove();
                alert("Registro Eliminado");
                setTimeout(function() {
                    location.reload();
                }, 200);
            } else {
                
            }
        }
    })
});