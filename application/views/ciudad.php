<!DOCTYPE html>
<html>
<head>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFvbOtyYt2th3Yspkw4etzi8lZoUPw8S8&libraries=places&callback=initMap">
  </script>
    <title>Mapa</title>
    <style>
        #mapa1 {
            height: 600px;
            width: 100%;
        }
    </style>

</head>
<body>
    <h1>AREA DE LA CIUDAD DE ?</h1>
    <br>
    <h1>Bibury</h1>
    <br>
    <div id="mapa1"></div>
    <script>
        function initMap() {
            var coordenadaCentral = new google.maps.LatLng(51.7574676345109, -1.8269901055460545);
            var miMapa = new google.maps.Map(document.getElementById('mapa1'), {
                center: coordenadaCentral,
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var coordenadas = [
                          new google.maps.LatLng(51.758437218738926, -1.8282346505401024),// UTC
                          new google.maps.LatLng(51.75927396647326, -1.8290500420879263), // Salache
                          new google.maps.LatLng(51.759778663958905, -1.8290714997604298), // Pujili
                          new google.maps.LatLng(51.76054898082395, -1.8295006532066531), // Mana1
                          new google.maps.LatLng(51.76231534746311, -1.8356375474876465), // UTC2
                          new google.maps.LatLng(51.76207629436733, -1.8363241930016039),
                          new google.maps.LatLng(51.76175755493736, -1.8365173120524045),
                          new google.maps.LatLng(51.76115991244113, -1.8351869363691122),
                          new google.maps.LatLng(51.76115991244113, -1.8352942247304758),
                          new google.maps.LatLng(51.760708355086244, -1.8351011056796755),
                          new google.maps.LatLng(51.759791945395506, -1.8345002908549626),
                          new google.maps.LatLng(51.75794578823893, -1.8328480500870028),
                          new google.maps.LatLng(51.757348095287774, -1.8325905580192687),
                          new google.maps.LatLng(51.756683982730124, -1.831946827849934),
                          new google.maps.LatLng(51.756458182235605, -1.8312816400082876),
                          new google.maps.LatLng(51.756418334972324, -1.8304018754435296),
                          new google.maps.LatLng(51.756498029463756, -1.8293075341556604),
                          new google.maps.LatLng(51.75672382975902, -1.8282990235570358),
                          new google.maps.LatLng(51.7569894757197, -1.8280629891616127),
                          new google.maps.LatLng(51.75748091662728, -1.8270115632183659),
                          new google.maps.LatLng(51.758623164019895, -1.8284063119185914)// Mana4
            ];

            function trazarLineas(mapa, coordenadas) {
                for (var i = 0; i < coordenadas.length - 1; i++) {
                    var linea = new google.maps.Polyline({
                        path: [coordenadas[i], coordenadas[i + 1]],
                        geodesic: true,
                        strokeColor: '#FF0000',
                        strokeOpacity: 1.0,
                        strokeWeight: 2
                    });
                    linea.setMap(mapa);
                }
            }

            // Llamar a la función para trazar líneas
            trazarLineas(miMapa, coordenadas);
        }
    </script>
</body>
</html>
