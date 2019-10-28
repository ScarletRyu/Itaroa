/* Pagina index  */
jQuery(document).ready(function($) {


    var dict = {
        "Restaurante":{
            en:"Restaurants",
            eu:"Jatetxeak",
            es:"Restaurantes"			
        },
        "Tienda":{
            en:"Shops",
            eu:"Dendak",
            es:"Tiendas"
        },
        "Ubicacion":{
            en:"Location",
            eu:"Kokapena",
            es:"Ubicación"
        },
        "Contacto":{
            en:"Contact us",
            eu:"Gurekin kontaktatu",
            es:"Contacta con nosotros"
        },
        /*Tiendas */
        "TitTienda":{
            en:"Shops",
            eu:"Dendak",
            es:"Tiendas"
        },
        "Tienda1":{
            en:"From: 10:00 ",
            eu:"Irekita: 10:00",
            es:"De: 10:00"
        },
        "Tienda2":{
            en:"To: 23:00",
            eu:"Itxita: 23:00",
            es:"Hasta: 23:00"
        },
        "Tienda3":{
            en:"Phone: 966 435 854",
            eu:"Tlfno Zenbakia: 966 435 854",
            es:"Telefono: 966 435 854"
        },
        /* Restaurantes*/
        "TitRestaurante":{
            en:"Restaurants",
            eu:"Jatetxeak",
            es:"Restaurantes"
        },
        "Rest1":{
            en:"From: 10:00",
            eu:"Irekita: 10:00",
            es:"De: 10:00"
        },
        "Rest2":{
            en:"To: 23:00",
            eu:"Itxita: 23:00",
            es:"Hasta: 23:00"
        },
        "Rest3":{
            en:"Phone: 94733455",
            eu:"Tlfno Zenbakia 94733455",
            es:"Telefono 94733455"
        },
        "name1":{
            en:"Name",
            eu:"Izena",
            es:"Nombre"
        },
        "coment1":{
            en:"Comentary",
            eu:"Iruzkinak",
            es:"Comentario"
        },
        "mail1":{
            en:"E-mail",
            eu:"Helbide elektronikoa",
            es:"Correo"
        },
    }

    $('.idioma').click(function() {
        var translator = $('body').translate({lang:$(this).attr('data-name'), t: dict});
    });

});


