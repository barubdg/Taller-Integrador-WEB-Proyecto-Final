$(document).ready(function () {

//    $('nav.men li span:first');
    $('.contenedormenusproductosdos div#muestra2').hide();
    $('.contenedormenusproductosdos div#muestra3').hide();
    $('.contenedormenusproductosdos div#muestra4').hide();
    $('.contenedormenusproductosdos div#muestra5').hide();
    $('.contenedormenusproductosdos div#muestra6').hide();
    $('.contenedormenusproductosdos div#muestra7').hide();
    $('.contenedormenusproductosdos div#muestra8').hide();
    $('.contenedormenusproductosdos div#muestra9').hide();
    $('.contenedormenusproductosdos div#muestra10').hide();
    $('.contenedormenusproductosdos div#muestra11').hide();
    $('.contenedormenusproductosdos div#muestra1').show();




    $('div#cuerpo div#cuerpodos nav.men li span').click(function () {
       
        var activetab = $(this).attr('href');
        $(activetab).show();
        return false;

    });

    $('div.contenedormenusproductosdos div.clickon div.contenedordemuestra div.producto15 a').click(function () {
        // Oculta todos los divs dentro de contenedormenusproductosdos
        $('.contenedormenusproductosdos div.clickon').hide();

        // Obtiene el href del enlace clicado
        var activetab = $(this).attr('href');

        // Muestra el div correspondiente
        $(activetab).show();

        return false;

    });

    $('div.contenedormenusproductosdos div.clickon3 div.contenedormenusproductomuestra3 div.producto a').click(function () {
        
        $('.contenedormenusproductosdos div.clickon').hide();
        $('.contenedormenusproductosdos div.clickon3').hide();
        var activetab = $(this).attr('href');
        $(activetab).show();
        return false;

    });

    $('div.contenedormenusproductosdos div.clickon3 div.contenedormenusproductomuestra3 a.producto1515').click(function () {
        
        $('.contenedormenusproductosdos div.clickon').hide();
        $('.contenedormenusproductosdos div.clickon3').hide();
        var activetab = $(this).attr('href');
        $(activetab).show();
        return false;

    });



});


