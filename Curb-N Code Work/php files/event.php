<!DOCTYPE html>
<html>
<title>EDC</title> <!--replace with actual name of the event-->
<style>
body{
	margin: 0 auto;
}

.event_pic{
	background-image: url(http://vegasseven.com/files/2014/06/aLIVE-Coverage-for-Insomniac-3.jpg); /*replace with actual picture of the event*/
	background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
  margin: 0;

}

.box{
 	margin: 0;
  background-color: rgb(179, 215, 255);
  height: 900px;
}

h1{
	text-align: center;
	margin: 0;
	font-size: 87px
}

h2{
	text-align: center;
	font-size: 56px;
}

h3{
	text-align: center;
	font-size: 48px;
}

p{
	text-align: center;
	font-size: 34px;
}

.rider{
  cursor: pointer;
  font-size: 12px;
  margin-left: 20px;
  width: 70px;
  height: 30px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}

.find_others{
  cursor: pointer;
  font-size: 12px;
  margin-left: 50px;
  width: 70px;
  height: 50px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}

.driver{
  cursor: pointer;
  font-size: 12px;
  margin-left: 70px;
  width: 70px;
  height: 30px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}

.back{
  cursor: pointer;
  font-size: 12px;
  width: 70px;
  height: 30px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}
</style>

<body>
<div class = "event_pic"></div>
<div class = "box">

 <h1><strong><u>EDC</u></strong></h1><!--name of the event here-->
 <p><em>A Cool rave full of experiences</em></p><!--description of event-->
 <h3>Type of event: rave</h3><!--type of event goes here-->
 <h3>Topic of event: music</h3><!--topic of event goes here-->
 <h2>Location: 1234 yellow brick road</h2><!--locationof event-->
 <p>Starting Time: 04/28/2017 7:00PM<!--starting time of event here--></p> 
 <p>Ends: 04/30/2017 8:00PM<!--ending time of event--></p>
 
 <p>
   <button class = "rider" value = "Rider" type = "button" onclick="window.location='rider_app.php'">Rider</button>
   <button class = "find_others" value = "Rider" type = "button" onclick="window.location='others.php'">Find Others</button>
   <button class = "driver" value = "Driver" type = "button" onclick="window.location='driver_app.php'">Driver</button>
 </p>
 <p>
   <button class = back onclick="window.location='main.php'">Back</button>
</p>
</div>
</body>

</html>
