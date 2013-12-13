"use strict";
function googleMaps() {
  var infowindow, conteudoInfoWindow, estilosMapa, localizacao, mapOptions, mapa, iconeMarcador, marcador;
  conteudoInfoWindow =
    "<div class='infowindow'>" +
      "<div class='nome-empresa'>" +
        "<p>Revista Mauá e Região</p>" +
      "</div>" +
      "<div class='endereco-mapa'>" +
        "<p>" +
          "Rua Clodoaldo Portugal Caribé, 276 <br />" +
          "Vila Assis Brasil - Mauá - SP. <br />" +
          "CEP: 09370-620" +
        "</p>" +
      "</div>" +
    "</div>";

  estilosMapa = [
    {
      stylers: [
        { hue: "#FFFF00" },
        { saturation: 100 }
      ]
    }, {
      featureType: "road.local",
      elementType: "labels",
      stylers: [
        { lightness: 0 },
        { visibility: "on" }
      ]
    }, {
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "on" }
      ]
    }
  ];

  localizacao = new google.maps.LatLng(-23.67914, -46.46164);
  mapOptions = {
    center: localizacao,
    zoom: 17,
    minZoom: 15,
    maxZoom: 18,
    streetViewControl: false,
    mapTypeControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  mapa = new google.maps.Map(document.getElementById('mapa'), mapOptions);

  mapa.setOptions({styles: estilosMapa});

  iconeMarcador = 'http://grupomauaeregiao.com.br/imagens/icone.png';
  marcador = new google.maps.Marker({
    position: localizacao,
    title: "Revista Mauá e Região",
    icon: iconeMarcador
  });

  marcador.setMap(mapa);
  marcador.setAnimation(google.maps.Animation.DROP);

  infowindow = new google.maps.InfoWindow({
    content: conteudoInfoWindow
  });

  google.maps.event.addListener(marcador, 'click', function () {
    var expr;
    expr = marcador.getAnimation() !== null
      ? marcador.setAnimation(null)
      : marcador.setAnimation(google.maps.Animation.BOUNCE);
    expr = infowindow.getMap()
      ? infowindow.close()
      : infowindow.open(mapa, marcador);
  });
} // #Google Maps
google.maps.event.addDomListener(window, 'load', googleMaps);