<!--code taken from: http://gmaps-samples-v3.googlecode.com/svn/trunk/drivingdirections/directions-demo.html-->

<div id="side-container">
  <ul>
    <li class="dir-label">From:</li>

    <li><input id="from-input" type=text value="<?php echo $order['Address']['address'].", ".$order['Address']['city'].", ".$order['Address']['country'];?>"/></li>
    <br clear="both"/>
    <li class="dir-label">To:</li>
    <li><input id="to-input" type=text value="<?php echo $order['Store']['address'].", ".$order['Store']['city'].", ".$order['Store']['country'];?>"/></li>
  </ul>
  <div>
    <select onchange="Demo.getDirections();" id="travel-mode-input">
      <option value="driving" selected="selected">By car</option>

      <option value="bicycling">Bicycling</option>
      <option value="walking">Walking</option>
    </select>

    <input onclick="Demo.getDirections();" type=button value="Go!"/>
  </div>
  <div id="dir-container"></div>
</div>
<div id="map-container"></div>

<script type="text/javascript">
var Demo = {
  // HTML Nodes
  mapContainer: document.getElementById('map-container'),
  dirContainer: document.getElementById('dir-container'),
  fromInput: document.getElementById('from-input'),
  toInput: document.getElementById('to-input'),
  travelModeInput: document.getElementById('travel-mode-input'),

  // API Objects
  dirService: new google.maps.DirectionsService(),
  dirRenderer: new google.maps.DirectionsRenderer(),
  map: null,

  showDirections: function(dirResult, dirStatus) {
    if (dirStatus != google.maps.DirectionsStatus.OK) {
      alert('Directions failed: ' + dirStatus);
      return;
    }

    // Show directions
    Demo.dirRenderer.setMap(Demo.map);
    Demo.dirRenderer.setPanel(Demo.dirContainer);
    Demo.dirRenderer.setDirections(dirResult);
  },

  getSelectedTravelMode: function() {
    var value =
        Demo.travelModeInput.options[Demo.travelModeInput.selectedIndex].value;
    if (value == 'driving') {
      value = google.maps.DirectionsTravelMode.DRIVING;
    } else if (value == 'bicycling') {
      value = google.maps.DirectionsTravelMode.BICYCLING;
    } else if (value == 'walking') {
      value = google.maps.DirectionsTravelMode.WALKING;
    } else {
      alert('Unsupported travel mode.');
    }
    return value;
  },

  getDirections: function() {
    var fromStr = Demo.fromInput.value;
    var toStr = Demo.toInput.value;
    var dirRequest = {
      origin: fromStr,
      destination: toStr,
      travelMode: Demo.getSelectedTravelMode(),
      unitSystem: google.maps.DirectionsUnitSystem.METRIC,
      provideRouteAlternatives: true
    };
    Demo.dirService.route(dirRequest, Demo.showDirections);
  },

  init: function() {
    var latLng = new google.maps.LatLng(37.77493, -122.419415);
    Demo.map = new google.maps.Map(Demo.mapContainer, {
      zoom: 13,
      center: latLng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    // Show directions onload
    Demo.getDirections();
  }
};

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', Demo.init);
</script>