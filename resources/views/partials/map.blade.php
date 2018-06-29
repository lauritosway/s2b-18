<div class="col-sm-12" id="map" style="height: 450px;">
  

</div>

<script src="//maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
  var locations = [
    ['Start2bee', 41.411194, 2.158167, 4],
    ['Start2bee Verdi/Park güell', 41.410790, 2.150842, 5],
    ['Start2bee Travessera/Lesseps', 41.408983, 2.152987, 6],

  ];

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: new google.maps.LatLng(41.409209, 2.156810),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoomControl: true,
    scrollwheel: false,
    navigationControl: true,
    mapTypeControl: true,
    draggable: true

  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }
</script>