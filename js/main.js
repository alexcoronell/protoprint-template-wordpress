$('document').ready(function() {

    /* Ocultar Fondo Cargando */
    setTimeout(function() {
        $('#fondo-cargando').fadeOut();
    }, 1000);

    /* Mostrar y ocultar menu versión mobile */
    $('#boton-menu').click(function() {
        if ($(window).width() < 768) {
            $('.menu').removeClass('menu-oculto');
        } else {
            $('.enlaces-menu').show();
            setTimeout(function() {
                $('#boton-menu').addClass('ocultar-boton-menu');
                $('#boton-cerrar-menu').addClass('ocultar-menu');
                $('#boton-cerrar-menu').removeClass('ocultar-boton-menu');
                $('.menu').addClass('menu-desktop');
                $('.enlaces-menu').addClass('enlaces-menu-desktop');
                setTimeout(function() {
                    $('.menu').addClass('menu-desktop-shadow');
                }, 300);
            }, 300);

        }
    });
    /*******Boton cerrar menu versión móvil */
    $('.esconder-menu').click(function() {
        $('.menu').addClass('menu-oculto');
    });
    /****Boton cerrar menu versión desktop */
    $('#boton-cerrar-menu').click(function() {
        $('#boton-menu').removeClass('ocultar-boton-menu');
        $('#boton-cerrar-menu').removeClass('ocultar-menu');
        $('#boton-cerrar-menu').addClass('ocultar-boton-menu');
        $('.menu').removeClass('menu-desktop');
        $('.enlaces-menu').removeClass('enlaces-menu-desktop');
        setTimeout(function() {
            $('enlaces-menu').hide();
            $('.menu').removeClass('menu-desktop-shadow');
        }, 500);
    });

    /************************* MENU DESKTOP ***************************/
    $(window).scroll(function() {

        var scroll = $(window).scrollTop();
        /* console.log(scroll); */
        if (scroll >= 100) {
            if ($(window).width() >= 768) {
                $('.cabecera').addClass('efectoHeader');
                $('.encabezado').addClass('efectoEncabezado');
                $('.mostrar-menu').addClass('efectoBotonMenu');
                $('.ocultar-boton-menu').addClass('efectoBotonMenu');
            }
        } else {
            if ($(window).width() >= 768) {
                $('.cabecera').removeClass('efectoHeader');
                $('.encabezado').removeClass('efectoEncabezado');
                $('.mostrar-menu').removeClass('efectoBotonMenu');
                $('.ocultar-boton-menu').removeClass('efectoBotonMenu');
            }
        }
    });

    /************************* INFOPROMOCIONES ***************************/
    $('.infopromociones-slider').slick({
        arrows: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        nextArrow: '<button type="button" class="slick-next botones-slider-infopromociones"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>',
        prevArrow: '<button type="button" class="slick-prev botones-slider-infopromociones"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>'
    });

    /***********************SMOOTH SCROLL ************************************/
    smoothScroll.init({
        speed: 1300, // Integer. How fast to complete the scroll in milliseconds
        offset: 100, // Integer. How far to offset the scrolling anchor location in pixels

    });
    /************************* BOTONES QUIENES SOMOS ***************************/

    $('#boton-mision').click(function() {
        $('.contenidoMision').fadeToggle();
    });
    $('#boton-vision').click(function() {
        $('.contenidoVision').fadeToggle();
    });

    $('#boton-valores').click(function() {
        $('.contenidoValores').fadeToggle();
    });
    /************************* INICIO DE TOOLTIP ***************************/
    $('[data-toggle="tooltip"]').tooltip()

    /************************* VALIDACION DE FORMULARIO ***************************/
    $('#contactoForm').bootstrapValidator({
        message: "Esto no es válido",
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: "Este es un campo obligatorio"
                    },
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: "Este es un campo obligatorio"
                    },
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: "Este es un campo obligatorio"
                    },
                    emailAddress: {
                        message: "Eso no parece un correo electrónico"
                    }
                }
            },
            mensaje: {
                validators: {
                    notEmpty: {
                        message: "El mensaje no puede ir vacio"
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        e.preventDefault();

        var $form = $(e.target);

        var bv = $form.data('bootstrapValidator');

        $.post($form.attr('action'), $form.serialize(), function(result) {
            $('#correcto').fadeIn(500);
            console.log(result);
            setTimeout(function() {
                $('#correcto').fadeOut(500);
                limpiarFormulario();
                $('#contactoForm input', '#contactoForm textarea').val();
                $("#contactoForm").trigger("reset");
                /* $(".boton-formulario").attr("disabled", false);  */
            }, 2000);
        }, 'json');

    });
    /* Fin bootstrapValidator */


}); /* Fin $('document').ready(function() */

/*************FUNCION LIMPPIAR FORMULARIO **********/
// Funcion limpiar
function limpiarFormulario() {
    $("#codigo").val('');
    $("#nombre").val('');
    $("#telefono").val('');
    $("#email").val('');
    $("#mensaje").val('');
}