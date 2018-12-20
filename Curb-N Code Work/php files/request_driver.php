<!DOCTYPE html>
<html>
<title>Contact</title>
<style>

body{
  margin: 0 auto;
  background-color: blue;
} 

h1{
  text-align: center;
  font-size: 70px;
  margin: 0;
}

h2{
  padding-left: 5%;
  font-size: 30px;
  margin: 0;
}

h3{
	text-align: center;
	font-size: 80px;
}

p{
	text-align: center;
}

.info{
  margin: 0;
  padding-left: 5%;
  font-size: 25px;
}

.press{
  cursor: pointer;
  font-size: 12px;
  margin-left: 30px;
  width: 70px;
  height: 30px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}

</style> 

<body>
  <h1><u>EDC</u></h1>
  <h2><u>Driver:</u></h2>
  <div class = info> - Jeremy Parnell</div><br/>
  <h2><u>Driver Information</u></h2>
  <div class = info> - E-mail: jeremyistheman@uci.edu</div><br/>
  <div class = info> - Phone Number: 123-456-7890</div><br/>
  <h2><u>Travel Information</u></h2>
  <div class = info> - Starting Location: 1233 Yellow Brick Road</div><br/>
  <div class = info> - Ending Destination: 1234 Yellow Brick Road</div><br/>
  <h3><strong>Number of Available Seats: <u>4</u></strong></h3>
  <p>
    <button class = press onclick="window.location='others.php'">Back</button>
    <button class = press onclick="window.location='main.php'">Request</button>
  </p>
</body>
</html>