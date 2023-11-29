<br>
<h1>DIRECCION DE LA UTC</h1>

<br>
<div id="mapa1" style="width:100%; height:600px; border:2px solid black;">
</div>
<script type="text/javascript">
    function initMap(){
      var coordenadaCentral=new google.maps.LatLng(-0.9176428582274488, -78.63299861542403);
      var miMapa=new google.maps.Map(document.getElementById('mapa1'),
      {
        center: coordenadaCentral,
        zoom:9,
        mapTypeId: google.maps.MapTypeId.ROADDMAP
      }
    );
    var marcadorUTC=new google.maps.Marker({
      position:new google.maps.LatLng(-0.9178980716141352, -78.63297507471616),
      map:miMapa,
      title:'UTC MATRIZ',
      icon:'<?php echo base_url('assets/img/mar_utc.png'); ?>'
    });

    var marcadorSalache=new google.maps.Marker({
      position:new google.maps.LatLng(-0.9995078769511356, -78.6234195113675),
      map:miMapa,
      title:'UTC SALACHE'
    });

    var marcadorPujili=new google.maps.Marker({
      position:new google.maps.LatLng(-0.958262735020909, -78.69645917471601),
      map:miMapa,
      title:'UTC PUJILI'
    });

    var marcadorMana=new google.maps.Marker({
      position:new google.maps.LatLng(-0.8794725281761618, -79.24223899299336),
      map:miMapa,
      title:'UTC MANA'
    });

    }
</script>
