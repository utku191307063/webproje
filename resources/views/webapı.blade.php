<html>
  <head>
<style>
/*
 * Always set the map height explicitly to define the size of the div element
 * that contains the map.
 */
#map {
  height: 100%;
}

/*
 * Optional: Makes the sample page fill the window.
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>
    <title>San Optik</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
  </head>
  <body>
    <div id="map"></div>

<script>
let map;



function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 40.897163084819056, lng: 29.172381582733905 },
    zoom: 17,


  });

  const marker = new google.maps.Marker({
    position: { lat: 40.897163084819056, lng: 29.172381582733905 },
    map: map,});

}

window.initMap = initMap;

</script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArOBvOHYWTf80Mf00mIvahLZYhF5m5ye4&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>
