<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
  
<style>
  #map {
        height: 45%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      h1{
        text-align: center;
      }

      .form-group{
        font-size: 25px;
      }

      .amount{
        font-size: 24px;
      }

      .wrapper {
        text-align: center;
      }

      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }

      #right-panel {
        height: 45%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map {
        margin-right: 400px;
      }

      #floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
      }
</style>
  
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>Rider Request</title>
</head>

<body>
  <h1>Rider Request</h1>
  <h3><u>Directions:</u></h3>
  <div id="right-panel"></div>
  <div id="map"></div>
  <form action = main.php><br/>
    <div class="form-group">
      <label>Start Address:</label>
      <input type="text" class="form-control" id = "start" placeholder = "Starting Location" required>
    </div>
    <div class="form-group">
      <label>Destination:</label>
      <input type="text" class="form-control" id = "end" placeholder = "Ending Destination" required>
    </div>
    <div class = "wrapper">
      <input type = "button" value = "Preview Map">
    </div>
    <h3><u>Payment:</u></h3>
    <p class = "amount">
      Amount Willing to Pay:&nbsp<input class = "seats" type = "number" step="0.01" pattern = "[0-9]+\.[0-9]{2}" min = 0 required>
    </p>
    <div class = "wrapper">
      <input type = "submit" value = "Submit">
    </div>
  </form>
</body>

    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeBlgj7SUOs6HcWIFuMZi33lL3dZNS6JU&callback=initMap">
    </script>
</html>