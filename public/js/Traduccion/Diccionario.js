/* Pagina index  */
var dict = {
    "Restaurante":{
        eng:"Restaurant",
        eus:"Jatetxea",
        esp:"Restaurante"			
    },
    "Tienda":{
        eng:"Shop",
        eus:"Denda",
        esp:"Tienda"
    },
    "Ubicacion":{
        eng:"Location",
        eus:"Kokapena",
        esp:"Ubicación"
    },
    "Contacto":{
        eng:"Contact us",
        eus:"Deitu",
        esp:"Contacto"
    },
    /*Tiendas */
    "TitTienda":{
        eng:"Shops",
        eus:"Dendak",
        esp:"Tiendas"
    },
    "Contacto":{
        eng:"Contact us",
        eus:"Kontaktatu",
        esp:"Contacto"
    },
    "Tienda1":{
        eng:"From: 10:00 ",
        eus:"Irekita: 10:00",
        esp:"De: 10:00"
    },
    "Tienda2":{
        eng:"To: 23:00",
        eus:"Itxita: 23:00",
        esp:"Hasta: 23:00"
    },
    "Tienda3":{
        eng:"Phone: 966 435 854",
        eus:"Tlfno Zenbakia: 966 435 854",
        esp:"Telefono: 966 435 854"
    },
    /* Restaurantes*/
    "TitRestaurante":{
        eng:"Restaurants",
        eus:"Jatetxeak",
        esp:"Restaurantes"
    },
    "Rest1":{
        eng:"From: 10:00",
        eus:"Irekita: 10:00",
        esp:"De: 10:00"
    },
    "Rest2":{
        eng:"To: 23:00",
        eus:"Itxita: 23:00",
        esp:"Hasta: 23:00"
    },
    "Rest3":{
        eng:"Phone: 94733455",
        eus:"Tlfno Zenbakia 94733455",
        esp:"Telefono 94733455"
    },
    "name1":{
        eng:"Name",
        eus:"Izena",
        esp:"Nombre"
    },
    "coment1":{
        eng:"Comentary",
        eus:"Iruzkinak",
        esp:"Comentario"
    },
    "mail1":{
        eng:"E-mail",
        eus:"Helbide elektronikoa",
        esp:"Correo"
    },
}

function traducir(idioma){
    var translator = $('body').translate({lang: idioma, t: dict});
   
}

